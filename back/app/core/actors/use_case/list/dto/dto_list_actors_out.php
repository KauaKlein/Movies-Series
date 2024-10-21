<?php

namespace App\core\actors\use_case\list\dto;


class dto_list_actors_out {
    public function __construct(
        public string $name,
        public string $birth,
        public int $id,
        public string $title,
        public string $genre,
        public string $rating){}
}
