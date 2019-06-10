@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
    <div class="card-header">Informe completo </div>
 
    <div class="card-body">
       
    </div>
 <div  class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
            	



                <th>Placa </th>
                <th>Marca </th>
                <th>Conductor</th>
                <th>Propietario</th>
               
            </tr>
        </thead>
 
        <tbody>
            <tr ng-repeat="Inf  in Informe">
                <td><%Inf.placa %></td>
                <td><%Inf.marca %></td>
                <td><%Inf.nombreconductor %></td>
                <td><%Inf.Nombrepropietario %></td>
               
            </tr>
 

        </tbody>
    </table>
 </div>
    
</div>
</div>
@endsection
