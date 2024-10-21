<?php

namespace Database\Seeders;

use App\Models\Episode;
use Illuminate\Database\Seeder;


class EpisodeSeeder extends Seeder
{


    public function run(): void
    {

        $episode = [
            [  'id_episode' =>random_int(1, 100), 'id_season' => 1,  'name' => 'iron ', 'episode' => 'the iron throne',    'description' => 'the final battle for the iron throne unfolds.',              'title_episode'=> 'fin'   ],
            [  'id_episode' =>random_int(1, 100), 'id_season' => 1,  'name' => 'iron 2', 'episode' => 'felina',             'description' => 'walter whites final confrontation with his enemies.',       'title_episode'=> 'fin5'   ],
            [  'id_episode' =>random_int(1, 100), 'id_season' => 2,  'name' => 'iron 3', 'episode' => 'the end',            'description' => 'the survivors face their final moments on the island.',     'title_episode'=> 'fin2'  ],
            [  'id_episode' =>random_int(1, 100), 'id_season' => 3,  'name' => 'iron 4',' episode' => 'person to person',   'description' => 'don draper seeks redemption in the series finale.',         'title_episode'=> 'fin3'  ],
            [  'id_episode' =>random_int(1, 100), 'id_season' => 3,  'name' => 'iron 5', 'episode' => 'all the bells say',  'description' => 'the roy family struggles for control in the season finale.','title_episode'=> 'fin4' ],


        ];
        Episode::insert($episode);
    }
}
