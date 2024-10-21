<?php

namespace App\core\episode\entity;

use App\core\base\abstract\cls_entidade_base;

class cls_episode extends cls_entidade_base{

    public function __construct(
        ?string $id="",
        private string $name,
        private ?string $episode,
        private string $title_episode,
        private string $description

    ){
        $this->id=$id;
        parent::validar_principal();
    }

    public function id():?int{
        return $this->id;
    }
    public function name():string{
        return $this->name;
    }
    public function episode():?string{
        return $this->episode;
    }
    public function description():string{
        return $this->description;
    }
    public function title_episode():string{
        return $this->title_episode;
    }

    protected function validar(){
        if(!$this->campo_obrigatorio($this->name())){
            $className=get_class($this);
            $this->notification->AddError($className,'The title is required');
        }
    }
}
