<?php

namespace Database\Factories;

use App\Models\CatalogItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class CatalogItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CatalogItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item_type_id' => $this->faker->randomDigitNotNull,
        'category_id' => $this->faker->randomDigitNotNull,
        'title' => $this->faker->word,
        'author_id' => $this->faker->randomDigitNotNull,
        'isbn_barcode' => $this->faker->word,
        'call_no' => $this->faker->word,
        'publisher_id' => $this->faker->randomDigitNotNull,
        'edition' => $this->faker->word,
        'year' => $this->faker->word,
        'series_name' => $this->faker->word,
        'tags' => $this->faker->word,
        'volume' => $this->faker->word,
        'subject' => $this->faker->word,
        'abstract' => $this->faker->text,
        'description' => $this->faker->text,
        'state' => $this->faker->word,
        'published' => $this->faker->word,
        'circulation' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
