<?php

use Faker\Generator as Faker;
use App\Models\Question;
use App\User;

$factory->define(App\Models\Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'question_id' => function(){
            return Question::all()->random();
        },
        'user_id' => function(){
            return User::all()->random();
        }
    ];
});
