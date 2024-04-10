<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $newTrain = new Train();

            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->date = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->bothify('???-##');
            $newTrain->train_carriage = $faker->randomDigit();
            $newTrain->on_schedule = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();

            $newTrain->save();
        }
    }
}
