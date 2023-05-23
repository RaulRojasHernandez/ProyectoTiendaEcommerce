@include('header')
<br />
<br />
<table align="center" border="0">
    <td>
        <div class="reg">
            <br />
            <h2>&nbsp;&nbsp;&nbsp;Registro&nbsp;&nbsp;</h2>

            <table>
                <td>
                    <p>
                    <a>&nbsp;&nbsp;&nbsp;Estado:&nbsp;&nbsp;</a><br />

                        <form action="guardaubi" method="POST">
                            @csrf 

                                &nbsp;&nbsp;&nbsp;<select name="estado">
                                                <option value="Estado de Mexico" selected>Estado de México</option>
                                                <option value="Elija" selected>Elija un Estado</option>
                                           </select>&nbsp;&nbsp;
                            </p>
                            <p>
                                <a>&nbsp;&nbsp;&nbsp;Municipio:&nbsp;&nbsp;</a><br />
                                &nbsp;&nbsp;&nbsp;<select name="municipio">
                                                <option value="Toluca" selected>Toluca</option>
                                                <option value="Metepec" selected>Metepec</option>
                                                <option value="Lerma" selected>Lerma</option>
                                                <option value="Elija" selected>Elija un Municipio</option>
                                           </select>&nbsp;&nbsp;
                            </p>
                            <p>
                                <a>&nbsp;&nbsp;&nbsp;Delegacion:&nbsp;&nbsp;</a><br />
                                &nbsp;&nbsp;&nbsp;<input name="delegacion" type="text" placeholder="Ingrese su Delegacion" class="regis" border="3" />&nbsp;&nbsp;
                            </p>
                            <p>
                                <a>&nbsp;&nbsp;&nbsp;Calle:&nbsp;&nbsp;</a><br />
                                &nbsp;&nbsp;&nbsp;<input name="calle" type="text" placeholder="Ingrese su calle" class="regis" border="3" />&nbsp;&nbsp;
                            </p>
                 </td>
                 <td>
                    <p>
                         <a>&nbsp;&nbsp;&nbsp;No. Exterior:&nbsp;&nbsp;</a><br />
                         &nbsp;&nbsp;&nbsp;<input name="exterior" type="number" placeholder="Ingrese el numero Exterior" class="regis" border="3" />&nbsp;&nbsp;
                    </p>
                    <p>
                         <a>&nbsp;&nbsp;&nbsp;No. Interior:&nbsp;&nbsp;</a><br />
                         &nbsp;&nbsp;&nbsp;<input name="interior" type="number" placeholder="Ingrese el numero Interior" class="regis" border="3" />&nbsp;&nbsp;
                    </p>
                     <p>
                         <a>&nbsp;&nbsp;&nbsp;Descripción:&nbsp;&nbsp;</a><br />
                         &nbsp;&nbsp;&nbsp;<textarea name="descripcion" name="textarea" rows="5" cols="40" placeholder="Descripción del domicilio"></textarea>&nbsp;&nbsp;
                    </p>
                </td>
            </table>
            <p>
                &nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary">Continuar</button>
            </p>
            <br />
            
            </form>
        </div>
    </td>
</table>

@include('footer')
