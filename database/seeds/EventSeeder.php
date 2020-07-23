<?php

use Illuminate\Database\Seeder;
use App\Model\Event;
class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Event::class, 10)->create()->each(function ($event) {
            factory(Event::class)->make();
        });
    }
}
