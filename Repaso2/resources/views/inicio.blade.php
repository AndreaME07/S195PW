@extends('layouts.plantilla1')
@section('contenido')


<div class="container mt-4 p-5 m-5 rounded" style="background-color: rgb(220, 228, 245)">
  <div class="d-flex">
          <img src="{{ asset('images/it.jpg') }}" class="card-img-right" alt="ejemplo">
          <div class="px-5">
            <h3>¿Está Pennywise inspirado en el asesino John Wayne Gacy? La historia real de Stephen King y Pogo el payaso</h3>
            <p  style="text-align: justify;" class="card-text">Existe una amplia tradición, oral y escrita, que vincula a los payasos con el género de terror. Dice la teoría 
              que la unión de la figura del payaso, alegre y amistoso, con la imagen del asesino funciona bien en el género del terror, porque 
              produce una disonancia cognitiva que acrecienta la inquietud y, por ende, la tensión.
              Sin embargo, y a pesar de que la información se va diluyendo cada vez más entre lo que son puros rumores con el paso del tiempo, 
              esta conjunción del payaso con el asesino es muy anterior a Pennywise, y aun a John Wayne Gacy.
              
              ¿Por qué, entonces, está tan extendida la creencia de que Stephen King se inspiró en uno de los peores asesinos en serie de EE. UU. 
              para crear a su mítico payaso en la novela It? Bueno, los factores, las coincidencias que dieron origen a esta creencia son varios. 
              No se puede descartar que haya una relación, pero la realidad es un poco más compleja.</p>
            <a href="https://www.20minutos.es/noticia/5644351/0/esta-pennywise-inspirado-asesino-john-wayne-gacy-historia-real-stephen-king-pogo-payaso/" class="btn btn-outline-info"  target="_blank">Más información</a>
          </div>
        </div>  
    </div>

@endsection
     
