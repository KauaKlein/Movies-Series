<?php

namespace App\core\episode\use_case\list;


use App\core\series\resource\interface\int_resource_episode;
use App\core\series\use_case\list\dto\dto_list_series_out;

class cls_use_case_list_episode
{
    public function __construct(private int_resource_episode $resource_episode)
    {
    }

    private function de_entidade_para_dto($entities): array
    {
        $out = [];
        foreach ($entities as $entity) {
            array_push($out, new dto_list_series_out(
                $entity->episode(),
                $entity->id(),
                $entity->name(),
                $entity->title_episode(),
                $entity->description()

            ));
        }
        return $out;
    }

    public function execute(array $filter = [])
    {
        return $this->de_entidade_para_dto(
            $this->resource_episode->list($filter)
        );
    }
}
