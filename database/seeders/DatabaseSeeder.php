<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Petugas',
            'email'     => 'petugas@gmail.com',
            'password'  => bcrypt('12345'),
            'level'     => 'petugas'
        ]);

        User::create([
            'name'      => 'Operator',
            'email'     => 'operator@gmail.com',
            'password'  => bcrypt('12345'),
            'level'     => 'operator'
        ]);
    }
}
