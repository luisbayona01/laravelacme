<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculos;
use DB;
class ControllerVehiculos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return  view('vehiculos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registrar(Request $request)
    { 
      //print_r($_POST);
    

     
   $buscar=Vehiculos::where('placa',$request->input('placa'))->first();

    

if($buscar['idvehiculos']!=0){  
   
echo "Este Auto ya esta registrado";
 

 }else{
 
    $Vehiculos=new Vehiculos();
    $Vehiculos->placa=$request->input('placa');  
    $Vehiculos->color=$request->input('color');
    $Vehiculos->marca=$request->input('Marca');
    $Vehiculos->tipodevehiculo=$request->input('Tipovehiculo');
    

    
     if($Vehiculos->save()){
      echo 'operacion exitosa';

     }

 }
    }

    
    public function show()
    {
        $VehiCulos="call Vehiculosusers('vehiculos')";

        $tvehiculos=DB::select($VehiCulos);
        return response()->json($tvehiculos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {       
         $Autos=Vehiculos::where('idvehiculos',$request->input('id'))->first();
        return view('EditAutos',compact('Autos')); 
    }


     public   function eliminar(Request $request){
      $id= $request->input('id');
      $user = Vehiculos::findOrFail($id);
      
      if($user->delete()){
      echo "operacion exitosa";

      }


     }
    
    public function update(Request $request)
    { 
       
    $id=$request->input('id');
    $vehiculos = Vehiculos::find($id);
    $vehiculos->placa=$request->input('placa');
    $vehiculos->color=$request->input('color');
    $vehiculos->marca=$request->input('Marca');
    $vehiculos->tipodevehiculo=$request->input('Tipovehiculo'); 
    if($vehiculos->save()){
    echo"operacion  exitosa";

    } 
    }

   
}
