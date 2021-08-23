<?php

namespace Database\Factories;

use App\Models\WalletHistoric;
use Illuminate\Database\Eloquent\Factories\Factory;

class WalletHistoricFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WalletHistoric::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $maxNbChars = 8;
        $nbMaxDecimals = NULL;
        $min = 0;
        $max = NULL;
        return [
            'type' => $this->faker->text($maxNbChars),
            'montant_unitair' => $this->faker->randomFloat($nbMaxDecimals, $min, $max),
            'quantite' => $this->faker->randomDigit,
            'date' => $this->faker->date('Y-m-d', $max = 'now')
        ];
    }
}
