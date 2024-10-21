<?php

namespace App\core\series\use_case\find;

use App\core\series\resource\interface\int_resource_series;
use App\core\series\use_case\list\dto\dto_list_series_out;

class cls_use_case_find_serie
{
    public function __construct(private int_resource_series $resource_series){}

    private function de_entidade_para_dto($entity): dto_list_series_out{

        return new dto_list_series_out(
                $entity->id(),
                $entity->season(),
                $entity->episode(),
                $entity->title(),
                $entity->genre(),
                $entity->year(),
                $entity->rating()
            );
    }

    public function execute($id_series){

        return $this->de_entidade_para_dto(
            $this->resource_series->find($id_series)
        );
    }
}
