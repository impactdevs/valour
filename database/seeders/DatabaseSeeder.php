<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Seeder;

use Database\Seeders\TargetSeeder;
use Database\Seeders\ProductSeed;
use Illuminate\Support\Facades\Auth;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Tenant::factory(3)->create();

        User::factory(20)->create();

        // Retrieve all existing tenants
        $tenants = Tenant::all();

        // Create an admin user for each tenant
        foreach ($tenants as $tenant) {
            User::factory()->create([
                'name' => 'Admin User for ' . $tenant->name, // Customize the name
                'email' => 'admin_' . $tenant->id . '@example.com', // Create a unique email for each tenant
                'role' => 'admin', // Assign role as 'admin'
                'password' => bcrypt('password'), // Default password
                'tenant_id' => $tenant->id, // Assign the user to the current tenant
            ]);
        }

        $adminUser = User::where('role', 'admin')->first();
        Auth::login($adminUser);

        $this->call([
            ProductSeeder::class,
            MappingSeeder::class,
            VisitSeeder::class,
            TargetMetricSeeder::class,
            TargetSeeder::class,
        ]);

        Auth::logout();
    }
}
