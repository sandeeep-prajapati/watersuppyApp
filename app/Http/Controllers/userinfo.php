<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class userinfo extends Controller
{
    //
    function editinfo(Request $req){
        $id = $req->input('id');
        $data = DB::table('alluser')->where('id',$id)->get();
        return view('userviews.dashboard.editprofile',['data'=>$data,'id'=>$id]);
    }
    function editme(Request $req){
        $update = DB::table('alluser') ->where('id', $req->input('id')) ->limit(1) ->update( [ 'name' => $req->input('name'),
        'img' => $req->input('img'),
        'contactNo' => $req->input('contactNo'),
        'password' => $req->input('password'),
        'address' => $req->input('address')
        ]);
        if($update){
            return back()->with('success',"Profile is updated successfully!");
        }
        else{
            return back()->with('fail',"Something wrong happend");
        }
    }
    function editimg(Request $req){
        $id=$req->input('id');
        return view('userviews.dashboard.changeimg',['id'=>$id]);
    }
    function changeImage(Request $req){
        $req->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $imageName = time() . '.' . $req->img->extension();
        $req->img->move(public_path('images'), $imageName);
        $update = DB::table('alluser')->where('id', $req->input('id'))->update( [
        'img' => $req->input('img')
        ]);
        if($update){
            return back()->with('success',"Profile image is updated successfully!");
        }
        else{
            return back()->with('fail',"Something wrong happend");
        }
    }
}
