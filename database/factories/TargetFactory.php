<?php

namespace Database\Factories;

use App\Models\Target;
use App\Models\User;
use App\Models\TargetMetric;
use Illuminate\Database\Eloquent\Factories\Factory;

class TargetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Target::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //get existing user and target metric ids
        $user_ids = User::pluck('id');
        $target_metric_ids = TargetMetric::pluck('id');
        return [
            'user_id' => $this->faker->randomElement($user_ids),
            'target_metrics_id' => $this->faker->randomElement($target_metric_ids),
        ];
    }
}
