<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use poster;

class PosterController extends Controller
{
    public function getIndex()
    {

      return view('pages.poster.index');
    }

    public function getCreate()
    {

      return view('pages.poster.form');
    }

    public function postStore(Request $request)
    {
      $this->validate($request,[
        'poster' => 'required|max:255',
        'post'=>'required'
        ]);
        if($validate->fails())


        {
          return back()->withErrors($validate)->withInput();

        }
         $post = Post::firstOrCreate(array('id'=>$request->id));
         $post->category_id = $request->category_id;
         $post->user_id = \Auth::id();
           $path=public_path('uploads/post_image');
           if(!is_dir($path))mkdir($path,0777);
           if($request->hasfile('picture'))
           {
             $file=$request->file('picture');
             $db_path = 'uploads/post_image';
             $filename=base_convert(time(),10,36).'_'.$file->getClientOriginalName();
             $post->picture=$db_path.'/'.$filename;
             $request->file('picture')->move($db_path,$filename);
           }
         $post->message=$request->message;
         $post->save();
         return Redirect('/post');
    }



}
