@include('header')
<h1 style="text-align:center">Categoria:Frutales</h1>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="{{ asset('img/manzano.jpg') }}" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Manzano Arbol</h2>
        <p>Arbol de frutos mas comun
          <br />
          como sub nombre lo dice su fruto es la manzana 
          </p>
        <p>precio: $200.00</p>
        <p><button class="button"><a href="{{ url('/ver_producto') }}">Ver producto</a></button></p>
      </div>
    </div>
  </div>


@include('footer')