<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// IMPORT APP MODEL TRAIN
use App\Models\Train;

// IMPORT FAKER
use Faker\Generator as Faker;

class TrainSeeder extends Seeder


{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {
        // CREATE TRAINS
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train;

            // ADD PARAMETERS
            $newTrain->company=$faker->company();
            $newTrain->departure_station=$faker->address();
            $newTrain->arrival_station=$faker->address();
            $newTrain->departure_time=$faker->date()." ".$faker->time();
            $newTrain->arrival_time=$faker->date()." ".$faker->time();
            $newTrain->train_code=$faker->regexify('[A-Z]{5}[0-9]{3}');
            $newTrain->number_of_carriages=$faker->numberBetween(5, 20);

            // SAVE TRAINS
            $newTrain -> save();          
        }

    }
}
