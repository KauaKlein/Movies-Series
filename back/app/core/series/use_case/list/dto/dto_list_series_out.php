<?php

namespace App\core\series\use_case\list\dto;


class dto_list_series_out {
    public function __construct(
        public string $season,
        public ?string $episode,
        public int $id_series,
        public string $title,
        public string $genre,
        public string $year,
        public string $rating){}
}
