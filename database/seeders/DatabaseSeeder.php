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

        User::factory()->create([
            'name' => 'Ahmed ALHadiwi',
            'email' => 'ahmedalhadiwi04@gmail.com',
            'mobile' => '01224863072',
            'password' => Hash::make('password'),
            'roles' => 'admin',
        ]);

        User::factory(300)->create();

        // //Topic
        $topics = [
            // General Workplace Topics
            "Project updates", "Workflow improvements", "Team collaboration", "Career development",
            "Feedback", "Company goals", "Industry trends", "Streamlining processes",
            "Leadership opportunities", "Company culture", "Mentorship", "Innovation",
            "Efficiency", "Social", "Scientific", "Wellness", "Growth", "Sustainability",
            "Strategy", "Diversity",
            // Programming and Technology Topics
            "Frontend vs Backend", "JavaScript frameworks", "Server-side frameworks",
            "APIs and RESTful services", "Database optimization", "Responsive design",
            "UX and accessibility", "Version control", "Security", "Web performance",
            "DevOps", "Progressive Web Apps", "Testing and debugging", "HTML5 and CSS3",
            "Real-time data", "Cloud deployment", "Microservices", "Single Page Applications", "SEO"
        ];

         foreach($topics as $topic){
             Topic::create([
                 'topic' => $topic
             ]);
         }


        // //Author
        Author::factory(50)->create();

        // //Languages
        $languages =['Arabic','English','French','Italian','Polish','Turkish','Ukrain'];
        foreach ($languages as $language) {
            Language::create([
                'lang' => $language
            ]);
        }

        // //Books
        Book::factory(100)->create();

    }
}
