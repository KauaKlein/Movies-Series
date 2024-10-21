<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Series;
use App\core\series\use_case\list\cls_use_case_list_series;
use App\core\series\use_case\find\cls_use_case_find_serie;

use App\core\series\use_case\new\cls_use_case_new_serie;
use App\core\series\use_case\new\dto\dto_new_serie_in;

use App\core\series\use_case\edit\cls_use_case_edit_serie;
use App\core\series\use_case\edit\dto\dto_edit_serie_in;

use App\core\series\use_case\remove\cls_use_case_remove_serie;
use App\Models\Season;
use App\core\season\use_case\find\cls_use_case_find_season;

class SeriesController extends Controller
{
        public function __construct(
            private cls_use_case_list_series $use_case_list,
            private cls_use_case_find_serie $use_case_find,
            private cls_use_case_new_serie $use_case_new,
            private cls_use_case_edit_serie $use_case_edit,
            private cls_use_case_remove_serie $use_case_remove,
            private cls_use_case_find_season $use_case_findseason
        ){
    }



    public function index(Request $request)
    {

        return response()->json(
            $this->use_case_list->execute()
        , 200);
    }


    public function store(Request $request)
    {

        try{
            $dtoin=new dto_new_serie_in(
                $request->season,
                $request->episode,
                $request->title,
                $request->genre,
                $request->year,
                $request->rating
            );
            $dtoout = $this->use_case_new->execute($dtoin);
            return response()->json($dtoout, 201);
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }


    public function show(string $id_series)
    {

        try{

            return response()->json(
                $this->use_case_find->execute($id_series)
            , 200);
        } catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function showSeason(string $id_season){
        try{
            return response()->json(
                $this->use_case_findseason->execute($id_season)
                , 200);

        } catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }








    public function update(Request $request, string $id_series)
    {

        try{
            $dtoin = new dto_edit_serie_in(
                season:$request->season,
                episode:$request->episode,
                id:$id_series,
                title:$request->title,
                genre:$request->genre,
                year:$request->year,
                rating:$request->rating

            );
            $out=$this->use_case_edit->execute($dtoin);
            return response()->json($out, 200);
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function destroy(string $id)
    {

        try{
            $this->use_case_remove->execute($id);
            return response()->json(['message' => 'Serie deleted successfully.'], 200);

        } catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
