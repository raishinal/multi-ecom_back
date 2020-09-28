<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $vendorRole = Role::where('name', 'vendor')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);
        $author = User::create([
            'name' => 'Author User',
            'email' => 'author@author.com',
            'password' => Hash::make('password'),
        ]);
        $user = User::create([
            'name' => 'Generic User',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($vendorRole);
        $user->roles()->attach($userRole);
    }
}
