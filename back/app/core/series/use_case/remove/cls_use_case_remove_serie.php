<?php

namespace App\core\series\use_case\remove;

use App\core\series\resource\interface\int_resource_series;

class cls_use_case_remove_serie{
    public function __construct(private int_resource_series $resource)
    {
    }

    public function execute(int $id): void{

        $this->resource->remove($id);
    }
}
