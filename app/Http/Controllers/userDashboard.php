<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class userDashboard extends Controller
{
    //
    function homepage(Request $req){
        $id=Session::get('loginId');
        $data = DB::table('alluser')->where('id',$id)->get();
        $data2 = DB::table('orders')->where('id',$id)->get();
        return view('userviews.dashboard.mainpage',['data'=>$data, 'data2'=>$data2]);
    }
}
