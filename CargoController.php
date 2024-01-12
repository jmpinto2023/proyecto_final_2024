<?php

namespace App\Http\Controllers;

use Auth;
use Crypt;
use Illuminate\Http\Request;
use App\ModelCargo;
use App\ModelArea;

class CargoController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
    }

    public function index(){
        $rol = Auth::user()->id_rol;
        if($rol>=1 && $rol<=4){
        return view('cargo.ViewIndex')->with('data',ModelCargo::cargo())->with('vc',ModelCargo::vcargo())->with('vv',ModelCargo::vvcargo())
        ->with('e',ModelArea::emp());
        }else{ return view('errors.403'); }
    }

    public function create(){
      $rol = Auth::user()->id_rol;
      if( $rol==1){
        return view('cargo.ViewNew')->with('e',ModelArea::emp());
      }else{ return view('errors/403'); }
    }

    public function store(Request $request){
      $rol = Auth::user()->id_rol;
      if( $rol==1){
        $post=$request->all(); 
        if(count($post) > 0 ){
          $v = \Validator::make($request->all(),
            [ 
            'nombre'=>'required|string|max:100',
            ]);
          if($v->fails()){
            return redirect()->back()->withErrors($v->errors());
          }else{ 

            $data = array( 
              'nombre_cargo'      =>strtoupper($post['nombre']),
              'descripcion_cargo' =>strtoupper($post['descripcion'])
              );
            $resul = ModelCargo::store($data);
          }
          if($resul > 0){
            \Session::flash('message','Registro fue guardado exitosamente ...!!!');
            return redirect('/cargo');
          }else{
            \Session::flash('message','Registro no fue guardado');
            return redirect('/cargo');}
        }else{ return view('errors/404'); }
      }else{ return view('errors/403'); }
    }

    public function show($id){}

    public function edit($id){
        $id = Crypt::decrypt($id);
        $rol = Auth::user()->id_rol;
        if($rol==1){ 
            $row = ModelCargo::edit($id);
            $e=ModelArea::emp();
            if(count($row) > 0){ 
              return view('cargo.ViewEdit', compact('row','id','e'));
            }else{return view('errors/404');}
          }
    }

    public function update(Request $request, $id){
      $rol = Auth::user()->id_rol;
      if( $rol==1){
        $usuario = Auth::user()->id;
        $post=$request->all(); 
        if(count($post) > 0 ){
          $v = \Validator::make($request->all(), 
                [ 
                'nombre'=>'required|string|max:100',
                ]);
          if($v->fails()){return redirect()->back()->withErrors($v->errors());}
          else{
                $data = array( 
                  'nombre_cargo'      =>strtoupper($post['nombre']),
                  'descripcion_cargo' =>strtoupper($post['descripcion'])
                  );
            $resul = ModelCargo::updat($data,$id);
          }
          if($resul > 0){
            \Session::flash('message','Registro fue Modificado exitosamente ...!!!');
            return redirect('/cargo');
          }else{
            \Session::flash('message','Registro no fue Modificado');
            return redirect('/cargo');}
        }else{ return view('errors/404'); }
      }else{ return view('errors/403'); }
    }

    protected function delete($id,Request $request){
       $id = Crypt::decrypt($id);
      $rol = Auth::user()->id_rol;
      if( $rol==1){
        $row = ModelCargo::edit($id);
        if(count($row)){
         return view('cargo.ViewDelete')->with('row', $row)->with('e',ModelArea::emp());
       }else{ return view('errors/404'); }
     }else{ return view('errors/403'); }
    }


    public function delet(Request $request){
     $rol = Auth::user()->id_rol;
     if( $rol==1){
        $post=$request->all(); 
        $id=$post['id'];
       $resul = ModelCargo::delet($id);
       if($resul > 0){
        \Session::flash('message','Registro fue Elimado exitosamente ..');
        return redirect('/cargo');
      }else{
        \Session::flash('message','Registro no fue Eliminado');
        return redirect('/cargo');
      }
    }else{ return view('errors/403'); }
    }
}
