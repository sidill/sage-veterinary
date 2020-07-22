<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->updateOrInsert([
            'email' => 'isaacsai030@gmail.com'
        ], [
            'name' => 'Isaac Adzah Sai',
            'email' => 'isaacsai030@gmail.com',
            'password' => Hash::make('superadmin'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
