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
                    'name' => 'Nasi Telor',
                    'rating' => 'Mediocre',
                    'description' => 'Nasi + sayur + telor dadar/ceplok',
                    'price' => 7000,
                ],
                [
                    'name' => 'Nasi Telor Orak-Arik',
                    'rating' => 'Good',
                    'description' => 'Nasi + sayur + telor orak-arik'
                    'price' => 8000,
                ],
                [
                    'name' => 'Magelangan',
                    'rating' => 'Most Recommended',
                    'description' => 'Nasi goreng dengan Mi + telor orak-arik'
                    'price' => 9000,
                ],
                [
                    'name' => 'Mi Dok-dok',
                    'rating' => 'Recommended',
                    'description' => 'Indomie masak nyemek + sayur + telor'
                    'price' => 9000,
                ],
                [
                    'name' => 'Nasi Ayam',
                    'rating' => 'Mediocre',
                    'description' => 'Nasi + sayur + ayam goreng/opor/balado'
                    'price' => 9000,
                ],
                [
                    'name' => 'Nasi Terong',
                    'rating' => 'Mediocre',
                    'description' => 'Nasi + sayur + terong balado'
                    'price' => 6000,
                ],
            ],
            'Burjo Malatax' => [
                [
                    'name' => 'Nasi Telor',
                    'rating' => 'Mediocre',
                    'description' => 'Nasi + sayur + telor dadar/ceplok',
                    'price' => 6000,
                ],
                [
                    'name' => 'Nasi Telor Orak-Arik + Gorengan',
                    'rating' => 'Most Recommended',
                    'description' => 'Nasi + sayur + gorengan orak-arik'
                    'price' => 6000 + '@500',
                ],
                [
                    'name' => 'Magelangan',
                    'rating' => 'Good',
                    'description' => 'Nasi goreng dengan Mi + telor orak-arik'
                    'price' => 8000,
                ],
                [
                    'name' => 'Mi Dok-dok',
                    'rating' => 'Mediocre',
                    'description' => 'Indomie masak nyemek + sayur + telor'
                    'price' => 8000,
                ],
                [
                    'name' => 'Nasi Ayam',
                    'rating' => 'Mediocre',
                    'description' => 'Nasi + Sayur + Ayam goreng'
                    'price' => 9000,
                ],
                [
                    'name' => 'Nasi Ayam Geprek',
                    'rating' => 'Good',
                    'description' => 'Nasi + Sayur + Ayam geprek'
                    'price' => 9000,
                ],
            ],
            'Angkringan Koboy' => [
                [
                    'name' => 'Nasi Telor Bakar',
                    'rating' => 'Most Recommended',
                    'description' => 'Nasi + sayur + telor dadar bakar',
                    'price' => 6000,
                ],
                [
                    'name' => 'Nasi Ayam Bakar',
                    'rating' => 'Very Recommended',
                    'description' => 'Nasi + sayur + ayam bakar',
                    'price' => 8000,
                ],
            ],
            'Angkringan Pak Panut' => [
                [
                    'name' => 'Nasi Kucing Kering Tempe',
                    'rating' => 'Good',
                    'description' => 'Nasi + kering tempe',
                    'price' => 1000,
                ],
                [
                    'name' => 'Nasi Kucing Sambal Teri',
                    'rating' => 'Good',
                    'description' => 'Nasi + sambal teri',
                    'price' => 1000,
                ],
            ],
            'Warung Makan Mas Pri' => [
                [
                    'name' => 'Nasi Ayam Tepung Bakar',
                    'rating' => 'Most Recommended',
                    'description' => 'Nasi + ayam tepung bakar',
                    'price' => 9000,
                ],
                [
                    'name' => 'Nasi Lele Tepung Bakar',
                    'rating' => 'Good',
                    'description' => 'Nasi + lele tepung bakar',
                    'price' => 8000,
                ],
                [
                    'name' => 'Nasi Tempe Tahu Bakar',
                    'rating' => 'Good',
                    'description' => 'Nasi + tempe dan tahu bakar',
                    'price' => 5000,
                ],
                [
                    'name' => 'Nasi Rempelo Ati',
                    'rating' => 'Mediocre',
                    'description' => 'Nasi + rempelo ati goreng/bakar',
                    'price' => 7000,
                ],
                [
                    'name' => 'Terong Goreng/bakar',
                    'rating' => 'Mediocre',
                    'description' => 'Terong goreng/bakar',
                    'price' => 2000,
                ],
                [
                    'name' => 'Terong Goreng Crispy',
                    'rating' => 'Mediocre',
                    'description' => 'Terong goreng crispy',
                    'price' => 2000,
                ],
            ],
            'Crisbar Mbak Tini' => [
                [
                    'name' => 'Nasi Ayam Tepung Bakar',
                    'rating' => 'Most Recommended',
                    'description' => 'Nasi + ayam tepung bakar',
                    'price' => 8000,
                ],
                [
                    'name' => 'Nasi Lele Tepung Bakar',
                    'rating' => 'Good',
                    'description' => 'Nasi + lele tepung bakar',
                    'price' => 7000,
                ],
                [
                    'name' => 'Nasi Tempe Tahu Bakar',
                    'rating' => 'Good',
                    'description' => 'Nasi + tempe dan tahu bakar',
                    'price' => 4000,
                ],
                [
                    'name' => 'Nasi Telor Bakar',
                    'rating' => 'Good',
                    'description' => 'Nasi + telor dadar bakar',
                    'price' => 6000,
                ],
                [
                    'name' => 'Terong Goreng/bakar',
                    'rating' => 'Mediocre',
                    'description' => 'Terong goreng/bakar',
                    'price' => 2000,
                ],
            ],
            'Soto Pak Nanto' => [
                [
                    'name' => 'Soto Ayam',
                    'rating' => 'Most Recommended',
                    'description' => 'Soto ayam segar',
                    'price' => 7000,
                ],
                [
                    'name' => 'Soto Sapi',
                    'rating' => 'Very Recommended',
                    'description' => 'Soto sapi segar',
                    'price' => 9000,
                ],
                [
                    'name' => 'Soto babat',
                    'rating' => 'Recommended',
                    'description' => 'Soto babat segar',
                    'price' => 9000,
                ],
            ],
            'Warung Biru Kinanti' => [
                [
                    'name' => 'Nasi Rames Ayam',
                    'rating' => 'Very Recommended',
                    'description' => 'Nasi rames + telor dadar/ceplok + sambal',
                    'price' => 6500,
                ],
                [
                    'name' => 'Nasi Rames Telor',
                    'rating' => 'Very Recommended',
                    'description' => 'Nasi rames + ayam krispi + sambal',
                    'price' => 9000,
                ],
                [
                    'name' => 'Nasi Goreng Ayam',
                    'rating' => 'Recommended',
                    'description' => 'Nasi goreng + ayam krispi',
                    'price' => 9000,
                ],
                [
                    'name' => 'Nasi Goreng Telor',
                    'rating' => 'Recommended',
                    'description' => 'Nasi goreng + telor dadar/ceplok',
                    'price' => 6500,
                ],
                [
                    'name' => 'Soto Sapi',
                    'rating' => 'Most Recommended',
                    'description' => 'Soto sapi segar',
                    'price' => 6500,
                ],
                [
                    'name' => 'Gado-gado',
                    'rating' => 'Recommended',
                    'description' => 'Gado-gado betawi',
                    'price' => 8000,
                ],
            ],
            'Waroeng Toetoeng' => [
                [
                    'name' => 'Nasi Ayam Goreng Toetoeng',
                    'rating' => 'Most Recommended',
                    'description' => 'Nasi + ayam goeng khas Toetoeng',
                    'price' => 9000,
                ],
                [
                    'name' => 'Nasi Udang Mercon',
                    'rating' => 'Recommended',
                    'description' => 'Nasi + udang mercon',
                    'price' => 14000,
                ],
                [
                    'name' => 'Nasi Telor Kecapcoy',
                    'rating' => 'Good',
                    'description' => 'Nasi + telor kecapcoy',
                    'price' => 7000,
                ],
                [
                    'name' => 'Nasi Gurame Kecapcoy',
                    'rating' => 'Recommended',
                    'description' => 'Nasi + gurame kecapcoy',
                    'price' => 12000,
                ],
                [
                    'name' => 'Nasi Iga Kecapcoy',
                    'rating' => 'Recommended',
                    'description' => 'nasi + iga kecapcoy',
                    'price' => 16000,
                ],
            ],
            'Preksu' => [
                [
                    'name' => 'Nasi Ayam Geprek',
                    'rating' => 'Most Recommended',
                    'description' => 'Nasi + ayam crispy geprek',
                    'price' => 10000,
                ],
                [
                    'name' => 'Nasi Cumi Geprek',
                    'rating' => 'Recommended',
                    'description' => 'Nasi + cumi crispy geprek',
                    'price' => 11500,
                ],
                [
                    'name' => 'Nasi Terong Geprek',
                    'rating' => 'Very Recommended',
                    'description' => 'Nasi + terong crispy geprek',
                    'price' => 5000,
                ],
                [
                    'name' => 'Nasi Jamur Geprek',
                    'rating' => 'Recommended',
                    'description' => 'Nasi + jamur crispy geprek',
                    'price' => 7000,
                ],
                [
                    'name' => 'Nasi Terong Jamur Geprek',
                    'rating' => 'Very Recommended',
                    'description' => 'Nasi + terong dan jamur crispy geprek',
                    'price' => 8500,
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
