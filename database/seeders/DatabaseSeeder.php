<?php

namespace Database\Seeders;

use App\Models\{User, Admin, Pemilik, Role};
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(RoleSeeder::class);

        $roleAdmin = Role::where('slug', 'admin')->first();
        $rolePemilik = Role::where('slug', 'pemilik')->first();

        $userAdmin = User::create([
            'role_id' => $roleAdmin->id,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        Admin::create([
            'name' => 'Admin 1',
            'picture' => 'default.jpg',
            'phone' => '0895803409735',
            'user_id' => $userAdmin->id,
        ]);

        $userPemilik = User::create([
            'role_id' => $rolePemilik->id,
            'email' => 'pemilik@gmail.com',
            'password' => bcrypt('pemilik123'),
        ]);

        Pemilik::create([
            'name' => 'Pemilik 1',
            'user_id' => $userPemilik->id,
            'picture' => 'default.jpg',
            'ktp' => 'default.jpg',
            'kk' => 'default.jpg',
            'phone' => '0895803409735',
        ]);
    }
}
