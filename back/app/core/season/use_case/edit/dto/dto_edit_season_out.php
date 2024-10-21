<?php

namespace App\core\season\use_case\edit\dto;

class dto_edit_season_out {
    public function __construct(public string $id_series,
                                public string $id_season,
                                public string $season_title,
                                public string $description,){}
}
