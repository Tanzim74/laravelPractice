<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use Carbon\Carbon;
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
     protected $model = Product::class;

     
    public function definition()
    {



      return [
            'name' => $this->faker->name(),
            'category_id' => 3,
            'created_at'=> Carbon::now(),

           
        ];
    }
}
