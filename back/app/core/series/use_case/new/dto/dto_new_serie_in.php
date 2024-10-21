<?php

namespace App\core\series\use_case\new\dto;

class dto_new_serie_in {
    public function __construct(
        public string $season,
        public string $episode,
        public string $title,
        public string $genre,
        public string $year,
        public string $rating){}
}
