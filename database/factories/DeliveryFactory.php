<?php

namespace Database\Factories;

use App\Models\Delivery;
use App\Models\DeliveryProduct;
use App\Models\Product;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Delivery::class;

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

    //create a delivery product
    public function configure()
    {
        return $this->afterCreating(function (Delivery $delivery) {
            $delivery_id = $delivery->id;
            $product_ids = Product::pluck('id');

            $delivery_product = DeliveryProduct::create([
                'delivery_id' => $delivery_id,
                'product_id' => $this->faker->randomElement($product_ids),
                'quantity' => $this->faker->numberBetween(1, 10),
            ]);
        });
    }
}
