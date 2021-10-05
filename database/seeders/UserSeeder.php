<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            'name' =>'Jacqueline',
            'email' => 'jacqueline@gmail.com',
            'password' => Hash::make('root'),
        ]);
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@user.user',
            'password' => Hash::make('user'),
        ]);
    }
}
