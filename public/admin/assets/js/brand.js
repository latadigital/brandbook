$(document).ready(function () {
  // clone dropdown
  $(document).on("click", "a.clone-btn", function(e) {
    const selectGroup = $(this).parent().find('div.select-group');
    const docClone = selectGroup.last().clone();
    if (selectGroup.length === 1) {
      docClone.html(docClone[0].innerHTML + '<div class="col-12"><a href="javascript:void(0)" title="" class="btn-delete float-end">Eliminar</a></div>')
    }
    docClone.insertAfter(selectGroup.last());
  });

  // delete dropdown
  $(document).on("click", "a.btn-delete", function(e) {
    $(this).parent().parent().remove();
  });

  // calendar
  $.ajax({
    type: "GET",
    url: "/administrator/campaign?type=json",
    success: (data = []) => {
      const sources = Array.isArray(data) && data.length > 0
        ? data.map(({
            name: title = '',
            release_date: start = '',
            end_date: end = '',
          }) => ({
            title,
            start,
            end,
          }))
        : [];
      renderCalendar(sources);
    },
  })
});

function renderCalendar(events = []) {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      initialView: 'dayGridMonth',
      initialDate: new Date(),
      navLinks: true,
      selectable: true,
      nowIndicator: true,
      dayMaxEvents: true,
      editable: true,
      selectable: true,
      businessHours: true,
      dayMaxEvents: true,
      events,
  });
  calendar.render();
}
