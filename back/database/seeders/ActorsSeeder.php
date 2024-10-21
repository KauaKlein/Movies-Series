<?php

namespace Database\Seeders;

use App\Models\Actors;
use Illuminate\Database\Seeder;


class ActorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {

        $actors = [

            ['name' => 'Leonardo DiCaprio', 'birth' => 1974, 'country' => 'USA'],
            ['name' => 'Emma Watson',       'birth' => 1990, 'country' => 'UK'],
            ['name' => 'Denzel Washington', 'birth' => 1954, 'country' => 'USA'],
            ['name' => 'Penélope Cruz',     'birth' => 1974, 'country' => 'Spain'],
            ['name' => 'Tom Hanks',         'birth' => 1956, 'country' => 'USA'],
            ['name' => 'Natalie Portman',   'birth' => 1981, 'country' => 'Israel'],
            ['name' => 'Ryan Reynolds',     'birth' => 1976, 'country' => 'Canada'],
            ['name' => 'Cate Blanchett',    'birth' => 1969, 'country' => 'Australia'],
            ['name' => 'Keanu Reeves',      'birth' => 1964, 'country' => 'Canada'],
            ['name' => 'Salma Hayek',       'birth' => 1966, 'country' => 'Mexico'],

        ];
        Actors::insert($actors);
    }
}

