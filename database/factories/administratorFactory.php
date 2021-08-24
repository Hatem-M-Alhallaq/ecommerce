<?php

namespace Database\Factories;

use App\Models\administrator;
use Illuminate\Database\Eloquent\Factories\Factory;

class administratorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = administrator::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'full_name' => $this->faker->word,
            'email' => $this->faker->email,
            'mobile' => $this->faker->word,
            'address' => $this->faker->word,
            'permission_id' => $this->faker->integer,
        ];
    }
}
