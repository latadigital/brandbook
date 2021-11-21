<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BusinessSeed::class);
        $this->call(RoleSeed::class);
        $this->call(UsersSeed::class);
        $this->call(StatusSeed::class);
        $this->call(CategorySeed::class);
        $this->call(CategoryFilesSeed::class);
    }
}
