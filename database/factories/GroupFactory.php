<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Group;
use Faker\Generator as Faker;
use App\Helpers\ArrayHelper;
use App\Models\Course;
use App\Models\Faculty;

$factory->define(Group::class, function (Faker $faker) {
    $groupNumber = $faker->unique(true)->numberBetween(1, 100);
    $course = ArrayHelper::getRandomValue(Course::getCourses());
    $facultyId = ArrayHelper::getRandomValue(Faculty::getAllFacultiesIds());

    return [
        'group_number' => $groupNumber,
        'course' => $course,
        'faculty_id' => $facultyId
    ];
});
