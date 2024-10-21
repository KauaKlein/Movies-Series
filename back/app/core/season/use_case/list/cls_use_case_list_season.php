<?php

namespace App\core\season\use_case\list;


use App\core\season\resource\interface\int_resource_season;
use App\core\season\use_case\list\dto\dto_list_season_out;

class cls_use_case_list_season
{
    public function __construct(private int_resource_season $resource_season)
    {
    }

    private function de_entidade_para_dto($entities): array
    {
        $out = [];
        foreach ($entities as $entity) {
            array_push($out, new dto_list_season_out(
                $entity->season(),
                $entity->id_season(),
                $entity->id_series(),
                $entity->season_title(),
                $entity->description()

            ));
        }
        return $out;
    }

    public function execute(array $filter = [])
    {
        return $this->de_entidade_para_dto(
            $this->resource_season->list($filter)
        );
    }
}
