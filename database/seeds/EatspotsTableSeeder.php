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
        // factory(App\Models\Eatspot::class, 50)->create()->each(function($es) {
        //     // For each Eatspot we create some Foodstuff
        //     $foodstuffs = factory(App\Models\Foodstuff::class, rand(4, 10))->make();
        //     foreach ($foodstuffs as $key => $foodstuff) {
        //         $es->foodstuffs()->save($foodstuff);
        //     }
        // });

        $eatspots = [
            [
                'name' => 'Burjo Mekar Mulya',
                'description' => 'Burjo enak, harga mahasiswa. Depan Kost Putri Griya Ainunnisa. Jalan Pogung Kidul, Sinduadi, Mlati, Sleman Regency, Special Region of Yogyakarta 55281',
                'latitude'  => -7.761654,
                'longitude' => 110.375351,
                'rating' => 4.3,
                'taggable_type' => 'Burjo, magelangan, orak-arik, warmindo',
            ],
            [
                'name' =>'Burjo Malatax',
                'description' =>'Burjo murah, enak, orak-arik custom. Jl. Pandega Marta No.72b, Caturtunggal, Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55284',
                'latitude'  => -7.756031,
                'longitude' => 110.377401,
                'rating' => 4.5,
                'taggable_type' =>'Burjo, magelangan, orak-arik, warmindo',
            ],
            [
                'name' =>'Angkringan Koboy',
                'description' =>'Angkringan mantap, murah, porsi banyak. Jl. Kaliurang KM.5 No.16, 55281, Caturtunggal, Depok Sub-District, Sleman Regency, Special Region of Yogyakarta 55284',
                'latitude'  => -7.761212,
                'longitude' => 110.380519,
                'rating' => 4.7,
                'taggable_type' =>'Angkringan',
            ],
            [
                'name' =>'Angkringan Pak Panut',
                'description' =>'Angkringan murah, aneka sate. Pasar Klebengan. Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281',
                'latitude'  => -7.767198,
                'longitude' => 110.386273,
                'rating' => 4.3,
                'taggable_type' =>'Angkringan',
            ],
            [
                'name' =>'Warung Makan Mas Pri',
                'description' =>'Ayam Tepung Bakar, murah, enak, sambal sepuasnya. Jl. Selokan Mataram, Sinduadi, Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55284',
                'latitude'  => -7.761423,
                'longitude' =>  110.372874,
                'rating' => 4.1,
                'taggable_type' =>'Ayam Tepung Bakar, Crisbar',
            ],
            [
                'name' =>'Crisbar Mbak Tini',
                'description' =>'Crispy Bakar murah, enak, kenyang. Jalan Selokan Mataram,Pogung, Sinduadi, Mlati, Sinduadi, Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55284',
                'latitude'  => -7.761699,
                'longitude' => 110.372853,
                'rating' => 3.8,
                'taggable_type' =>'Ayam Tepung Bakar, Crisbar',
            ],
            [
                'name' =>'Soto Pak Nanto',
                'description' =>'Soto seger, daging, ayam, babat. Aneka sate. Jl. Selokan Mataram, Sinduadi, Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55284',
                'latitude'  => -7.761298,
                'longitude' => 110.372799,
                'rating' => 4.1,
                'taggable_type' =>'Soto, Soto Ayam, Soto Sapi, Soto Babat',
            ],
            [
                'name' =>'Warung Biru Kinanti',
                'description' =>'Warung makan murah, porsi besar, aneka macam gorengan. Belakang Asrama kinanthi. Gg. Kinanti No.7, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281',
                'latitude'  => -7.763124,
                'longitude' => 110.378127,
                'rating' => 4.5,
                'taggable_type' =>'Warung, Soto, Nasi Goreng, Gado-gado, Nasi Rames',
            ],
            [
                'name' =>'Waroeng Toetoeng',
                'description' =>'Warung makan harga mahasiswa, banyak pilihan. Jalan Kaliurang, Pogung Baru E30A, Sinduadi, Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281',
                'latitude'  => -7.759015,
                'longitude' => 110.376440,
                'rating' => 4.2,
                'taggable_type' =>'Warung',
            ],
            [
                'name' =>'Preksu',
                'description' =>'Warung makan geprek dan susu. Jalan Pandega Marta No. 181, Sinduadi, Mlati, Sinduadi, Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281',
                'latitude'  => -7.756466,
                'longitude' => 110.373953,
                'rating' => 4.1,
                'taggable_type' =>'Geprek',
            ],
        ];

        foreach ($eatspots as $i => $eatspot) {
            $eatspotModel = new App\Models\Eatspot($eatspot);
            $eatspotModel->save();
        }
    }
}
