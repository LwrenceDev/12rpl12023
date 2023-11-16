<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.profile');
    }
    
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);
        $idlogin=Auth::user()->id;
        $dbaru=$request->all;
        $dlama=User::findOrfail($idlogin);
        if($request['foto']!='')
        {
            $dbaru['foto']=$request->foto->store('user/profile', 'public');
            $dlama->update($dbaru);
            return redirect('/profile')->with('success','Data berhasil dirubah');
        }              
        
        $dlama->update([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'password'=>$request['password'],
        ]);
        return redirect('/profile')->with('success','Data berhasil dirubah');
    }

}
