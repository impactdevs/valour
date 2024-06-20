<?php
namespace Database\Factories;

use App\Models\Mapping;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class MappingFactory extends Factory
{
    protected $model = Mapping::class;

    public function definition()
    {
        $user_ids = \App\Models\User::pluck('id');
        return [
            'business_name' => $this->faker->company,
            'business_telephone_contact' => $this->faker->phoneNumber,
            'business_email_contact' => $this->faker->companyEmail,
            'business_location' => $this->faker->city,
            'physical_address' => $this->faker->address,
            'contact_person_name' => $this->faker->name,
            'contact_person_telephone' => $this->faker->phoneNumber,
            'contact_person_email' => $this->faker->email,
            'contact_person_gender' => $this->faker->randomElement(['Male', 'Female', 'Other']),
            'pitch_interest' => $this->faker->sentence,
            'notes' => $this->faker->paragraph,
            'user_id' => $this->faker->randomElement($user_ids),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Mapping $mapping) {
            $product = Product::inRandomOrder()->first();
            $mapping->itemOfInterest()->create([
                'product_id' => $product->id,
                'quantity' => $this->faker->numberBetween(1, 100),
            ]);

            $mapping->productOfInterest()->create([
                'product_id' => $product->id,
            ]);
        });
    }
}
