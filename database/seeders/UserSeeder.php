<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name'=>'Administrator',
            'phone'=>'085174414744',
            'email'=>'admin@gmail.com',
            'foto'=>'',
            'password'=>Hash::make('123'),
            'role'=>'admin',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('users')->insert([
            'name'=>'User',
            'phone'=>'085174414744',
            'email'=>'user@gmail.com',
            'foto'=>'',
            'password'=>Hash::make('123'),
            'role'=>'user',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
