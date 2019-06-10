  <script>
    $('#placa2').on('input', function (e) {
    if (!/^[ a-z0-9áéíóúüñ]*$/i.test(this.value)) {
      alert('solo se permiten letras  y numeros ' )    
        this.value = this.value.replace(/[^ a-z0-9áéíóúüñ]+/ig,"");
    }

    
});

$('#color2').on('input', function (e) {
   
    if (!/^[ a-záéíóúüñ]*$/i.test(this.value)) {
        alert(" solo se permiten letras ")
        this.value = this.value.replace(/[^ a-záéíóúüñ]+/ig,"");
    } 
});

$('#marca2').on('input', function (e) {
   
    if (!/^[ a-záéíóúüñ]*$/i.test(this.value)) {
        alert(" solo se permiten letras ")
        this.value = this.value.replace(/[^ a-záéíóúüñ]+/ig,"");
    } 
});


  </script>


  <form method="POST" id="VehiculosUpdate">
    <div class="form-group">
      <label for="email">placa:</label>
      <input type="text" class="form-control" id="placa2" placeholder="Enter placa" name="placa" value="{{$Autos->placa}}">
    </div>

    <input type="hidden" name="id"value="{{$Autos->idvehiculos}}">
    <div class="form-group">
      <label for="pwd">color:</label>
      <input type="text" class="form-control" id="color2" placeholder="Enter color" name="color" value="{{$Autos->color}}">
    </div>
    
    <div class="form-group">
      <label for="pwd">marca:</label>
      <input type="text" class="form-control" id="marca2" placeholder="Enter marca" name="Marca" value="{{$Autos->marca}}">
    </div>
     <div class="form-group">
      <label for="pwd">Tipovehiculo:</label>
      <select class=" form-control" name="Tipovehiculo">
       <option value="">Selecione</option> 
       @if($Autos->tipodevehiculo=="publico")  
       <option value="publico"selected>publico</option>
        <option value="privado">privado</option>
       @endif
       @if($Autos->tipodevehiculo=="privado")   
      <option value="privado"selected>privado</option>   
      <option value="publico">publico</option>
      @endif  
      </select>

    </div>

       </form>

