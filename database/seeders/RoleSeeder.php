<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'Admin', 'slug' => 'admin'], 
            ['name' => 'Pemilik', 'slug' => 'pemilik'], 
        ];

        foreach ($roles as $item) {
            Role::create($item);
        }
    }
}
