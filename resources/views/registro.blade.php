@include('header')
<br />
<br />

<table align="center" border="0">
    <td>
        <div class="reg">
            <br />
            <h2>&nbsp;&nbsp;&nbsp;Registro&nbsp;&nbsp;</h2>
            <form action="guardarusu" method="POST">
                @csrf 
                 <p>
                    <a>&nbsp;&nbsp;&nbsp;Correo Electronico:&nbsp;&nbsp;</a><br />
                     &nbsp;&nbsp;&nbsp;<input name="correo" type="text" placeholder="Ingrese un correo electronico" class="regis" border="3" id="inputcorreo" />&nbsp;&nbsp;
                </p>
                <p>
                    <a>&nbsp;&nbsp;&nbsp;Contraseña:&nbsp;&nbsp;</a><br />
                    &nbsp;&nbsp;&nbsp;<input name="contraseña" type="text" placeholder="Ingrese una contraseña" class="regis" border="3" id="inputcontraseña" />&nbsp;&nbsp;
                </p>
                <p>
                    <a>&nbsp;&nbsp;&nbsp;Repita Contraseña:&nbsp;&nbsp;</a><br />
                    &nbsp;&nbsp;&nbsp;<input name="contraseña2" type="text" placeholder="Ingrese una contraseña" class="regis" border="3" />&nbsp;&nbsp;
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
