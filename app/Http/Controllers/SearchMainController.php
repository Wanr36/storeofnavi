<?php

namespace Storeofnavi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storeofnavi\Http\Requests;

class SearchMainController extends Controller
{
   public function Index(Request $request){
        $search = $request->pole;
        $res = DB::table('application')->where("titleApplication",'like', '%'.$search.'%')->get();
        $search = " ";
       foreach($res as $re){
           $search .="<li>
                        <div align='center' class='search-result-image'>
                            <img src='$re->imgApplication' width='50' height='50'>
                        </div>
                        <div class='block-title-price'>
                            <a href='/application'>". $re->titleApplication . "</a>
                            <p>".$re->priceApplication." руб.</p>
                        </div>
                    </li>";
        }


        return response()->json(['search'=>$search ], 200);
   }
}
