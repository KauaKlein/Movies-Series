<?php

namespace App\core\infra\laravel\resources;

use App\core\base\interface\int_entidade;
use App\core\series\entity\cls_series;
use App\core\series\resource\interface\int_resource_series;
use App\Models\Series;

class cls_resource_series implements int_resource_series{
    public function __construct(private Series $model){
    }

    public function modelo_para_entidades($rowsData){
        $out=[];

        foreach($rowsData as $row){
            array_push($out, new cls_series(
                $row->id_series,
                $row->season,
                $row->episode,
                $row->title,
                $row->genre,
                $row->year,
                $row->rating
            ));
        }
        return $out;
    }

    public function modelo_para_entidade($rowData){
        return new cls_series(
            id_series:$rowData->id_series,
            season:$rowData->season,
            episode:$rowData->episode,
            title:$rowData->title,
            genre:$rowData->genre,
            year:$rowData->year,
            rating:$rowData->rating
        );
    }

    public function list(array $filter=[]):array{
        $rowsData = $this->model->orderBy('id_series')->get();
        return $this->modelo_para_entidades($rowsData);
    }

    public function find($id_series): ?int_entidade {
        $rowData = $this->model->find($id_series);

        return $this->modelo_para_entidade($rowData);
    }

    public function create(int_entidade $entidade): ?int_entidade {
        $newSerie = $this->model->create([
            'season' => $entidade->season(),
            'episode' => $entidade->episode(),
            'title' => $entidade->title(),
            'genre' => $entidade->genre(),
            'year' => $entidade->year(),
            'rating' => $entidade->rating()
        ]);
        return $this->modelo_para_entidade($newSerie);
    }

    public function edit(int_entidade $entidade): ?int_entidade {
        $this->model->find($entidade->id())->update([
            'season' => $entidade->season(),
            'episode' => $entidade->episode(),
            'title' => $entidade->title(),
            'genre' => $entidade->genre(),
            'year' => $entidade->year(),
            'rating' => $entidade->rating()
        ]);
        return $entidade;
    }

    public function remove($id): bool {
        return $this->model->destroy($id);
    }
}
