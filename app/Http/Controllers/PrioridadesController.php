<?php

namespace App\Http\Controllers;

use App\PrioridadesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class PrioridadesController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

    public function index(Request $request)
      {
        $prioridades=PrioridadesModel::All();
        return view('prioridades.index',compact('prioridades'));
    }


    public function create()
    {
        return view('prioridades.create');
    }

    public function store(Request $request)
    {
      $prioridades=new PrioridadesModel;
      $prioridades->Nombre=$request->get('prioridades');
      $prioridades->save();
      return Redirect::to('prioridades');
    }

    public function show($id)
    {
//
    }


    public function edit($id)
    {
    return view('prioridades.edit',["prioridades"=>PrioridadesModel::findOrFail($id)]);
    }

    public function update(Request $request,$id)
    {
      $prioridades=prioridadesModel::findOrFail($id);
      $prioridades->Nombre=$request->get('nombre');
      $prioridades->update();
      return Redirect::to('prioridades');
    }

    public function destroy($id)
    {
      $prioridades=PrioridadesModel::findOrFail($id);
      $prioridades->Delete();
      //Post::destroy($id);
      Return Redirect::to('prioridades');
    }
}
