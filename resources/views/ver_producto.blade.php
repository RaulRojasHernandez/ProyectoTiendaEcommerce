@include('header')

<table border="0" align="center">
    <br />
    <br />
    <br />
    <br />
    <br />      
   <td>
       <img name="img" src="{{ asset('img/manzano.jpg') }}" alt="Jane" style="width:100%" />
   </td>
    <td>&nbsp;&nbsp;</td>
    <td>
        <h2 name="productoname">Manzano Arbol</h2>
        <p>
            Arbol de frutos mas comun
            <br />
            como sub nombre lo dice su fruto es la manzana
        </p>
        <p>precio: $200.00</p>

        <form method="POST" action="addcarrito">
                @csrf 
        <table border="0">
            <td><input type="text" class="cant"
                    placeholder="1"
                name="prod" value="Manzano" /></td>
            <td>&nbsp;&nbsp;</td>
                <td><button type="submint" class="button">Añadir al carrito </button></td>
            </form>
        </table>
    </td>

</table>


@include('footer')
