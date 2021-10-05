<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'email' => $this->faker->word,
        'citizen_card' => $this->faker->word,
        'phone' => $this->faker->word,
        'address' => $this->faker->word,
        'zip_code' => $this->faker->word,
        'location' => $this->faker->word,
        'state_login' => $this->faker->word,
        'type_menber_id' => $this->faker->randomDigitNotNull,
        'menber_group_id' => $this->faker->randomDigitNotNull,
        'state' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
