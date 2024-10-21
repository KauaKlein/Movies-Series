<?php

namespace App\core\series\entity;

use App\core\base\abstract\cls_entidade_base;

class cls_series extends cls_entidade_base{

    public function __construct(
        private ?string $id_series='',
        private string $season,
        private ?string $episode,
        private string $title,
        private string $genre,
        private string $year,
        private string $rating
    ){
        $this->id=$id_series;
        parent::validar_principal();
    }

    public function id_series():?int{
        return $this->id_series;
    }
    public function season():string{
        return $this->season;
    }
    public function episode():?string{
        return $this->episode;
    }
    public function title():string{
        return $this->title;
    }
    public function genre():string{
        return $this->genre;
    }
    public function year():string{
        return $this->year;
    }
    public function rating():string{
        return $this->rating;
    }
    protected function validar(){
        if(!$this->campo_obrigatorio($this->title())){
            $className=get_class($this);
            $this->notification->AddError($className,'The title of serie is required');
        }
    }
}
