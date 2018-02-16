<?php

namespace App\Http\Controllers;

use App\RolesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade as PDF;


class RolesController extends Controller
{

//  public function __construct()
  //{
    //  $this->middleware('auth');
  //}

    public function index(Request $request)
    {
      $roles=RolesModel::All();
      return view('roles.index',compact('roles'));
    }



    public function create()
    {
            return view('roles.create');
    }


    public function store(Request $request)
    {
      $roles=new RolesModel;
      $roles->Nombre=$request->get('rol');
      $roles->save();
      return Redirect::to('roles');
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
      return view('roles.edit',["roles"=>RolesModel::findOrFail($id)]);
    }


    public function update(Request $request,$id)
    {
      $roles=RolesModel::findOrFail($id);
      $roles->Nombre=$request->get('nombre');
      $roles->update();
      return Redirect::to('roles');
    }


    public function destroy($id)
    {
      $roles=RolesModel::findOrFail($id);
      $roles->Delete();
      //Post::destroy($id);
      Return Redirect::to('roles');
    }




    public function pdf()
      {
          $datos = RolesModel::All();
          $date = date('Y-m-d');
          $view =  \View::make('pdf.ReporteRoles', compact('datos', 'date'))->render();
          $pdf = \App::make('dompdf.wrapper');
          $pdf->loadHTML($view);
          return $pdf->stream('ReporteRoles');
      }

}
