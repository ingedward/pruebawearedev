<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Edward Rodriguez',
            'email' => 'ing.erodriguez@outlook.com',
            'password' => '$2y$12$isQeFjYGOz1fFdoWAkY.yOTl.jQq5QEeIw74jHm7tbWmGBa4F/mpC',
            'role_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Juan Duarte',
            'email' => 'juan.duarte@gmail.com',
            'password' => '$2y$12$isQeFjYGOz1fFdoWAkY.yOTl.jQq5QEeIw74jHm7tbWmGBa4F/mpC',
            'role_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
