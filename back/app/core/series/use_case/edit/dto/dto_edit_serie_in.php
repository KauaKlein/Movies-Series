<?php

namespace App\core\series\use_case\edit\dto;

class dto_edit_serie_in {
    public function __construct( public string $season,
                                public string $episode,
                                public string $id,
                                public string $title,
                                public string $genre,
                                public string $year,
                                public string $rating){}
}
