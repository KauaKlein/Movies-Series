<?php

namespace App\core\series\use_case\edit;

use App\core\series\entity\cls_series;
use App\core\series\resource\interface\int_resource_series;
use App\core\series\use_case\edit\dto\dto_edit_serie_in;
use App\core\series\use_case\edit\dto\dto_edit_serie_out;

class cls_use_case_edit_serie{

    public function __construct(private int_resource_series $resource_series){}

    public function de_entidade_para_dto(cls_series $entidade): dto_edit_serie_out
    {
        return new dto_edit_serie_out(
            $entidade->season(),
            $entidade->episode(),
            $entidade->id(),
            $entidade->title(),
            $entidade->genre(),
            $entidade->year(),
            $entidade->rating()
        );
    }

    public function de_dto_para_entidade(dto_edit_serie_in $dtoin): cls_series
    {
        return new cls_series(
            $dtoin->season,
            $dtoin->episode,
            $dtoin->id,
            $dtoin->title,
            $dtoin->genre,
            $dtoin->year,
            $dtoin->rating
        );
    }

    public function execute(dto_edit_serie_in $in): dto_edit_serie_out
    {
        $entidade = $this->de_dto_para_entidade($in);
        return $this->de_entidade_para_dto(
            $this->resource_series->edit($entidade)
        );
    }
}
