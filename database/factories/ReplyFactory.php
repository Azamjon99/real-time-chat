<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title=$this->faker->sentence;

        return [
            'body'=>$title,
            'question_id'=>Question::factory(),
            'user_id'=>User::factory(),
        ];
    }
}
