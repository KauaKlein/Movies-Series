<?php

namespace App\core\series\use_case\edit\dto;

class dto_edit_serie_out {
    public function __construct(
        public int $id,
        public string $season,
        public string $episode,
        public string $title,
        public string $genre,
        public string $year,
        public string $rating){}
}
