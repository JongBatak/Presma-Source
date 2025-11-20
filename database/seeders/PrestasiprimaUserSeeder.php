<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PrestasiprimaUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin Prestasi Prima',
                'email' => 'admin@smkprestasiprima.sch.id',
                'password' => Hash::make('password'), // ganti sesuai kebutuhan
            ],
            [
                'name' => 'Guru Prestasi Prima',
                'email' => 'guru@smkprestasiprima.sch.id',
                'password' => Hash::make('password'),
            ],
        ];

        foreach ($users as $u) {
            DB::table('users')->updateOrInsert(
                ['email' => $u['email']],
                [
                    'name' => $u['name'],
                    'password' => $u['password'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
