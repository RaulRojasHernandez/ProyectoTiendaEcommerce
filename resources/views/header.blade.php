<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Cabecera fija</title>

    <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/carrucel.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/producto.css') }}" />
	<script src="{{ asset('js/carrucel.js') }}"></script>
    <script src="https://kit.fontawesome.com/f9989d90a2.js" crossorigin="anonymous"></script>
</head>

<body>
	
	<header id="main-header" >
		
        <a id="logo-header" href="{{ url('/home') }}">
            <span class="site-name">Arboles y Plantas</span>

        </a> <!-- / #logo-header -->

        <a>
		
		</a>



		<nav>
			<ul>
                
				<li>
					<form action="#">
                        <input type="text" class="busq"
                            placeholder="Buscar producto"
                            name="search" />
                        <button class="bbusq">
                            <i class="fa fa-search"
                                style="font-size: 18px;"></i>
                        </button>
					</form>

				</li>
                <li><a href="#">contactanos</a></li>
                <li><a href="#">Categorias</a>
                    <ul>
                        <li><a href="{{ url('/plantas') }}">plantas</a></li>
						<br />
						<li><a href="{{ url('/flores') }}">flores</a></li>
						<br />
						<li><a href="{{ url('/arbustos') }}">arbustos</a></li>
						<br />
						<li><a href="{{ url('/frutos') }}">frutales</a></li>
                    </ul>
                </li>
				<li><a href="{{ asset('/registro') }}">Iniciar sesion</a></li>
				<li><a href="{{ url('/carrito') }}">carrito </a></li>
			</ul>
		</nav><!-- / nav -->


	</header><!-- / #main-header -->
