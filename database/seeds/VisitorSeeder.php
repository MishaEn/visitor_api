<?php

use Illuminate\Database\Seeder;
use App\Model\Visitor;
class VisitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Visitor::class, 500)->create()->each(function ($event) {
            factory(Visitor::class)->make();
        });
    }
}
