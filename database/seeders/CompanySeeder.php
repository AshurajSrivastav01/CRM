<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            [
                'name' => 'Acme Corporation',
                'slug' => Str::slug('Acme Corporation'),
                'email' => 'info@acme.com',
                'phone' => '1234567890',
                'address' => '123 Business Street',
                'city' => 'New York',
                'state' => 'NY',
                'country' => 'USA',
                'postal_code' => '10001',
                'logo' => null,
                'gst_number' => 'GST123456',
                'pan_number' => 'PAN123456',
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Tech Solutions Ltd',
                'slug' => Str::slug('Tech Solutions Ltd'),
                'email' => 'contact@techsolutions.com',
                'phone' => '9876543210',
                'address' => '456 Innovation Ave',
                'city' => 'San Francisco',
                'state' => 'CA',
                'country' => 'USA',
                'postal_code' => '94105',
                'logo' => null,
                'gst_number' => 'GST654321',
                'pan_number' => 'PAN654321',
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
