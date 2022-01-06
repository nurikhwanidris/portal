<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> rand(1,5),
            'filename'=> 'something.jpg',
            'path'=> 'https://dummyimage.com/400x400/000/fff',
        ];
    }
}
