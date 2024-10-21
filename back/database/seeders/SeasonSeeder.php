<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Seeder;


class SeasonSeeder extends Seeder
{


    public function run(): void
    {

        $season = [
            [ 'id_season' => 1, 'id_series' => 1, 'description' => 'A jornada começa com mistérios revelados.',             'season_title' => 'O Início' ],
            [ 'id_season' => 2, 'id_series' => 1, 'description' => 'Novos desafios e aliados inesperados surgem.',          'season_title' => 'Reviravoltas' ],
            [ 'id_season' => 3, 'id_series' => 1, 'description' => 'O perigo aumenta e os protagonistas são testados.',     'season_title' => 'Em Meio ao Caos' ],
            [ 'id_season' => 4, 'id_series' => 1, 'description' => 'Sacrifícios são feitos para salvar o futuro.',          'season_title' => 'Sacrifícios' ],
            [ 'id_season' => 5, 'id_series' => 1, 'description' => 'A conclusão épica amarra todas as pontas soltas.',      'season_title' => 'O Final' ],

            [ 'id_season' => 1, 'id_series' => 2, 'description' => 'Um novo universo se abre com oportunidades e ameaças.', 'season_title' => 'Um Novo Mundo' ],
            [ 'id_season' => 2, 'id_series' => 2, 'description' => 'Conflitos internos começam a corroer alianças.',        'season_title' => 'Crise Interna' ],
            [ 'id_season' => 3, 'id_series' => 2, 'description' => 'O desfecho traz consequências inesperadas.',            'season_title' => 'O Preço da Vitória' ],

            [ 'id_season' => 1, 'id_series' => 3, 'description' => 'Explorando os mistérios antigos.',                      'season_title' => 'Os Primeiros Segredos' ],
            [ 'id_season' => 2, 'id_series' => 3, 'description' => 'As tensões aumentam entre os personagens.',             'season_title' => 'Conflitos Emergem' ],
            [ 'id_season' => 3, 'id_series' => 3, 'description' => 'Uma traição muda tudo.',                                'season_title' => 'O Golpe Traiçoeiro' ],
            [ 'id_season' => 4, 'id_series' => 3, 'description' => 'Lutas épicas determinam o futuro.',                     'season_title' => 'Batalhas Finais' ],
            [ 'id_season' => 5, 'id_series' => 3, 'description' => 'Novas alianças para evitar o fim.',                     'season_title' => 'Renascer da Esperança' ],
            [ 'id_season' => 6, 'id_series' => 3, 'description' => 'O ciclo se encerra com um novo começo.',                'season_title' => 'Recomeço' ],

            [ 'id_season' => 1, 'id_series' => 4, 'description' => 'A origem de uma lenda é revelada.',                     'season_title' => 'A Lenda Nasce' ],

            [ 'id_season' => 1, 'id_series' => 5, 'description' => 'Uma nova missão começa com mistérios intrigantes.',     'season_title' => 'Chamado à Aventura' ],
            [ 'id_season' => 2, 'id_series' => 5, 'description' => 'Um confronto épico se aproxima.',                       'season_title' => 'A Caminho da Guerra' ],

        ];
        Season::insert($season);
    }
}
