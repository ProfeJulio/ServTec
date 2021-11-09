<header>
  <div class="contenedor">
    <div class="banner">
      <table>
        <tr>
          <td width="198"><a href="/ServTec/"><img src="/ServTec/imagen/bit2.png" alt="BIT Soluciones Informáticas"></a></td>
          <td width="914" align="right">
            <!-- LOGIN DE ACCESO A USUARIO -->
            <form id="form1" name="form1" method="post" action="/ServTec/interna/procesar_usuario.php">
              <table width="217">
                <tr>
                  <td width="88" class="login" align="right"><label>Usuario:</label></td>
                  <td width="63">
                    <input name="usuario" size="5" type="text" id="usuario" maxlength="15" />
                  </td>
                  <td width="52" rowspan="2">
                    <a href="#" onClick="ingresar();" onMouseOver="image1.src='/ServTec/imagen/ingresar2.png';" onMouseOut="image1.src='/ServTec/imagen/ingresar1.png';">
                    <img name="image1" src="/ServTec/imagen/ingresar1.png" border="0"></a>
                  </td>
                </tr>
                <tr>
                  <td class="login" align="right"><label>Clave:</label></td>
                  <td><input name="clave" type="password" id="clave" maxlength="15" size="5"/></td>
                </tr>
              </table>
            </form>
          </td>
        </tr>
      </table>
    </div>
    <nav class="menu">
      <ul>
        <li><a href="/PagServTecProfesor/">Inicio</a></li>
        <li><a href="/PagServTecProfesor/interna/servicios.php">Servicios</a></li>
        <li><a href="/PagServTecProfesor/interna/proyectos.php">Proyectos</a></li>
        <li><a href="/PagServTecProfesor/interna/nosotros.php">Nosotros</a></li>
        <li><a href="/PagServTecProfesor/interna/contacto.php">Contacto</a></li>
      </ul>
    </nav>
  </div>
</header>
