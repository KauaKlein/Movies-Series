<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\core\actors\use_case\list\cls_use_case_list_actors;
use App\core\actors\use_case\find\cls_use_case_find_actors;

use App\core\actors\use_case\new\cls_use_case_new_actors;
use App\core\actors\use_case\new\dto\dto_new_actors_in;

use App\core\actors\use_case\edit\cls_use_case_edit_actors;
use App\core\actors\use_case\edit\dto\dto_edit_actors_in;

use App\core\actors\use_case\remove\cls_use_case_remove_actors;


class ActorsController extends Controller
{
    public function __construct(private cls_use_case_list_actors $use_case_list,

){}

}

