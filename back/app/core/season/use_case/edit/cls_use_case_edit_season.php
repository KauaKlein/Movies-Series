<?php

// namespace App\core\season\use_case\edit;

// use App\core\season\entity\cls_season;
// use App\core\season\resource\interface\int_resource_season;
// use App\core\season\use_case\edit\dto\dto_edit_season_in;
// use App\core\season\use_case\edit\dto\dto_edit_season_out;

// class cls_use_case_edit_season{

//     public function __construct(private int_resource_season $resource_season){}

//     public function de_entidade_para_dto(cls_season $entidade): dto_edit_season_out
//     {
//         return new dto_edit_season_out(
//             $entidade->series(),
//             $entidade->season(),
//             $entidade->season_title(),
//             $entidade->description()

//         );
//     }

    // public function de_dto_para_entidade(dto_edit_season_in $dtoin): cls_season
    // {
    //     return new cls_season(
    //         $dtoin->series,
    //         $dtoin->season,
    //         $dtoin->season_title,
    //         $dtoin->description
    //     );
    // }

//     public function execute(dto_edit_season_in $in): dto_edit_season_out
//     {
//         $entidade = $this->de_dto_para_entidade($in);
//         return $this->de_entidade_para_dto(
//             $this->resource_season->edit($entidade)
//         );
//     }
// }
