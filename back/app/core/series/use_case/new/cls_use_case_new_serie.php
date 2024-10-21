<?php

namespace App\core\series\use_case\new;

use App\core\series\entity\cls_series;
use App\core\series\resource\interface\int_resource_series;
use App\core\series\use_case\new\dto\dto_new_serie_in;
use App\core\series\use_case\new\dto\dto_new_serie_out;

class cls_use_case_new_serie
{
    public function __construct(private int_resource_series $resource_series)
    {
    }

    public function de_dto_para_entidade(dto_new_serie_in $dtoin): cls_series
    {
        return new cls_series(
            id: 0,
            season: $dtoin->season,
            episode: $dtoin->episode,
            title: $dtoin->title,
            genre:$dtoin->genre,
            year: $dtoin->year,
            rating: $dtoin->rating
        );
    }

    private function de_entidade_para_dto($entity): dto_new_serie_out
    {
        return new dto_new_serie_out(
                $entity->id(),
                $entity->season(),
                $entity->episode(),
                $entity->title(),
                $entity->genre(),
                $entity->year(),
                $entity->rating()
            );
    }

    public function execute(dto_new_serie_in $dtoin): dto_new_serie_out
    {
        $entity = $this->resource_series->create(
            $this->de_dto_para_entidade($dtoin)
        );
        return $this->de_entidade_para_dto($entity);
    }
}
