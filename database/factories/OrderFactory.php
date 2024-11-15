<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id'=>Client::factory(),
            'book_id'=>Book::factory(),
            'delivery_address'=>$this->faker->address,
            'status'=>$this->faker->randomElement(['ordered', 'sent', 'paid']),
            'order_date'=>$this->faker->date(),
        ];
    }
}
