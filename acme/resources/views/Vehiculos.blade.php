@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
    <div class="card-header">Vehiculos </div>
 
    <div class="card-body">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Registrar Un Vehiculo
  </button>
     
    </div>
 <div  class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
            	



                <th>Placa </th>
                <th>color</th>
                <th>Marca </th>
                <th>Tipovehiculo</th>
                 <th>Editar</th>
                 <th>ELiminar</th>
            </tr>
        </thead>
 
        <tbody>
           
            <tr ng-repeat="Vehiculo  in  Autos">
            <td><% Vehiculo.placa %></td>
            <td><% Vehiculo.color %></td>
            <td><% Vehiculo.marca %> </td>
            <td><% Vehiculo.tipodevehiculo %></td>
            <td>
                <button type="button" class="btn btn-success" ng-click="Editar(Vehiculo.idvehiculos)">Editar</button> 
              
             </td>
          <td>
               <button type="button" class="btn btn-danger" ng-click="ELiminar(Vehiculo.idvehiculos)"> eliminar</button> 
             </td>
          

            </tr>    
 

        </tbody>
    </table>
 </div>
    
</div>
</div>

<div class="container">
  <!-- Button to Open the Modal -->

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ingresar Vehiculo</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
  <form  action="{{url('/registrar')}}" method="POST" id="Vehiculos">
    <div class="form-group">
      <label for="email">placa:</label>
      <input type="text" class="form-control" id="placa" placeholder="Enter placa" name="placa">
    </div>
    <div class="form-group">
      <label for="pwd">color:</label>
      <input type="text" class="form-control" id="color" placeholder="Enter color" name="color">
    </div>
    
    <div class="form-group">
      <label for="pwd">marca:</label>
      <input type="text" class="form-control" id="marca" placeholder="Enter marca" name="Marca">
    </div>
     <div class="form-group">
      <label for="pwd">Tipovehiculo:</label>
      <select class=" form-control" name="Tipovehiculo">
       <option value="">Selecione</option>   
       <option value="publico">publico</option>   
       <option value="privado">privado</option>   
      
      </select>

    </div>

       <button type="button" class="btn btn-primary" ng-click="Guardarvehiculo()">Guardar</button>
  </form>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
                </div>
        
      </div>
    </div>
  </div>
  
</div>



<div class="container">
  <!-- Button to Open the Modal -->

  <!-- The Modal -->
  <div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ingresar Vehiculo</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <div class="blade-edit" >
              </div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-primary" ng-click="Updatevehiculo()">Guardar</button>

        </div>
        
      </div>
    </div>
  </div>
  
</div>


@endsection
