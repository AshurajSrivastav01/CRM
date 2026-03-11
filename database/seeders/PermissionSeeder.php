<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->insert([

            [
                'id'=>1,
                'name'=>'Dashboard Access',
                'slug'=>'dashboard_access',
                'module'=>'dashboard',
                'created_at'=>now()
            ],

            [
                'id'=>2,
                'name'=>'Product Management Access',
                'slug'=>'product_access',
                'module'=>'product',
                'created_at'=>now()
            ],

            [
                'id'=>3,
                'name'=>'Inventory Access',
                'slug'=>'inventory_access',
                'module'=>'inventory',
                'created_at'=>now()
            ],

            [
                'id'=>4,
                'name'=>'Sales Access',
                'slug'=>'sales_access',
                'module'=>'sales',
                'created_at'=>now()
            ],

            [
                'id'=>5,
                'name'=>'HR Access',
                'slug'=>'hr_access',
                'module'=>'hr',
                'created_at'=>now()
            ],

            [
                'id'=>6,
                'name'=>'People Access',
                'slug'=>'people_access',
                'module'=>'people',
                'created_at'=>now()
            ],

            [
                'id'=>7,
                'name'=>'Reports Access',
                'slug'=>'reports_access',
                'module'=>'reports',
                'created_at'=>now()
            ],

            [
                'id'=>8,
                'name'=>'Settings Access',
                'slug'=>'settings_access',
                'module'=>'settings',
                'created_at'=>now()
            ]

        ]);
    }
}
