@include('header')
<h1 style="text-align:center">Categoria:Plantas</h1>
<form action="{{ url('/ver_producto2') }}">
<div class="row">
  <div class="column">
    <div class="card">
      <img src="{{ asset('img/lavanda.jpg') }}" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Lavanda Planta</h2>
        <p>Tiene un olor intenso que se puede usar en perfumes
          <br />
          es util para ahuyentar insectos
          </p>
        <p>precio: $150.00</p>
        <p><button class="button">Ver producto</button></p>
      </div>
    </div>
  </div>
</form>


@include('footer')