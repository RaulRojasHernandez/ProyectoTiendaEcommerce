@include('header')

<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <img src="{{ asset('img/descuentos.png') }}" style="width:100%" />
    </div>

    <div class="mySlides fade">
        <img src="{{ asset('img/todotipo.png') }}" style="width:100%" />
    </div>

    <div class="mySlides fade">
        <img src="{{ asset('img/welcome.png') }}" style="width:100%" />
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br />

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>




<h2 style="text-align:center">Productos destacados</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="{{ asset('img/roble.jpg') }}" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Roble Comun Arbol</h2>
        <p>Arbol mas comun del todo del planeta
          <br />
          puede llegar a los 40m del altura
          </p>
        <p>precio: $150.00</p>
        <p><button class="button">Ver producto</button></p>
      </div>
    </div>
  </div>


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

  <div class="row">
  <div class="column">
    <div class="card">
      <img src="{{ asset('img/Jacaranda.jpg') }}" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jacaranda Arbol</h2>
        <p>Arbol content un color del hojas llamativo de color
          <br />
          Violeta, tambien conocida commo gualanday
          </p>
        <p>precio: $180.00</p>
        <p><button class="button">Ver producto</button></p>
      </div>
    </div>
  </div>
  





    
@include('footer')
