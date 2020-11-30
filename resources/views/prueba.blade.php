@extends('layouts.app')

@section('content')

<form name="f1">

<div class="row" id="select-categoria">
            <div class="col-12 col-md-6 mb-3 mb-md-3">
              <label for="categoria">Categorias</label>
              <select name=pais class="select" onchange="cambia_provincia()" >
                @foreach( \App\Models\Categoria::all() as $categoria)
                  <option value="{{$categoria->id}}" id="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-12 col-md-6 mb-md-3">
              <label for="descripcion">Sub categorias</label>
              <select name="provincia" class="select">
                  <option value="-">- 
              </select>
            </div>
          </div>
</form>


@endsection


@section('scriptJS')

<script type="text/javascript">

@foreach(\App\Models\Categoria::all() as $categoriaT)
    var provincias_{{$categoriaT->id}}=new Array(
      @foreach($categoriaT->subCategoria as $subCategoria)
      "{{$subCategoria->nombre}}",
      @endforeach
      )   
      
@endforeach


var todasProvincias = [
    [],
    @foreach(\App\Models\Categoria::all() as $categorias)
	provincias_{{$categorias->id}},
    @endforeach
    
];


function cambia_provincia(){ 
   	//tomo el valor del select del pais elegido 
   	var pais 
   	pais = document.f1.pais[document.f1.pais.selectedIndex].value 
   	//miro a ver si el pais está definido 
   	if (pais != 0) { 
      	//si estaba definido, entonces coloco las opciones de la provincia correspondiente. 
      	//selecciono el array de provincia adecuado 
      	mis_provincias=todasProvincias[pais] 
      	//calculo el numero de provincias 
      	num_provincias = mis_provincias.length 
      	//marco el número de provincias en el select 
      	document.f1.provincia.length = num_provincias 
      	//para cada provincia del array, la introduzco en el select 
      	for(i=0;i<num_provincias;i++){ 
         	document.f1.provincia.options[i].value=mis_provincias[i] 
         	document.f1.provincia.options[i].text=mis_provincias[i] 
      	}	
   	}else{ 
      	//si no había provincia seleccionada, elimino las provincias del select 
      	document.f1.provincia.length = 1 
      	//coloco un guión en la única opción que he dejado 
      	document.f1.provincia.options[0].value = "-" 
      	document.f1.provincia.options[0].text = "-" 
   	} 
   	//marco como seleccionada la opción primera de provincia 
   	document.f1.provincia.options[0].selected = true 
}

</script>
@endsection