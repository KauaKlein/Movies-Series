

 <?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\core\episode\use_case\list\cls_use_case_list_episode;
use App\core\episode\use_case\find\cls_use_case_find_episode;
use App\Models\Episode;

class EpisodeController extends Controller
{
        public function __construct(
            private cls_use_case_list_episode $use_case_list,
            private cls_use_case_find_episode $use_case_find,
        ){
    }



    public function index(Request $request)
    {

        return response()->json(
            $this->use_case_list->execute()
        , 200);
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
}

