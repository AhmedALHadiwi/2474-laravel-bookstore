<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => 'Ahmed ALHadiwi',
        //     'email' => 'ahmedalhadiwi04@gmail.com',
        //     'mobile' => '01224863072',
        //     'password' => Hash::make('password'),
        //     'roles' => 'admin',
        // ]);

        User::factory(150)->create();
    }
}
