<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Author::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nickname' => $this->faker->word,
        'name' => $this->faker->word,
        'country' => $this->faker->word,
        'year_born' => $this->faker->word,
        'year_died' => $this->faker->word,
        'biography' => $this->faker->text,
        'publications' => $this->faker->text,
        'awards' => $this->faker->text,
        'reference' => $this->faker->text,
        'state' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
