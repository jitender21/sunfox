<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Profile;
use Validator;
use App\User;
use Auth;


class ProfileController extends Controller
{
    public function getIndex()
    {
      return view('pages.profile.index');
    }

    public function getCreate()
    {
      return view('pages.profile.form');
    }


    public function postStore(Request $request)
    {
          $validate = Validator::make($request->all(),[
          'name' => 'required|min:3',
          'email' => 'required|unique:users,email,'.Auth::id(),
           ]);

        if($validate->fails())
        {
          return back()->withErrors($validate);
       }

        $profile = Auth::user();
        $profile->name = $request->name;
        $profile->email = $request->email;

        $profile->save();
        return Redirect('profile');
    }

    public function postChangePassword(Request $request)
    {
      $validate = Validator::make($request->all(),[
      'password' => 'required|min:6|confirmed',
      'password_confirmation' => 'required',
    ]);

    if($validate->fails())
    {
      return back()->withErrors($validate);
    }
      $profile = User::firstOrCreate(array('id'=>$request->id));
      $profile->password = bcrypt($request->password);
      $profile->save();
      return Redirect('profile');
    }

}
