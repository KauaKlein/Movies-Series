<?php

namespace App\core\season\use_case\list\dto;


class dto_list_season_out {
    public function __construct(
        public string $id_season,
        public string $id_series,
        public string $season_title,
        public string $description){}
}
