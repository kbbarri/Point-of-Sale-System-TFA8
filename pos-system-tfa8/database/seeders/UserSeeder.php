<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'full_name' => 'John Smith',
            ],
            [
                'username' => 'cashier1',
                'full_name' => 'Jane Cruz',
            ],
            [
                'username' => 'cashier2',
                'full_name' => 'Mark Santos',
            ],
            [
                'username' => 'staff1',
                'full_name' => 'Anna Reyes',
            ],
            [
                'username' => 'manager',
                'full_name' => 'Paul Garcia',
            ],
        ]);
    }
}