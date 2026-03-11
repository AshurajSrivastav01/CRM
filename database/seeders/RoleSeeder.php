<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'company_id' => 9,
                'name' => 'Super Admin',
                'description' => 'Full system access',
                'created_at' => now()
            ],
            [
                'id' => 2,
                'company_id' => 9,
                'name' => 'Sales Manager',
                'description' => 'Manage sales operations',
                'created_at' => now()
            ],
            [
                'id' => 3,
                'company_id' => 9,
                'name' => 'Purchaser',
                'description' => 'Manage purchasing',
                'created_at' => now()
            ],
            [
                'id' => 4,
                'company_id' => 9,
                'name' => 'HR Manager',
                'description' => 'Manage HR operations',
                'created_at' => now()
            ],
        ]);
    }
}
