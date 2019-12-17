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
            'timestamp' => 'DATETIME',
            'player1' => 'varchar(255)',
            'player2' => 'varchar(255)',
            'winner' => 'varchar(255)',
            'name' => 'varchar(255)',
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
                'timestamp' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
                'player1' => $faker->word,
                'player2' => $faker->word,
                'winner' => $faker->word,
                'name' => $faker->firstName,
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
