<?php

namespace Database\Seeders;

use App\Models\Series;
use Illuminate\Database\Seeder;


class SeriesSeeder extends Seeder
{


    public function run(): void
    {

        $series = [
            ['id_series'=> 1, 'title' =>'Game of Thorens',              'season' => '1', 'episode' => '1',  'genre' => 'Drama',     'year' => '2011-2019', 'rating' => '9.3'],

            ['id_series'=> 2, 'title' =>'Breaking Bad',                 'season' => '2', 'episode' => '1',  'genre' => 'Crime',     'year' => '2008-2013', 'rating' => '9.2'],

            ['id_series'=> 3, 'title' =>'Arrow',                        'season' => '3', 'episode' => '1',  'genre' => 'Suspense',  'year' => '2004-2010', 'rating' => '9.0'],

            ['id_series'=> 4, 'title' =>'How to get away with murder',  'season' => '4', 'episode' => '1',  'genre' => 'Fiction',   'year' => '2007-2015', 'rating' => '9.0'],

            ['id_series'=> 5, 'title' =>'House of dragons',             'season' => '5', 'episode' => '1',  'genre' => 'Drama',     'year' => '2018-2023', 'rating' => '8.9'],

        ];
        Series::insert($series); // model de series estou inserindo informações

    }

}
