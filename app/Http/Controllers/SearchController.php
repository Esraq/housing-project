<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rent;
class SearchController extends Controller
{
    public function index(Request $request) {
        /*$users = DB::select('select * from st');
        return view('stud_view',['users'=>$users]);*/
        $flat_no=$request->input('flat_no');
        ///echo "hello";
       $rent=Rent::all()->where('flat_no',$flat_no);
        view()->share('rent',$rent);
        return view('search-history');

        
     }
}
