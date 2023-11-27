<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matela>
 */
class MatelaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElements(['Matelas Confort', 'Matelas Assurance', 'Matelas Essentiel', 'Matelas Prestige']),
            'brand' => fake()->randomElements(['EPEDA', 'DREAMWAY', 'BULTEX', 'DORSOLINE', 'MEMORYLINE']),
            'price' => fake()->numberBetween(500,1000),
            'discount'=> fake()->numberBetween(10,90),
            'height' => fake()->randomElements(['90x190', '140x190', '160x200', '180x200', '200x200']),
            'image' => fake()->imageUrl(),

        ];
    }
}
