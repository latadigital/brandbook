<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Jorge',
            'lastname' => 'Carreño',
            'position' => 'Developer',
            'email' => 'cokehaas@gmail.com',
            'password' => Hash::make("2805"),
            'business_id' => 1,
            'role_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
