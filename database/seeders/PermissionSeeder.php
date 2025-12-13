<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions with groups
        $permissions = [
            // Dashboard Group
            'dashboard.view',
            
            // Users Group
            'users.view',
            'users.create',
            'users.edit',
            'users.delete',
            'users.approve',
            
            // Roles Group
            'roles.view',
            'roles.create',
            'roles.edit',
            'roles.delete',
            
            // Product Categories Group
            'product_categories.view',
            'product_categories.create',
            'product_categories.edit',
            'product_categories.delete',
            
            // Products Group
            'products.view',
            'products.create',
            'products.edit',
            'products.delete',

            // About Sections Group
            'about_sections.view',
            'about_sections.create',
            'about_sections.edit',
            'about_sections.delete',

            // Services (Flip Cards) Group
            'services.view',
            'services.create',
            'services.edit',
            'services.delete',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Create roles and assign permissions
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $adminRole->givePermissionTo(Permission::all());

        $userRole = Role::firstOrCreate(['name' => 'user']);
        $userRole->givePermissionTo(['dashboard.view']);
    }
}
