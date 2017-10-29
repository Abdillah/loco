<?php

use Illuminate\Database\Seeder;

class EatspotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Eatspot::class, 50)->create()->each(function($es) {
            // For each Eatspot we create some Foodstuff
            $foodstuffs = factory(App\Models\Foodstuff::class, rand(4, 10))->make();
            foreach ($foodstuffs as $key => $foodstuff) {
                $es->foodstuffs()->save($foodstuff);
            }
        });
    }
}
