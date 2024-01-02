<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([
        //     CustomerSeeder::class
        // ]);
        \App\Models\Customer::factory()->count(25)->hasInvoices(10)->create();
        \App\Models\Customer::factory()->count(100)->hasInvoices(5)->create();
        \App\Models\Customer::factory()->count(100)->hasInvoices(3)->create();
        \App\Models\Customer::factory()->count(5)->create();
    }
}
