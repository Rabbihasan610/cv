<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\Setting;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create Admin User
        User::firstOrCreate(
            ['email' => 'admin@rabbihasan.site'],
            [
                'name' => 'Md Rabbi Hasan',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Seed Settings
        $settings = [
            'facebook' => 'https://www.facebook.com/rabbihasan610',
            'linkedin' => 'https://www.linkedin.com/in/rabbihasan610/',
            'github' => 'https://github.com/rabbihasan610',
            'buy_me_a_coffee' => 'https://buymeacoffee.com/rabbihasan610',
            'email' => 'mdrabbihasan610@gmail.com',
            'site_title' => 'Md Rabbi Hasan | Senior Laravel & PHP Developer',
        ];

        foreach ($settings as $key => $value) {
            Setting::firstOrCreate(['key' => $key], ['value' => $value]);
        }

        // 3. Seed Projects from projects.json
        $projectsJsonPath = base_path('../assets/data/projects.json');
        if (File::exists($projectsJsonPath)) {
            $projectsData = json_decode(File::get($projectsJsonPath), true);
            foreach ($projectsData as $project) {
                Project::firstOrCreate(
                    ['title' => $project['title']],
                    [
                        'slug' => Str::slug($project['title']),
                        'image' => $project['image'] ?? null,
                        'technology' => $project['technology'] ?? null,
                        'purpose' => $project['purpos'] ?? null,
                        'description' => $project['descrtion'] ?? null,
                        'url' => $project['url'] ?? null,
                        'is_published' => true,
                    ]
                );
            }
        }
    }
}
