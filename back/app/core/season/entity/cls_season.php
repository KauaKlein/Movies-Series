<?php

namespace App\core\season\entity;

use App\core\base\abstract\cls_entidade_base;

class cls_season extends cls_entidade_base{

    public function __construct(
        ?string $id="",
        private string $id_series,
        private string $season_title,
        private string $description

    ){
        $this->id=$id;
        parent::validar_principal();
    }

    public function id():?string{
        return $this->id;
    }
    public function id_series():string{
        return $this->id_series;
    }

    public function description():string{
        return $this->description;
    }
        public function season_title():string{
        return $this->season_title;
    }

    protected function validar(){
        if(!$this->campo_obrigatorio($this->id_series())){
            $className=get_class($this);
            $this->notification->AddError($className,'The title is required');
        }
    }
}
