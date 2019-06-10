
var app = angular.module("myApp",[],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });
app.controller("myCtrl", function($scope,$http) {

/* Informe total*/


$(".conductor").hide();
$(".propietario").hide();

$scope.tipoUser=function(Usuariotipe){

if (Usuariotipe==1) {
$(".conductor").show()
$(".propietario").hide()
var url="http://localhost/acme/public/showU" 
var parametros=$.param({"Usuariotipe":Usuariotipe})
$scope.data(url,parametros)
}

if (Usuariotipe==2) {
$(".propietario").show();
$(".conductor").hide()

var url="http://localhost/acme/public/showU" 
var parametros=$.param({"Usuariotipe":Usuariotipe})
$scope.data(url,parametros)
}


}



$scope.data=function(url,parametros){


$http({
  method  : 'POST',
  url     : url,
  data    : parametros, //this.formData,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
      //alert(response);     
 $scope.conductorespropietarios=response; 
 

}).error(function (response) {
           
  });



}
$scope.GuardarConductor=function(){
	
if($("#NumerodecedulaC").val()==""){
alert("este campo es requerido")
 return  false
}

if($("#PrimerNombreC").val()==""){
alert("este campo es requerido")
return  false
}
if($("#SegundoNombreC").val()==""){

  alert("este campo es requerido")
return  false
}
if($("#ApellidosC").val()==""){
  alert("este campo es requerido")
return  false
}
if($("#TelefonoC").val()=="" ){
  alert("este campo es requerido")
return  false
} 
	
	
	
  var  parametross=$("#Conductor").serialize();
 var  urls="http://localhost/acme/public/conductorsave";

$http({
  method  : 'POST',
  url     : urls,
  data    : parametross, //this.formData,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
      alert(response);     
 var Usuariotipe="1";
var parametros= $.param({"Usuariotipe":Usuariotipe})
 var  url="http://localhost/acme/public/showU";
$scope.data(url,parametros)
/* 
 var parametros=$.param({"Usuariotipe":"1"});
*/

}).error(function (response) {
           
  });





}

$scope.Eliminarpropietraio=function(xidpropietarios){

var urls="http://localhost/acme/public/index.php/Deletepropietario";
var parametross=$.param({"id":xidpropietarios});


$http({
  method  : 'POST',
  url     : urls,
  data    :parametross , //this.formData,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
      alert(response); 
   var  url="http://localhost/acme/public/showU";
  var  parametros=$.param({'Usuariotipe':'2'})
$scope.data(url,parametros);  
       
  //formulariosave[0].reset();
           
}).error(function (response) {
           
  });


}



$scope.EliminarConductor=function(xidconductores){
var urls="http://localhost/acme/public/index.php/Deleteconductor";
var parametross=$.param({"id":xidconductores});


$http({
  method  : 'POST',
  url     : urls,
  data    :parametross , //this.formData,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
      alert(response); 
   var  url="http://localhost/acme/public/showU";
  var  parametros=$.param({'Usuariotipe':'1'})
$scope.data(url,parametros);  
       
  //formulariosave[0].reset();
           
}).error(function (response) {
           
  });




} 


$scope.eliminarPropietario=function(){
//Deletepropietario


}

$scope.InformeT=function(){

var url="http://localhost/acme/public/index.php/Informe"
$http({
  method  : 'GET',
  url     : url,
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
      //console.log(response);     
 $scope.Informe=response;
 
           
}).error(function (response) {
           //console.log(response)
  });

}


$scope.InformeT();
/*listar  autos*/
$scope.listarAutos=function(){

var url="http://localhost/acme/public/index.php/show"
$http({
  method  : 'GET',
  url     : url,
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
      //console.log(response);     
 $scope.Autos=response;
 
           
}).error(function (response) {
           //console.log(response)
  });

}

$scope.listarAutos();


$('#placa').on('input', function (e) {
    if (!/^[ a-z0-9áéíóúüñ]*$/i.test(this.value)) {
      alert('solo se permiten letras  y numeros ' )    
        this.value = this.value.replace(/[^ a-z0-9áéíóúüñ]+/ig,"");
    }

    
});

$('#color').on('input', function (e) {
   
    if (!/^[ a-záéíóúüñ]*$/i.test(this.value)) {
        alert(" solo se permiten letras ")
        this.value = this.value.replace(/[^ a-záéíóúüñ]+/ig,"");
    } 
});

$('#marca').on('input', function (e) {
   
    if (!/^[ a-záéíóúüñ]*$/i.test(this.value)) {
        alert(" solo se permiten letras ")
        this.value = this.value.replace(/[^ a-záéíóúüñ]+/ig,"");
    } 
});



$('#PrimerNombreP').on('input', function (e) {
   
    if (!/^[ a-záéíóúüñ]*$/i.test(this.value)) {
        alert(" solo se permiten letras ")
        this.value = this.value.replace(/[^ a-záéíóúüñ]+/ig,"");
    } 
});
$('#SegundoNombreP').on('input', function (e) {
   
    if (!/^[ a-záéíóúüñ]*$/i.test(this.value)) {
        alert(" solo se permiten letras ")
        this.value = this.value.replace(/[^ a-záéíóúüñ]+/ig,"");
    } 
});

$('#ApellidosP').on('input', function (e) {
   
    if (!/^[ a-záéíóúüñ]*$/i.test(this.value)) {
        alert(" solo se permiten letras ")
        this.value = this.value.replace(/[^ a-záéíóúüñ]+/ig,"");
    } 
});


$("#TelefonoP").on('input', function (e) {
   
    if (!/^[ 0-9]*$/i.test(this.value)) {
        alert(" solo se permiten numeros ")
        this.value = this.value.replace(/[^ 0-9]+/ig,"");
    } 
});

$("#NumerodecedulaC").on('input', function (e) {
   
    if (!/^[ 0-9]*$/i.test(this.value)) {
        alert(" solo se permiten numeros ")
        this.value = this.value.replace(/[^ 0-9]+/ig,"");
    } 
});


$('#PrimerNombreC').on('input', function (e) {
   
    if (!/^[ a-záéíóúüñ]*$/i.test(this.value)) {
        alert(" solo se permiten letras ")
        this.value = this.value.replace(/[^ a-záéíóúüñ]+/ig,"");
    } 
});
$('#SegundoNombreC').on('input', function (e) {
   
    if (!/^[ a-záéíóúüñ]*$/i.test(this.value)) {
        alert(" solo se permiten letras ")
        this.value = this.value.replace(/[^ a-záéíóúüñ]+/ig,"");
    } 
});

$('#ApellidosC').on('input', function (e) {
   
    if (!/^[ a-záéíóúüñ]*$/i.test(this.value)) {
        alert(" solo se permiten letras ")
        this.value = this.value.replace(/[^ a-záéíóúüñ]+/ig,"");
    } 
});


$("#TelefonoC").on('input', function (e) {
   
    if (!/^[ 0-9]*$/i.test(this.value)) {
        alert(" solo se permiten numeros ")
        this.value = this.value.replace(/[^ 0-9]+/ig,"");
    } 
});

$("#NumerodecedulaP").on('input', function (e) {
   
    if (!/^[ 0-9]*$/i.test(this.value)) {
        alert(" solo se permiten numeros ")
        this.value = this.value.replace(/[^ 0-9]+/ig,"");
    } 
});


$scope.Guardarvehiculo=function(){

 $( ".form-control" ).each(function( index ) {
 if($( this ).val()=="" ){
 alert('todos los campos son obligatorios')
 return  false
 }
});

 var formulariosave = $("#Vehiculos");
 var urlaction = formulariosave.attr('action');
  //console.log(urlaction);
 
$http({
  method  : 'POST',
  url     : urlaction,
  data    : formulariosave.serialize(), //this.formData,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
      alert(response);     
  formulariosave[0].reset();
  $scope.listarAutos();         
}).error(function (response) {
           
  });





}
$scope.ELiminar=function(Vehiculoidvehiculos){

 //alert(Vehiculoidvehiculos);
 var parametros=$.param({"id":Vehiculoidvehiculos})
 var url="http://localhost/acme/public/eliminar" 
$http({
  method  : 'POST',
  url     : url,
  data    :parametros , //this.formData,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
      alert(response); 
      $scope.listarAutos();    
  //formulariosave[0].reset();
           
}).error(function (response) {
           
  });




}

$scope.Editar=function(Vehiculoidvehiculos){


 var parametros=$.param({"id":Vehiculoidvehiculos})
 var url="http://localhost/acme/public/EditAutos" 
$http({
  method  : 'POST',
  url     : url,
  data    :parametros , //this.formData,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
   $(".blade-edit").html(response);     
  //formulariosave[0].reset();
    $("#myModal2").modal()       
}).error(function (response) {
           
  });




}





$scope.Updatevehiculo=function(){

var  parametros=$("#VehiculosUpdate").serialize();
var  url="http://localhost/acme/public/update"

 
$http({
  method  : 'POST',
  url     : url,
  data    :parametros , //this.formData,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
   alert(response)
   $scope.listarAutos();     
  //formulariosave[0].reset();
    //$("#myModal2").modal()       
}).error(function (response) {
           
  });

}


$scope.GuardarPropietario=function(){

if($('#PrimerNombreP').val()==""){
 alert('este campo es requerido')
 return  false;
}
if($('#SegundoNombreP').val()==""){

   alert('este campo es requerido')
return  false;
}

if($('#ApellidosP').val()==""){

   alert('este campo es requerido')
return  false;
}

if($("#TelefonoP").val()==""){

  alert('este  campo es requerido')
return  false;
}


if($("#Numerodecedulap").val()=""){

  alert('este  campo es requerido')
return  false;
}   



var  propietario=2;


var  parametross=$("#propietarios").serialize();
var  urls="http://localhost/acme/public/propietariosave"

 
$http({
  method  : 'POST',
  url     : urls,
  data    :parametross , //this.formData,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
        
  alert(response)
  var  url="http://localhost/acme/public/showU";
  var  parametros=$.param({'Usuariotipe':propietario})
$scope.data(url,parametros)
}).error(function (response) {
           
  });


}


});	
