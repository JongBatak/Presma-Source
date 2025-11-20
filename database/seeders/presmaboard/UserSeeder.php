<?php

namespace Database\Seeders\presmaboard;

use App\Models\presmaboard\PresmaboardUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Use updateOrInsert to avoid duplicate-key errors when the seeder is re-run
        DB::table((new PresmaboardUser)->getTable())->updateOrInsert(
            ['email' => 'admin@presmaboard.com'],
            [
                'name' => 'Admin Prestasi',
                'password' => Hash::make('admin123'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}