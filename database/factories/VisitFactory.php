<?php

namespace Database\Factories;

use App\Models\Delivery;
use App\Models\Demo;
use App\Models\Maintenance;
use App\Models\Meeting;
use App\Models\Sale;
use App\Models\Visit;
use App\Models\Mapping;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class VisitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Visit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //get existing mapping and user ids
        $mapping_ids = Mapping::pluck('id');
        $user_ids = User::pluck('id');

        //let visit purpose come from ["Maintenance", "Delivery", "Appointment", "Sale", "Demo"]
        $visit_purpose = ["Maintenance", "Delivery", "Appointment", "Sale", "Demo"];
        return [
            'business_id' => $this->faker->randomElement($mapping_ids),
            'visit_purpose' => $this->faker->randomElement($visit_purpose),
            'visit_notes' => $this->faker->paragraph,
            'user_id' => $this->faker->randomElement($user_ids),
        ];

    }

            /*create a Maintenanace, Delivery, Sale, Demo, or Appointment record
        * depending on the visit_purpose
        */

        public function configure()
        {
            return $this->afterCreating(function (Visit $visit) {
                $visit_purpose = $visit->visit_purpose;
                $user_id = $visit->user_id;
                if ($visit_purpose == "Maintenance") {
                    Maintenance::factory()->create(['visit_id' => $visit->id, 'user_id' => $user_id]);
                } elseif ($visit_purpose == "Delivery") {
                    Delivery::factory()->create(['visit_id' => $visit->id, 'user_id' => $user_id]);
                } elseif ($visit_purpose == "Sale") {
                    Sale::factory()->create(['visit_id' => $visit->id, 'user_id' => $user_id]);
                } elseif ($visit_purpose == "Demo") {
                    Demo::factory()->create(['visit_id' => $visit->id, 'user_id' => $user_id]);
                } elseif ($visit_purpose == "Appointment") {
                    Meeting::factory()->create(['visit_id' => $visit->id, 'user_id' => $user_id]);
                }
            });
        }
}
