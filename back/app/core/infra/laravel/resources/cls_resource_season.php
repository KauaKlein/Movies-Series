<?php

namespace App\core\infra\laravel\resources;

use App\core\base\interface\int_entidade;
use App\core\season\entity\cls_season;
use App\core\season\resource\interface\int_resource_season;
use App\Models\Season;

class cls_resource_season implements int_resource_season{
    public function __construct(private Season $model){
    }

    public function modelo_para_entidades($rowsData){
        $out=[];

        foreach($rowsData as $row){
            array_push($out, new cls_season(
                $row->id_season,
                $row->id_series,
                $row->season_title,
                $row->description

            ));
        }
        return $out;
    }

    public function modelo_para_entidade($rowData){
        // var_dump($rowData[0]->id_series);
        return new cls_season(
            id:$rowData->id_season,
            id_series:$rowData->id_series,
            season_title:$rowData->season_title,
            description:$rowData->description

        );
    }

    public function list(array $filter=[]):array{
        $rowsData = $this->model->orderBy('id_series')->get();
        return $this->modelo_para_entidades($rowsData);
    }

    public function find($id_series ,$id_season) {

        $rowData = $this->model->where([['id_series','=',$id_series], ['id_season' , '=',$id_season]])->first();
       
        return $this->modelo_para_entidade($rowData);
    }

    public function create(int_entidade $entidade): ?int_entidade {
        $newSeason = $this->model->create([
            // 'season' => $entidade->season(),
            'id_season' => $entidade->id_season(),
            'id_series' => $entidade->id_series(),
            'season_title' => $entidade->season_title(),
            'description' => $entidade->description(),
            'timestamps' => $entidade->timestamps()

        ]);
        return $this->modelo_para_entidade($newSeason);
    }

    public function edit(int_entidade $entidade): ?int_entidade {
        $this->model->find($entidade->id())->update([
            // 'season' => $entidade->season(),
            'id_season' => $entidade->id_season(),
            'id_series' => $entidade->id_series(),
            'season_title' => $entidade->season_title(),
            'description' => $entidade->description()

        ]);
        return $entidade;
    }

    public function remove($id): bool {
        return $this->model->destroy($id);
    }

    public function seriesSeason()
    {
        $seriesWithSeason= Episode::with('episode')->get();

        $result = [];

        foreach($seriesWithSeason as $Episode) {
            $result[] = [
                'episode' => [
                    'title' => $episode->title,
                    'content' => $episode->content,
                ],
                'series' => [
                    $episode->series,
                ]
            ];
        }

        return $result;
    }
}


