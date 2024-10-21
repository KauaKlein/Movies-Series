<?php

namespace App\core\season\use_case\find;

use App\core\season\entity\cls_season;
use App\core\season\resource\interface\int_resource_season;
use App\core\season\use_case\list\dto\dto_list_season_out;

class cls_use_case_find_season
{
    public function __construct(private int_resource_season $resource_season)
    {
    }

    private function de_entidade_para_dto(cls_season $entity): dto_list_season_out
    {
        
        $dto_season = new dto_list_season_out(
                $entity->id(),
                $entity->id_series(),
                $entity->season_title(),
                $entity->description()
            );
            return $dto_season;
    }

    public function execute($id_series, $id_season)
    {

       $entity = $this->resource_season->find($id_series,$id_season);
        return $this->de_entidade_para_dto($entity);
    }
}
