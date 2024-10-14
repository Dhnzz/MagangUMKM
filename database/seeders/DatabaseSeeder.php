<?php

namespace Database\Seeders;

use App\Models\{User, Admin, Role};
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

        $role = Role::where('slug', 'admin')->first();

        $user = User::create([
            'role_id' => $role->id,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        Admin::create([
            'name' => 'Admin 1',
            'picture' => 'default.jpg',
            'phone' => '0895803409735',
            'user_id' => $user->id,
        ]);
    }
}
