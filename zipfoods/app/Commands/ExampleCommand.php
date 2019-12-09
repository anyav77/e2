<?php

namespace App\Commands;

class ExampleCommand extends Command
{
    /**
     *
     */
    public function run()
    {
        $this->app->db()->createTable('coupons', [
            'code' => 'varchar(255)',
            'discount' => 'decimal(10,2)',
            'expiration' => 'timestamp'
        ]);
        
        dump('It works! You invoked your run command. Migration for coupons table is complete');
    }
}
