<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
        DB::table('users')->insert([
            'name' => 'Admin E-vote',
            'email' => 'ewebvote@gmail.com',
            'level' => 'admin',
            'password' => Hash::make('P@ssw0rd!'),
        ]);
        DB::table('users')->insert([
            'name' => 'Test voter',
            'email' => 'imvoterr@gmail.com',
            'level' => 'voter',
            'password' => Hash::make('password'),
        ]);
    }
}