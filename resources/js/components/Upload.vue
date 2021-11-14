<template>
  <div>
    <VueFileAgent
      ref="vueFileAgent"
      :theme="'grid'"
      :multiple="true"
      :deletable="true"
      :meta="true"
      :accept="'image/*,.zip,.rar'"
      :helpText="'Seleccione imagenes o archivos para subir'"
      :errorText="{
        type:
          'Tipo de archivo inválido. Solo se permiten imágenes o archivos comprimidos',
        size: 'Los archivos no deben exceder los 10 MB de tamaño',
      }"
      @select="filesSelected($event)"
      @beforedelete="onBeforeDelete($event)"
      @delete="fileDeleted($event)"
      v-model="fileRecords"
    >
    </VueFileAgent>
    <!-- <div class="alert clearfix">
      <button type="submit" class="btn btn-primary btn-lg create-campaign float-end">
        Crear campaña
      </button>
      <button
        type="button"
        :disabled="!fileRecordsForUpload.length"
        @click="uploadFiles()"
        class="btn btn-primary btn-lg float-end"
      >
        Subir piezas
      </button>
    </div> -->
  </div>
</template>

<script>
import VueFileAgent from "vue-file-agent";
import VueFileAgentStyles from "vue-file-agent/dist/vue-file-agent.css";
export default {
  data: function () {
    const campaignId = document.querySelector("input[name=campaign_id]").value;
    return {
      modeEditable:
        document.querySelector("input[name=editable]") !== null
          ? document.querySelector("input[name=editable]").value
          : false,
      campaign_id: campaignId,
      fileRecords: [],
      fileRecordsForUpload: [],
      uploadUrl: "/administrator/upload",
      getUploadsUrl: "/administrator/campaign/" + campaignId + "/files",
      uploadHeaders: {
        "X-CSRF-TOKEN": document
          .querySelector('meta[name="csrf-token"]')
          .getAttribute("content"),
      },
    };
  },
  mounted() {
    if (this.modeEditable) {
      this.getFiles();
    }
  },
  methods: {
    uploadFiles: async function () {
      var campaignId = this.campaign_id;
      const response = await this.$refs.vueFileAgent.upload(
        this.uploadUrl,
        this.uploadHeaders,
        this.fileRecordsForUpload,
        function createFormData(fileData) {
          var formData = new FormData();
          formData.append("file", fileData.file);
          formData.append("campaign_id", campaignId);
          return formData;
        }
      );
      if (response.length) {
        response.forEach(({ data = "", fileRecord = {} }) => {
          const findElement = this.fileRecords.find((file = {}) => {
            return file.file.name === fileRecord.file.name;
          });
          findElement.newname = data;
        });
      }
      this.fileRecordsForUpload = [];
    },
    deleteUploadedFile: function (fileRecord) {
      const campaignId = this.campaign_id;
      const { newname = "" } = fileRecord;

      axios({
        method: "DELETE",
        url: this.uploadUrl,
        data: {
          filename: newname,
          campaign_id: campaignId,
        },
        headers: {
          "Content-Type": "application/json",
        },
      });
    },
    filesSelected: function (fileRecordsNewlySelected) {
      var validFileRecords = fileRecordsNewlySelected.filter(
        (fileRecord) => !fileRecord.error
      );
      this.fileRecordsForUpload = this.fileRecordsForUpload.concat(validFileRecords);
      this.uploadFiles();
    },
    onBeforeDelete: function (fileRecord) {
      var i = this.fileRecordsForUpload.indexOf(fileRecord);
      if (i !== -1) {
        this.fileRecordsForUpload.splice(i, 1);
        var k = this.fileRecords.indexOf(fileRecord);
        if (k !== -1) this.fileRecords.splice(k, 1);
      } else {
        if (confirm("Se requiere confirmación para eliminar")) {
          this.$refs.vueFileAgent.deleteFileRecord(fileRecord);
        }
      }
    },
    fileDeleted: function (fileRecord) {
      var i = this.fileRecordsForUpload.indexOf(fileRecord);
      if (i !== -1) {
        this.fileRecordsForUpload.splice(i, 1);
      } else {
        this.deleteUploadedFile(fileRecord);
      }
    },
    getFiles: function () {
      axios({
        method: "GET",
        url: this.getUploadsUrl,
        headers: this.uploadHeaders,
      }).then((response = {}) => {
        const { data = {} } = response;
        const { files = [] } = data;
        this.fileRecords = files;
      });
    },
  },
};
</script>

<style scoped>
.create-campaign {
  margin-left: 10px;
}
</style>
