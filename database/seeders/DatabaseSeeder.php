<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Language;
use App\Models\Topic;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // // // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Ahmed ALHadiwi',
        //     'email' => 'ahmedalhadiwi04@gmail.com',
        //     'mobile' => '01224863072',
        //     'password' => Hash::make('password'),
        //     'roles' => 'admin',
        // ]);

        // User::factory(300)->create();

        // // //Topic
        // Topic::factory(100)->create();

        // // //Author
        // Author::factory(50)->create();

        // // //Languages
        // $languages =['Arabic','English','French','Italian','Polish','Turkish','Ukrain'];
        // foreach ($languages as $language) {
        //     Language::create([
        //         'lang' => $language
        //     ]);
        // }

        // // //Books
        // Book::factory(100)->create();

    }
}
