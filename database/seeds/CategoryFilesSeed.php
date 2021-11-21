<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoryFilesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('category_files')->insert([
        'name' => 'Campañas',
        'folder' => 'campaigns',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);
    }
}
