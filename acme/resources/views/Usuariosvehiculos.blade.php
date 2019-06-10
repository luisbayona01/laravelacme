@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
    <div class="card-header">Gestionar conductores Y propietarios </div>
 
    <div class="card-body">
     <select class="form-control" name="tipoUser" ng-model="Usuariotipe" id="tipoUser"  ng-change="tipoUser(Usuariotipe)">
     <option value=""> seleccione</option>	
     <option value="1">Conductor</option>	
     <option value="2">Propietario</option>	
      
     </select>
     
    </div>




<div class="conductor">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">
    Registrar Un Conductor
  </button>
 <div  class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
            	



                <th>Numerodecedula </th>
                <th>PrimerNombre</th>
                <th>SegundoNombre </th>
                <th>Apellidos</th>
                <th>Telefono</th>
                <th>ciudad</th>
                
                <th>Eliminar</th>
                

            </tr>
        </thead>
 
        <tbody>
           
        <tr ng-repeat="x in conductorespropietarios">
            <td><% x.Numerodecedula  %></td>
            <td><% x.PrimerNombre %></td>
            <td><% x.SegundoNombre%> </td>
            <td><% x.Apellidos%></td>
            <td><% x.Telefono%></td>
            <td><% x.ciudad%></td>
            <td><button type="button" class="btn btn danger" ng-click="EliminarConductor(x.idconductores) ">EliminarConductor </button>  </td>
                           
              
          

            </tr>    
 

        </tbody>
    </table>
 </div>
    </div>
<div class="propietario">
	  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
    Registrar Un propietario
  </button>

 <div  class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
            	



                <th>Numerodecedula </th>
                <th>PrimerNombre</th>
                <th>SegundoNombre </th>
                <th>Apellidos</th>
                <th>Telefono</th>
                <th>ciudad</th>
                
                <th>Eliminar</th>
                

            </tr>
        </thead>
 
        <tbody>
           
            <tr ng-repeat="x in conductorespropietarios">
            <td><% x.Numerodecedula  %></td>
            <td><% x.PrimerNombre %></td>
            <td><% x.SegundoNombre%> </td>
            <td><% x.Apellidos%></td>
            <td><% x.Telefono%></td>
            <td><% x.ciudad%></td>
            <td><button type="button" class="btn btn danger" ng-click="Eliminarpropietraio(x.idpropietarios) ">Eliminarpropietario </button>  </td>
                           
              
          

            </tr>    
 

        </tbody>
    </table>
 </div>
    
</div>
</div>
</div>



</div>
</div>
</div>





<div class="container">
  <!-- Button to Open the Modal -->

  <!-- The Modal -->
  <div class="modal fade" id="myModal3">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ingresar Conductor</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
  <form   id="Conductor">
    <div class="form-group">
      <label for="email">Numerodecedula:</label>
      <input type="text" class="form-control" id="NumerodecedulaC" placeholder="Enter Numero de cedula" name="Numerodecedula">
    </div>
    <div class="form-group">
      <label for="pwd">PrimerNombre:</label>
      <input type="text" class="form-control" id="PrimerNombreC" placeholder="Enter color" name="PrimerNombre">
    </div>
    
    <div class="form-group">
      <label for="pwd">SegundoNombre:</label>
      <input type="text" class="form-control" id="SegundoNombreC" placeholder="Enter SegundoNombre" name="SegundoNombre">
    </div>
     
      <div class="form-group">
      <label for="pwd">Apellidos:</label>
      <input type="text" class="form-control" id="ApellidosC" placeholder="Enter Apellidos" name="Apellidos">
    </div>
 
   <div class="form-group">
      <label for="pwd">Telefono:</label>
      <input type="text" class="form-control" id="TelefonoC" placeholder="Enter Telefono" name="Telefono">
    </div>
    <div class="form-group">
      <label for="pwd">Ciudad:</label>
      <select name="ciudad" id="ciudadC" class="form-control" >
      <option value=" "> seleccione</option>
      <option value="bogota">bogota</option>	
      <option value="medellin">medellin</option>	

      </select>

<div class="form-group">
      <label for="pwd">Vehiculo:</label>
      <select name="vehiculo" id="vehiculop" class="form-control">
      <option value=" "> seleccione</option>
      <option ng-repeat="VehiculoP  in  Autos" value="<% VehiculoP.idvehiculos %>"><% VehiculoP.marca %></option> 
  </select>
    </div>
       <button type="button" class="btn btn-primary" ng-click="GuardarConductor()">GuardarConductor</button>
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
  <div class="modal fade" id="myModal4">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ingresarpropietario</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
  <form   id="propietarios">
    <div class="form-group">
      <label for="email">Numerodecedula:</label>
      <input type="text" class="form-control" id="Numerodecedulap" placeholder="Enter Numero de cedula" name="Numerodecedula">
    </div>
    <div class="form-group">
      <label for="pwd">PrimerNombre:</label>
      <input type="text" class="form-control" id="PrimerNombreP" placeholder="Enter color" name="PrimerNombre">
    </div>
    
    <div class="form-group">
      <label for="pwd">SegundoNombre:</label>
      <input type="text" class="form-control" id="SegundoNombreP" placeholder="Enter SegundoNombre" name="SegundoNombre">
    </div>
     
      <div class="form-group">
      <label for="pwd">Apellidos:</label>
      <input type="text" class="form-control" id="ApellidosP" placeholder="Enter Apellidos" name="Apellidos">
    </div>
 
   <div class="form-group">
      <label for="pwd">Telefono:</label>
      <input type="text" class="form-control" id="TelefonoP" placeholder="Enter Telefono" name="Telefono">
    </div>
    <div class="form-group">
      <label for="pwd">Ciudad:</label>
      <select name="ciudad" id="ciudad" class="form-control" >
      <option value=""> seleccione</option>
      <option value="bogota">bogota</option>	
      <option value="medellin">medellin</option>	

      </select>

<div class="form-group">
      <label for="pwd">Vehiculo:</label>
      <select name="vehiculo" id="vehiculop" class="form-control">
      <option value=" "> seleccione</option>
      <option ng-repeat="VehiculoP  in  Autos" value="<% VehiculoP.idvehiculos %>"><% VehiculoP.marca %></option>	
  </select>
    </div>
       <button type="button" class="btn btn-primary" ng-click="GuardarPropietario()">GuardarPropietario</button>
  </form>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
                </div>
        
      </div>
    </div>
  </div>
  
</div>




@endsection
