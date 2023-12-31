<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Hekmatinasser\Verta\Verta;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $persianFaker = \Faker\Factory::create('fa_IR');// create a persian faker
        return [
            'name' => $persianFaker->name(),
            'url' => $this->faker->imageUrl(640, 480, 'animals'),
            'lenght' => 120,
            'slug' =>$this->faker->slug(),
            'updated_at' => now(),
            'created_at' => now(),
            'description' => $persianFaker->realText(),
            'thumbnail' => "https://loremflickr.com/320/240?random=".rand(1, 88)


            //
        ];
    }
}
