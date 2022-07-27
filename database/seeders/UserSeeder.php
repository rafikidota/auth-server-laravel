<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            [
                'name' => 'Test 1',
                'email' => 'test1@test.com',
                'password' => '123456'
            ], [
                'name' => 'Test 2',
                'email' => 'test2@test.com',
                'password' => '123456'
            ]
        ]);
    }
}
