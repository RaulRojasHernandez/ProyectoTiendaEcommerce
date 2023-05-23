@include('header')
<br />
<br />
<table align="center" border="0">
    <td>
        <div class="reg">
            <br />
            <h2>&nbsp;&nbsp;&nbsp;Registro&nbsp;&nbsp;</h2>
            <p>
            <form action="guardardat" method="POST">
                @csrf 
                    <a>&nbsp;&nbsp;&nbsp;Nombre:&nbsp;&nbsp;</a><br />
                    &nbsp;&nbsp;&nbsp;<input name="nombre" type="text" placeholder="Ingrese su Nombre" class="regis" border="3" id="inputnombre"/>&nbsp;&nbsp;
                </p>
                <p>
                    <a>&nbsp;&nbsp;&nbsp;Apellido Paterno:&nbsp;&nbsp;</a><br />
                    &nbsp;&nbsp;&nbsp;<input name="apepat" type="text" placeholder="Ingrese su apellido paterno" class="regis" border="3" id="inputapepat"/>&nbsp;&nbsp;
                </p>
                <p>
                    <a>&nbsp;&nbsp;&nbsp;Apellido Materno:&nbsp;&nbsp;</a><br />
                    &nbsp;&nbsp;&nbsp;<input name="apemat" type="text" placeholder="Ingrese su apellido materno" class="regis" border="3" id="inputapemat"/>&nbsp;&nbsp;
                </p>
                <p>
                    <a>&nbsp;&nbsp;&nbsp;Edad:&nbsp;&nbsp;</a><br />
                    &nbsp;&nbsp;&nbsp;<input name="edad" type="number" placeholder="Ingresa tu Edad" class="regis" border="3" id="inputedad"/>&nbsp;&nbsp;
                </p>
                <p>
                    &nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary">Continuar</button>
                </p>
                <br />
            </form>
        </div>
    </td>
</table>

@include('footer')
