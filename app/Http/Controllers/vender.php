<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class vender extends Controller
{
    function login(Request $req)
    {
        return view('vender.login');
    }

    function dashboard(Request $req)
    {
        $data = DB::table('orders')->whereNot('status', 3)->join('alluser', 'orders.id', '=', 'alluser.id')->get();
        $data0 = DB::table('orders')->where('status', 0)->join('alluser', 'orders.id', '=', 'alluser.id')->get();
        $data1 = DB::table('orders')->where('status', 1)->join('alluser', 'orders.id', '=', 'alluser.id')->get();
        $data2 = DB::table('orders')->where('status', 2)->join('alluser', 'orders.id', '=', 'alluser.id')->get();
        $data3 = DB::table('orders')->where('status', 3)->join('alluser', 'orders.id', '=', 'alluser.id')->get();

        return view('vender.dashboard', ['data' => $data,'data0'=>$data0,'data1'=>$data1,'data2'=>$data2,'data3'=>$data3]);
    }
    function vlogin(Request $req)
    {
        $req->validate([
            'username' => 'required',
            'password' => 'required|min:5'
        ]);
        $username = $req->input('username');
        $password = $req->input('password');
        $user = DB::table('vender')->where('userid', $username)->first();

        if (($username == $user->userid) && ($password == $user->password)) {
            $req->Session()->put('vid', $user->id);
            return redirect('vdashboard')->with('success', 'congratuletions you have success-fully logged in');
        } else {
            return back()->with('fail', 'there are email or password are incorract');
        }
    }

    function cancel(Request $req)
    {
        $update = DB::table('orders')->where('order_id', $req->input('id'))->update(['status' => 3]);
        if ($update) {
            return redirect('vdashboard')->with('success', 'hii You have successfully canceled order');
        } else {
            return back()->with('fail', 'sorry try it again please');
        }
    }
    function delivered(Request $req)
    {
        $update = DB::table('orders')->where('order_id', $req->input('id'))->update(['status' => 2]);
        if ($update) {
            return redirect('vdashboard')->with('success', 'hii You have successfully delivered order');
        } else {
            return back()->with('fail', 'sorry try it again please');
        }
    }
    function comming(Request $req)
    {
        $update = DB::table('orders')->where('order_id', $req->input('id'))->update(['status' => 1]);
        if ($update) {
            return redirect('vdashboard')->with('success', 'hii You have successfully comming order');
        } else {
            return back()->with('fail', 'sorry try it again please');
        }
    }
}
