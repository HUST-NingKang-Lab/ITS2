<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrowseController extends Controller
{
    public function browse(Request $request)
    {
        $speciesName = $request->input('speciesName');
        $page = $request->input('page',1);
        $res = '';
        $count = 0;
        if ($speciesName){
            $res = DB::table('taxonomy')
                ->where('taxonomy','like',"%$speciesName%")
                ->offset(($page-1)*20)
                ->limit(20)
                ->get();
            $count = DB::table('taxonomy')
                ->where('taxonomy','like',"%$speciesName%")
                ->count();
        }else{
            $res = DB::table('taxonomy')
                ->offset(($page-1)*20)
                ->limit(20)
                ->get();
            $count = DB::table('taxonomy')
                ->count();
        }
//        $pages = ceil(count($res)/20);
        return view('browser',['items'=>$res,
                                "speciesName"=>$speciesName,
                                "currentPage"=>$page,
                                "totalCount"=>$count]);

    }
}
