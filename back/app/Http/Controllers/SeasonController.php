<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\core\season\use_case\list\cls_use_case_list_season;
use App\core\season\use_case\find\cls_use_case_find_season;

class SeasonController extends Controller
{
        public function __construct(
            private cls_use_case_list_season $use_case_list,
            private cls_use_case_find_season $use_case_find,
        ){
    }



    public function index(Request $request)
    {

        return response()->json(
            $this->use_case_list->execute()
        , 200);
    }



public function show($id_series, $id_season)
{

    try{

        return response()->json(
            $this->use_case_find->execute($id_series, $id_season)
        , 200);
    } catch(\Exception $e){
        return response()->json(['error' => $e->getMessage()], 400);
    }
}
}
