<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        factory(\App\User::class, 100)->create(); //Invoca a configuração em factory
    }
}
