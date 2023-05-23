@include('header')

<h1>Carrito</h1>
<div class="reg">
    <table align="center" border="0">
        <td></td>
        <td>&nbsp;&nbsp;</td>
        <td>&nbsp;&nbsp;</td>
        <td>&nbsp;Producto&nbsp;</td>
        <td>&nbsp;&nbsp;</td>
        <td>&nbsp;&nbsp;Precio&nbsp;&nbsp;</td>
        <td>&nbsp;&nbsp;Cantidad&nbsp;&nbsp;</td>

        <tr>
            <td>
                &nbsp;&nbsp;<i class="fa-sharp fa-regular fa-circle-xmark fa-xl" style="color: #0a8a13;">&nbsp;&nbsp;</i>
            </td>
            <td></td>
            <td>
                &nbsp;&nbsp;<img src="{{ asset('img/Jacaranda.jpg') }}" alt="Jane" style="width:100%" />&nbsp;&nbsp;
            </td>
            <td>
                &nbsp;&nbsp;<h2>Jacaranda</h2>&nbsp;&nbsp;
            </td>
            <td></td>
            <td>
                &nbsp;&nbsp;<h3>$180.00</h3>&nbsp;&nbsp;
            </td>
            <td>
                &nbsp;&nbsp;<input type="text" contenteditable="false" placeholder="1" class="cant" />
            </td>
        </tr>

        <tr>
            <td>
                &nbsp;&nbsp;<i class="fa-sharp fa-regular fa-circle-xmark fa-xl" style="color: #0a8a13;">&nbsp;&nbsp;</i>
            </td>
            <td></td>
            <td>
                &nbsp;&nbsp;<img src="{{ asset('img/Manzano.jpg') }}" alt="Jane" style="width:100%" />&nbsp;&nbsp;
            </td>
            <td>
                &nbsp;&nbsp;<h2>Manzano</h2>&nbsp;&nbsp;
            </td>
            <td></td>
            <td>
                &nbsp;&nbsp;<h3>$200.00</h3>&nbsp;&nbsp;
            </td>
            <td>
                &nbsp;&nbsp;<input type="text" contenteditable="false" placeholder="1" class="cant" />
            </td>
        </tr>

    </table>
</div>

<table align="center" border="0">
    <td>
        <p>
            <br />
            <button>
                <a href="{{ url('/iniciesesion') }}">Finalizar compra</a>
            </button>
        </p>
    </td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>Subtotal: $380.00</td>

</table>




@include('footer')
