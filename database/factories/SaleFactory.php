<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Sale;
use App\Models\SaleProduct;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sale::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_ids = User::pluck('id');
        $visit_ids = Visit::pluck('id');
        return [
            'user_id' => $this->faker->randomElement($user_ids),
            'visit_id' => $this->faker->randomElement($visit_ids),
        ];
    }

    //create a sale product related to the sale- SaleProductFactory
    public function configure()
    {
        return $this->afterCreating(function (Sale $sale) {
            $sale_id = $sale->id;
            $product_ids = Product::pluck('id');

            $sale_product = SaleProduct::create([
                'sale_id' => $sale_id,
                'product_id' => $this->faker->randomElement($product_ids),
                'quantity' => $this->faker->numberBetween(1, 10),
            ]);
        });
    }
}
