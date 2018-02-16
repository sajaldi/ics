<?php

namespace App\Http\Controllers;

use App\StatusModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;


class StatusController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

    public function index(Request $request)
    {
      $status=StatusModel::All();
      return view('status.index',compact('status'));
    }


    public function create()
    {
          return view('status.create');
    }


    public function store(Request $request)
    {
      $status=new StatusModel;
      $status->Nombre=$request->get('estado');
      $status->save();
      return Redirect::to('status');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view('status.edit',["status"=>StatusModel::findOrFail($id)]);
    }


    public function update(Request $request,$id)
    {
      $status=StatusModel::findOrFail($id);
      $status->Nombre=$request->get('nombre');
      $status->update();
      return Redirect::to('status');
    }


    public function destroy($id)
    {
      $status=StatusModel::findOrFail($id);
      $status->Delete();
      //Post::destroy($id);
      Return Redirect::to('status');
    }
}
