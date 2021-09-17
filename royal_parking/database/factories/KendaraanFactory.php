<?php

namespace Database\Factories;

use App\Models\kendaraan;
use Illuminate\Database\Eloquent\Factories\Factory;

class KendaraanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = kendaraan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'parkiran_id' => '1',
            'slug' => 'test',
            'jenis_kendaraan' => 'motor/mobil',
            '2' => 'motor/mobil',

            //
        ];
    }
}
