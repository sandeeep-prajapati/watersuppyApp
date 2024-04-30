<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class ordersection extends Controller
{
    function orderdetails(Request $req){
        $req->validate([
            'latitude' => 'required',
            'longitude' => 'required',
            'amout' => 'required'
        ]);
        $result = DB::table('orders')->insert([
            'id'=>Session::get('loginId'),
            'latitude' => $req->input('latitude'),
            'longitude' => $req->input('longitude'),
            'address' => $req->input('address'),
            'contactNo' => $req->input('contactNo'),
            'amout' => $req->input('amout'),
            'status' =>0
        ]);
        $user = DB::table('orders')->where('contactNo', $req->input('contactNo'))->first();
        if ($result) {
            $req->Session()->put('loginId', $user->id);
            return redirect('userdashboard')->with('success', 'hii there you have successfully booked an order ✔');
        } else {
            return back()->with('fail', 'sorry try it again please');
        }
    }
    function deleteCard(Request $req){
        $id=$req->input('id');
        echo $id;
        $result = DB::table('orders')->where('order_id', $id)->delete();
        if ($result) {
            return back()->with('success', 'hii there you have successfully deleted booking✌');
        } else {
            return back()->with('fail', 'sorry try it again please');
        }
    }
}
