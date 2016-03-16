<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Jos Notermans',
            'username' => 'Jos',
            'email'    => 'j.notermans@hotmail.com',
            'password' => Hash::make('notermans11'),
        ));
    }

}