@include('header')

<table border="0" align="center">
    <br />
    <br />
    <br />
    <br />
    <br />      
   <td>
       <img name="img" src="{{ asset('img/lavanda.jpg') }}" alt="Jane" style="width:100%" />
   </td>
    <td>&nbsp;&nbsp;</td>
    <td>
        <h2 name="productoname">Lavanda Planta</h2>
        <p>
        Tiene un olor intenso que se puede usar en perfumes
            <br />
            es util para ahuyentar insectos
        </p>
        <p>precio: $150.00</p>

        <form method="POST" action="addcarrito">
                @csrf 
        <table border="0">
            <td><input type="text" class="cant"
                    placeholder="1"
                name="prod" value="Lavanda" /></td>
            <td>&nbsp;&nbsp;</td>
                <td><button type="submint" class="button">Añadir al carrito </button></td>
            </form>
        </table>
    </td>

</table>


@include('footer')