<?php

namespace Database\Factories;

use App\Models\crypto;
use Illuminate\Database\Eloquent\Factories\Factory;

class CryptoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = crypto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()

    {
        $nbSentences = 3;
        $variableNbSentences = true;
        return [
            'name' => $this->faker->randomElement(['Bitcoin', 'Ethereum', 'Ripple', 'Bitcoin Cash', 'Cardano', 'Litecoin', 'Nem', 'Stellar', 'Iota', 'Dash']),
            'description' => $this->faker->paragraph($nbSentences, $variableNbSentences)
        ];
    }
}
