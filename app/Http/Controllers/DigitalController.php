<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Digital;

class DigitalController extends Controller
{
    public function getIndex()
    {
      $data['digitals'] = Digital::all();
      return view('pages.digital.index',$data);
    }

    public function getCreate()
    {
      return view('pages.digital.form');
    }

    public function postStore(Request $request)
    {
      $this->validate($request,[
        'firstname' => 'required|max:255',
        'address'  =>  'required'
      ]);
      $digital= Digital::firstOrCreate(array('id' =>$request->id));
      $digital->firstname=$request->firstname;
      $digital->descrition=$request->descrition;
      $digital->address=$request->address;

      $digital->save();
      return redirect('/digital');
    }

    public function getEdit($id)
    {
      $data['digital'] = Digital::find($id);
      return view('pages.digital.form',$data);
    }

    public function getDelete($id)
    {
     $digital = Digital::find($id)->delete();
     return back();
    }

}
