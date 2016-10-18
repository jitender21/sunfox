<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Sunfox;

class SunfoxController extends Controller
{
  public function getIndex()
  {
   $data['sunfoxs'] = Sunfox::paginate(10);
   return view('pages.sunfox.index',$data);
  }

public function getCreate()
{
  return view('pages.Sunfox.form');
}

public function postStore(Request $request)
{
   $this->validate($request, [
   'firstname' => 'required|max:255',
   'lastname' => 'required',
   'address' => 'required',
 ]);

 $sunfox = Sunfox::firstOrCreate(array('id' =>$request->id));
 $sunfox->firstname=$request->firstname;
 $sunfox->lastname=$request->lastname;
 $sunfox->address=$request->address;
 $sunfox->save();
  return redirect('/sunfox');
}

public function getEdit($id)
{
 $data['sunfox'] = Sunfox::find($id);
    return view('pages.sunfox.form',$data);
}

public function getDelete($id)
{
 $sunfox = Sunfox::find($id)->delete();
    return back();
}

}
