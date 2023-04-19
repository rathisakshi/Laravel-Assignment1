<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Task extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('tasks')->insert([
            'Title' => 'sakshi',
            'Description' => 'sakshi.rathi@sigmainfo.net'

        ]);
    }
}
