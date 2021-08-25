<?php

namespace Database\Factories\Model;

use App\Models\Model\Product;
use App\Models\Model\Reviews;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reviews::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => function () {
                return Product::all()->random();
            },

            'customer' => $this->faker->name(),
            'review' => $this->faker->paragraph(),
            'star' => $this->faker->numberBetween(0, 5)
        ];
    }
}
