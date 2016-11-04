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

    public function postProfileimage(Request $request){
        $image = User::find($request->id);

        if($image){
            $profile = $this->profileImage($request);
            $image->profile_image = $profile;
            $image->save();


            $request->session()->flash('notification', ['type'=>'success','message'=>'Logo Successfully Update!']);
        }
        return Redirect('/profile');
     }

     private function profileImage($request){

           $userId=Auth::user()->id;
           $fileName = "";
           $unique_id=uniqid();
           if($request->hasFile('profile_image')){
               $file = $request->file('profile_image');
               $fileName = $unique_id.'.'.$file->getClientOriginalExtension();
               $getImageReponse =  \Image::make($file);
               $getImageReponse->resize(80, 80)->save('uploads/profile/'.$fileName);
               $getImageReponse->save('uploads/profile/'.$fileName);
           }
         return $fileName;
     }


}
