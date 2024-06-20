<?php

namespace Database\Factories;

use App\Models\Maintenance;
use App\Models\MaintenanceProduct;
use App\Models\Product;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaintenanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Maintenance::class;

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
            'date_of_maintenance' => $this->faker->date,
            'comment' => $this->faker->paragraph,
            'user_id' => $this->faker->randomElement($user_ids),
            'visit_id' => $this->faker->randomElement($visit_ids),
        ];
    }

    //crreate a maintenance product
    public function configure()
    {
        return $this->afterCreating(function (Maintenance $maintenance) {
            $maintenance_id = $maintenance->id;
            $product_ids = Product::pluck('id');
            MaintenanceProduct::create([
                'maintenance_id' => $maintenance_id,
                'product_id' => $this->faker->randomElement($product_ids),
                'quantity' => $this->faker->numberBetween(1, 10),
            ]);
        });
    }
}
