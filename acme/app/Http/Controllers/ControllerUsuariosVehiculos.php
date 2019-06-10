<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\propietarios;
use App\Conductores;
use DB;
class ControllerUsuariosVehiculos extends Controller
{
 
    public function index()
    {  $store_procedure="call Vehiculosusers('total')";
      $cuenta=DB::select($store_procedure);
      $contar=$cuenta[0]->cuenta;

     if($contar==0){
    
return redirect()->action('ControllerVehiculos@index');
     }else{
     return view('Usuariosvehiculos');

     }
            
            }

    
    public  function InformeTotal(){
    $store_procedure="call Vehiculosusers('todo')";
    $todo=DB::select($store_procedure);
   
//var_dump($info);
    return response()->json($todo);

    }

   public function Informeview(){

    return view("welcome");
   }
    
    


    public function propietariosave(Request $request)
    {  
     

        $usuariospropietarios=new propietarios();
        $usuariospropietarios->Numerodecedula=$request->input('Numerodecedula');
        $usuariospropietarios->PrimerNombre=$request->input('PrimerNombre');
        $usuariospropietarios->SegundoNombre=$request->input('SegundoNombre');
        $usuariospropietarios->Apellidos=$request->input('Apellidos');
        $usuariospropietarios->Telefono=$request->input('Telefono');
        $usuariospropietarios->ciudad=$request->input('ciudad');
        $usuariospropietarios->propietarios_vehiculos=$request->input('vehiculo');
        
        if($usuariospropietarios->save()){
        echo "operacion exitosa";

        }
      
 
      
        
    }




    public function conductorsave(Request $request)
    {  
       //print_r($_POST);
        $conductores=new Conductores();
        $conductores->Numerodecedula=$request->input('Numerodecedula');
        $conductores->PrimerNombre=$request->input('PrimerNombre');
        $conductores->SegundoNombre=$request->input('SegundoNombre');
        $conductores->Apellidos=$request->input('Apellidos');
        $conductores->Telefono=$request->input('Telefono');
        $conductores->ciudad=$request->input('ciudad');
        $conductores->conductores_vehiculos=$request->input('vehiculo');
        
        if($conductores->save()){
        echo "operacion exitosa";

        }
      
      //insert into `conductores` (`Numerodecedula`, `PrimerNombre`, `SegundoNombre`, `Apellidos`, `Telefono`, `ciudad`, `conductores_vehiculos`) values (10244482240, juan, asasasas, asasas, 20123, bogota, 2))
 
      
        
    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    { //print_r($_POST);
     
      $tipo= $request->input('Usuariotipe'); 
       
      if($tipo==1){
       $sql ="call Vehiculosusers('conductores')";
      
      $conductores=DB::select( $sql);
       //echo $conductores;
       return response()->json($conductores);
          
      }  
   if($tipo==2){
    $sql ="call Vehiculosusers('propietarios')";
   $propietarios=DB::select($sql);

       return response()->json($propietarios);
  

   }


    }

    

     public function elminarpropietario(Request $request)
    {
          $id= $request->input('id');
      $propietarios = propietarios::findOrFail($id);
      
      if($propietarios->delete()){
      echo "operacion exitosa";

      }
    }
    
    public function elminarconductor(Request $request)
    {
        //print_r($_POST);
    $id= $request->input('id');
    $query= DB::table('conductores')->where('idconductores', '=', $id)->delete();
      
    if($query){

    echo "operacion exitosa";
     }

      

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
