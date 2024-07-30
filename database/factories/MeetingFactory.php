<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Visit;
use App\Models\Meeting;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meeting>
 */
class MeetingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Meeting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // getting existing user and visit ids
        $user_ids = User::pluck('id');
        $visit_ids = Visit::pluck('id');
        return [
            'meeting_date' => $this->faker->date(),
            'meeting_start_time' => $this->faker->time('H:i'),
            'meeting_end_time' => $this->faker->time('H:i'),
            'meeting_notes' => $this->faker->paragraph,
            'user_id' => $this->faker->randomElement($user_ids),
            'visit_id' => $this->faker->randomElement($visit_ids),
        ];
    }
}
