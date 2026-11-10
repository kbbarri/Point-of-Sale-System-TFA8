<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan@gmail.com',
                'phone' => '09123456789',
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria@gmail.com',
                'phone' => '09234567890',
            ],
            [
                'full_name' => 'Pedro Reyes',
                'email' => 'pedro@gmail.com',
                'phone' => '09345678901',
            ],
            [
                'full_name' => 'Ana Garcia',
                'email' => 'ana@gmail.com',
                'phone' => '09456789012',
            ],
            [
                'full_name' => 'Carlo Mendoza',
                'email' => 'carlo@gmail.com',
                'phone' => '09567890123',
            ],
        ]);
    }
}