<?php

namespace App\core\series\use_case\find\dto;

class dto_find_series_out {
    public function __construct(
        public int $id,
        public string $season,
        public string $episode,
        public string $title,
        public string $genre,
        public string $year,
        public string $rating){}
}
