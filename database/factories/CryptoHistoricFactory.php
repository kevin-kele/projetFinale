<?php

namespace Database\Factories;

use App\Models\CryptoHistoric;
use Illuminate\Database\Eloquent\Factories\Factory;

class CryptoHistoricFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CryptoHistoric::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $unixTimestamp = '1461067200';
        $nbMaxDecimals = NULL;
        $min = 0;
        $max = NULL;

        return [
            'price' => $this->faker->randomFloat($nbMaxDecimals, $min, $max),
            'date' => $this->faker->date('Y-m-d', $unixTimestamp)
        ];
    }
}
