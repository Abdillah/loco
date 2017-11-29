<?php

use Illuminate\Database\Seeder;

class FoodstuffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            'Burjo Mekar Mulya' => [
                [
                    'name' => '',
                    'description' => '',
                    'price' => 0,
                ],
            ],
            'Burjo Malatax' => [
                [
                    'name' => '',
                    'description' => '',
                    'price' => 0,
                ],
            ],
            'Angkringan Koboy' => [
                [
                    'name' => '',
                    'description' => '',
                    'price' => 0,
                ],
            ],
            'Angkringan Pak Panut' => [
                [
                    'name' => '',
                    'description' => '',
                    'price' => 0,
                ],
            ],
            'Warung Makan Mas Pri' => [
                [
                    'name' => '',
                    'description' => '',
                    'price' => 0,
                ],
            ],
            'Crisbar Mbak Tini' => [
                [
                    'name' => '',
                    'description' => '',
                    'price' => 0,
                ],
            ],
            'Soto Pak Nanto' => [
                [
                    'name' => '',
                    'description' => '',
                    'price' => 0,
                ],
            ],
            'Warung Biru Kinanti' => [
                [
                    'name' => '',
                    'description' => '',
                    'price' => 0,
                ],
            ],
            'Waroeng Toetoeng' => [
                [
                    'name' => '',
                    'description' => '',
                    'price' => 0,
                ],
            ],
            'Preksu' => [
                [
                    'name' => '',
                    'description' => '',
                    'price' => 0,
                ],
            ],
        ];

        foreach ($menus as $eatspotName => $foodstuffs) {
            $eatspotModel = App\Models\Eatspot::where('name', $eatspotName)->first();

            foreach ($foodstuffs as $i => $foodstuff) {
                $foodstuffModel = new App\Models\Foodstuff(array_merge($foodstuff, [
                    'eatspot_id' => $eatspotModel->id
                ]));
                $foodstuffModel->save();
            }
        }
    }
}
