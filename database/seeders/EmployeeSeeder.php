<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'company_id' => 9,
                'role_id' => 1,
                'first_name' => 'Ashuraj',
                'last_name' => 'Srivastav',
                'email' => 'ashuraj@gmail.com',
                'phone' => '9811161332',
                'password' => bcrypt('12345678'),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => 1
            ]
        ]);
    }
}
