<?php

namespace App\core\episode\use_case\list\dto;


class dto_list_episode_out {
    public function __construct(
        public ?string $episode,
        public int $id,
        public string $name,
        public string $title_episode,
        public string $description){}
}
