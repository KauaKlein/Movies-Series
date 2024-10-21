<?php

namespace App\core\season\resource\interface;

use App\core\base\interface\ext_resource\int_resource_list;
use App\core\base\interface\ext_resource\int_resource_find;
use App\core\base\interface\ext_resource\int_resource_new;
use App\core\base\interface\ext_resource\int_resource_edit;
use App\core\base\interface\ext_resource\int_resource_remove;


use App\core\base\interface\int_resource_base;
use App\core\season\entity\cls_season;

interface int_resource_season extends int_resource_base,



int_resource_new,
int_resource_edit,
int_resource_remove,
int_resource_list{
    public function list(array $filter=[]):array;
    public function find($id_series, $id_season);
}

