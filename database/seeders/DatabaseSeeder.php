<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Media;
use App\Models\Page;
use App\Models\Status;
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
        User::factory(5)->create();
        Media::factory(123)->create();
        Page::factory(50)->create();

        // Seed status
        $statuses = [
            ['user_id' => rand(1, 5), 'status' => 'Published', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => rand(1, 5), 'status' => 'Draft', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => rand(1, 5), 'status' => 'Archived', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Create Status
        Status::insert($statuses);

        // Create default user
        $this->call([
            DefaultUserSeeder::class,
        ]);
    }
}
