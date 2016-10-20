<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ManageController extends Controller
{
    public function getIndex()
    {
      return view('pages.manage.index');
    }

}
