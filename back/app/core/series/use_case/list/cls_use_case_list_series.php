<?php

namespace App\core\series\use_case\list;


use App\core\series\resource\interface\int_resource_series;
use App\core\series\use_case\list\dto\dto_list_series_out;

class cls_use_case_list_series
{
    public function __construct(private int_resource_series $resource_series)
    {
    }

    private function de_entidade_para_dto($entities): array
    {
        $out = [];
        foreach ($entities as $entity) {
            array_push($out, new dto_list_series_out(
                $entity->season(),
                $entity->episode(),
                $entity->id_series(),
                $entity->title(),
                $entity->genre(),
                $entity->year(),
                $entity->rating()
            ));
        }
        return $out;
    }

    public function execute(array $filter = [])
    {
        return $this->de_entidade_para_dto(
            $this->resource_series->list($filter)
        );
    }
}
