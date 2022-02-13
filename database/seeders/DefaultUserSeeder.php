<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Nur Ikhwan Idris', 'email' => 'nurikhwanidris.trsb@gmail.com', 'email_verified_at' => now(),    'password' => bcrypt('password'), 'role' => 1, 'remember_token' => Str::random(10)]);
    }
}
