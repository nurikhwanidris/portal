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
        Status::factory(3)->create();
    }
}
