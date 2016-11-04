<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Agile;

class AgileController extends Controller
{
  public function getIndex()
  {
    return view('pages.agile.index');
  }
  public function getCreate()
  {
    return view('pages.agile.form');
  }
  public function postStore(Request $request)
  {
    $this->validate($request, [
    'task' => 'required',
  ]);

  $agile= new Agile;
    $agile->user_id=$Request->user_id;
    $agile->task=$Request->task;
    $agile->task_status=$Request->task_status;
    $agile->save();

   return redirect('/agile');

  }
}
