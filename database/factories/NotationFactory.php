<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notation>
 */
class NotationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $numClients = Client::all()->count();
        
        return [
            'content' => $this->faker->paragraph,
            'client_id' => $this->faker->numberBetween(1, $numClients),
        ];
    }
}
