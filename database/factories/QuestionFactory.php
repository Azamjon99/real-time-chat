<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title=$this->sentence;
        $slug=Str::slug($title);
                return [
                    'title'=>$title,
                    'slug'=> $slug,
                    'body'=>$title,
                    'category_id'=>Category::factory(),
                    'user_id'=>User::factory(),
                    'title'=>$title,
                ];
    }
}
