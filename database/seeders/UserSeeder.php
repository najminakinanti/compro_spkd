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
     */
    public function run(): void
    {
        $admin = Role::where('name', 'Admin')->first();

        User::create([
            'role_id' => $admin->unique_id,
            'name' => 'Admin',
            'email' => 'admin@spkd.com',
            'password' => Hash::make('password'),
        ]);
    }
}
