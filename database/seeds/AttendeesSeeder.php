<?php

use Illuminate\Database\Seeder;
use App\Attendees;

class AttendeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Attendees::class, 10)->create();
    }
}
