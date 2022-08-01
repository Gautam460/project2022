<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function show($id)
    {
        return $id;
    }

    function loadview()
    {
        return view('users');
    }
  function getData(Request $req)
  {
    return $req->input();
  }

}
