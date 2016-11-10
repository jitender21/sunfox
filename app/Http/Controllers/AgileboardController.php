<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Agileboard;
use Auth;

class AgileboardController extends Controller
{
  public function getIndex()
  {
    $data['todos']=Agileboard::where('task_status','todo')->get();
    $data['inprogresss']=Agileboard::where('task_status','inprogress')->get();
    $data['completeds']=Agileboard::where('task_status','completed')->get();

    return view('pages.agileboard.index',$data);
  }

  public function postStore(Request $request)
  {
    $this->validate($request, [
    'task' => 'required',
  ]);

    $agileboard= new Agileboard;
    $agileboard->user_id=Auth::id();
    $agileboard->task=$request->task;
    $agileboard->task_status=$request->task_status;
    $agileboard->save();

   return redirect('/agileboard');

  }
  public function getUpdate(Request $request)
  {

    $agileboard=Agileboard::where('id',$request->taskId )
     ->update(['task_status'=> $request->task_status]);
  }


      public function getEdit($id)
      {
        $data['agileboard'] = Agileboard::find($id);
        return view('pages.agileboard.form',$data);
      }

  public function getDelete($id)
  {
   $agileboard = Agileboard::find($id)->delete();
   return back();
  }

}
