@include('header')
<br />
<br />
<table align="center" border="0">
    <td>
        <div class="reg">
            <br />
            <h2>&nbsp;&nbsp;&nbsp;Registro&nbsp;&nbsp;</h2>
            <p>
            <form action="guardartar" method="POST">
                            @csrf 
                <a>&nbsp;&nbsp;&nbsp;Numero del Tarjeta :&nbsp;&nbsp;</a><br />
                &nbsp;&nbsp;&nbsp;<input name="NumeroTar" type="text" placeholder="xxxx-xxxx-xxxx-9999" class="regis" border="3" />&nbsp;&nbsp;
            </p>
            <p>
                <a>&nbsp;&nbsp;&nbsp;Fecha de Vencimiento:&nbsp;&nbsp;</a><br />
                &nbsp;&nbsp;&nbsp;<input name="FecVen" type="text" placeholder="mm/aaaa" class="regis" border="3" />&nbsp;&nbsp;
            </p>
            <p>
                <a>&nbsp;&nbsp;&nbsp;Codigo del Seguridad:&nbsp;&nbsp;</a><br />
                &nbsp;&nbsp;&nbsp;<input name="CodSeg" type="text" placeholder="XXX" class="regis" border="3" />&nbsp;&nbsp;
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;<input type="checkbox">
                            <label>No tengo tarjeta </label>&nbsp;&nbsp;
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary">Terminar</button>
            </p>
            <br />
        </form>
        </div>
    </td>
</table>

@include('footer')
