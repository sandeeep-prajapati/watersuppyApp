<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
class registration extends Controller
{
    function registrationPage(Request $req){
        return view('userviews.landing.registration');
    }
    function user_registration(Request $req){
        $req->validate([
            'name' => 'required',
            'contactNo' => 'required|unique:alluser',
            'password' => 'required|min:5',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'address'=>'required|min:5'
        ]);
        // return $req;
        $imageName = time() . '.' . $req->img->extension();
        $req->img->move(public_path('images'), $imageName);
        $result = DB::table('alluser')->insert([
            'name' => $req->input('name'),
            'img' => "images/" . $imageName,
            'contactNo' => $req->input('contactNo'),
            'password' => $req->input('password'),
            'address' => $req->input('address')
        ]);
        $user = DB::table('alluser')->where('contactNo', $req->input('contactNo'))->first();
        if ($result) {
            $req->Session()->put('loginId', $user->id);
            return redirect('userdashboard')->with('success', 'hii there you have successfully registerd');
        } else {
            return back()->with('fail', 'sorry try it again please');
        }
    }
}
