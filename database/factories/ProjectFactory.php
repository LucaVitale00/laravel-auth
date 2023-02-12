<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() -> unique() -> words(7, true) ,
            'description' => fake() -> boolean() 
                                        ? fake() -> words(20, true)
                                        : ""  ,
            // 'main_image' => fake() -> unique() -> imageUrl(640, 480, 'animals', true)  ,
            'relase_date' => fake() -> date()  ,
            'repo_link' => fake() -> unique() -> words(10, true)  ,
        ];
    }
}
