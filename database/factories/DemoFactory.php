<?php

namespace Database\Factories;

use App\Models\Demo;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Database\Eloquent\Factories\Factory;

class DemoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Demo::class;

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
            'demo_date' => $this->faker->date(),
            'demo_notes' => $this->faker->paragraph,
            'user_id' => $this->faker->randomElement($user_ids),
            'visit_id' => $this->faker->randomElement($visit_ids),
        ];
    }
}
