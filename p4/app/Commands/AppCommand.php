<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function migrate()
    {
        $this->app->db()->createTable('attempts', [
            'timestamp' => 'DATE',
            'player1' => 'INT',
            'player2' => 'INT',
            'winner' => 'INT',
        ]);
        dump('Migration complete');
    }

    public function seed()
    {
        # Instantiate a new instance of the Faker\Factory class
        $faker = \Faker\Factory::create();

        # Use a loop to create 10 attempts
        for ($i = 0; $i < 10; $i++) {

            # Set up an attempt
            $attempt = [
                'timestamp' => $faker->date($format = 'Y-m-d', $max = 'now'), // '1979-06-09',
                //'timestamp' => $faker->dateTime($max = 'now'), // DateTime('2008-04-25 08:37:17', 'UTC')
                'player1' => rand(0, 2), # Alternate between 0 and 2
                'player2' => rand(0, 2), # Alternate between 0 and 2
                'winner' => rand(0, 2), # Alternate between 0 and 2
            ];

            # Insert the review
            $this->app->db()->insert('attempts', $attempt);
        }
        dump('Seeds complete');
    }
    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
}
