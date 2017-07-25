
<?php
  session_start();
  $usuario = $_SESSION['ide'];
?>

<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../assets/javascripts/jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src="../../assets/javascripts/progressbar.js"></script>
    <script type="text/javascript" src="../../assets/javascripts/cargaPantalla.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="../../assets/css/estilosInicio.css">
    <link rel="stylesheet" href="../../assets/css/menustyles.css">
    <link rel="stylesheet" href="../../assets/css/styleedu.css">  
    <link rel="stylesheet" href="../../assets/css/footerstyle.css">
    <link rel="stylesheet" href="../../assets/aos-master/aos-master/dist/aos.css">
    <link rel="stylesheet" href="../../assets/css/sweetalert2.css">
   




    <title>Formulario Edu</title>
  </head>
  <div id="preloader">
    <div id="container">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 308 296.8" xml:space="preserve">

        <path id="heart-path" fill-opacity="0" stroke-width="3" stroke="#3661a1" d="M65.2,66.7C68.3,54.9,70,44.5,73.7,35C83.5,9.9,108-1.9,134.6,5.1
          c13.3,3.5,22.8,12.1,27.7,24.2c2.8,6.9,6.8,8.6,13.7,8.3c9.7-0.4,19.4-0.1,29.1-0.1c43.9,0,75.8,24.5,86.3,66.2
          c12.5,49.8-16.6,99.7-66.1,112.4c-19.2,4.9-38.4,2.8-57.3-2.4c-4.7-1.3-9.5-2.4-15.2-3.8c-11.2,25.3-9.1,51.5-9.3,79.9
          c-9.9-16-14.3-30.8-15.9-46.9c-1.4-15.1-4.2-30.1-6.5-45.1c-1.2-7.7-5.5-9.7-13-6.4c-41.1,18.1-86.8-5.2-94.3-48.5
          c-1.7-10-2.1-20.7-0.6-30.8c3.6-23.7,18.6-38,43-43.2C59.7,68.2,63.1,67.3,65.2,66.7z"/>
      </svg>
    </div>
  </div>
  <body>


     <header>
      <div class="headerPart1">
        <a class="logo" href="http://c0260330.ferozo.com/TekviaV2/"></a>
        <div class="contenedorOpciones">
          <div class="part1Opc1">SOBRE TEKVIA</div>
          <div class="dropdown part1Opc3">
            <a href="" class="" id="modalMoneda"><img src="../../resources/peso.jpg" id="moneda"></a>
            <div class="dropdowncontent" id="dropdownMoneda">
              <a href="#" id="usd">USD</a>
              <a href="#" id="mxn">MXN</a>
            </div>
          </div>

          <div class="dropdown part1Opc3">
              <img src="../../resources/Mexico.svg" width="25px" height="15px" id="idioma">
            <a href="" class="" id="modalIdioma">IDIOMA</a>
            <div class="dropdowncontent" id="dropdownIdioma">
             <a href="../../en_UK/formularioedu/">
                <div class="opcionDrop">
                 <img src="../../resources/UnitedKingdom.svg"/>
                      <span>Ingles</span>
              </div>
                </a>
                <a href="../es_MX/">
              <div class="opcionDrop">
                 <img src="../../resources/Mexico.svg"/>
                      <span>Español</span>
              </div>
                </a>
            </div>
          </div>
          <?php
          if(empty($usuario)){
          ?>
           <?php
			include("conection.php");
			mysqli_query($conexion,$insertar0);     
            $insertar0 = "select * from links where nombre='login'";
            $consulta=mysqli_query($conexion,$insertar0); 
            while ($row=mysqli_fetch_array($consulta)) 
            {
            $login=$row['link'];
            }
			?>
          <a href="<?php echo $login; ?>" target="_top" class="part1Opc2">ENTRAR</a>
          <a href="<?php echo $login; ?>" target="_top" class="part1Opc2">REGISTRAR</a>
          <?php
          }else{
          ?>
          <a href="" class="part1Opc2">PERFIL</a>
          <?php
          }
          ?>
        </div>
      </div>
      <nav>
      <div class="headerPart2">
        <div class="contenedorNavegacion">
          <ul class="navegacion">
            <li>
              <a href="">DOMINIOS</a>

              <ul class="navBarServicios">
                <div class="opciones">
                  <li class="opc">
                    <ul>
                      <li>
                        <a href="../registrarDominios/">
                        <span class="opcTitulo">
                          REGISTRA TU DOMINIO
                        </span>
                        <br>
                        <span class="opcDesc">
                          HAZ EL REGISTRO CON LOS MEJORES, ACREDITADO POR ICANN.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="../MxDominios/">
                        <span class="opcTitulo">
                          DOMINIOS .COM .MX .NET
                        </span>
                        <br>
                        <span class="opcDesc">
                          REGISTRA TU DOMINIO EN MEXICO SIN COMPLICARTE.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="../PuntoEdu/">
                        <span class="opcTitulo">
                          DOMINIOS .EDU
                        </span>
                        <br>
                        <span class="opcDesc">
                          HACEMOS EL TRAMITE POR TI, NO ESPERES MAS REGISTRA AHORA.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="../tranferirDominio/">
                        <span class="opcTitulo">
                          TRANSFIERE TU DOMINIO
                        </span>
                        <br>
                        <span class="opcDesc">
                          DEJALO EN LAS MEJORES MANOS Y GANA TRANQUILIDAD.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="../buscarDominio/">
                        <span class="opcTitulo">
                          BUSCAR DOMINIO
                        </span>
                        <br>
                        <span class="opcDesc">
                          CONSULTA LA INFORMACION DE TU DOMINIO CON LA HERRAMIENTA DE TEKVIA.
                        </span>
                        </a>

                      </li>
                    </ul>
                  </li>
                  <li class="opc">
                    <ul>
                      <li>
                        <img src="../../resources/descarga.jpg">

                      </li>

                    </ul>
                  </li>
                </div>
              </ul>
            </li>
            <li>
              <a href="">WEB HOSTING</a>

              <ul class="navBarServicios">
                <div class="opciones">
                  <li class="opc">
                    <ul>
                      <li>
                        <a href="../WebHosting/">
                        <span class="opcTitulo">
                          WEB HOSTING
                        </span>
                        <br>
                        <span class="opcDesc">
                          TODO INCLUIDO Y SEGURO.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="../CloudHosting/">
                        <span class="opcTitulo">
                          CLOUD HOSTING
                        </span>
                        <br>
                        <span class="opcDesc">
                          LOS MEJORES SERVIDORES SIEMPRE A TU DISPOSICION.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          SERVIDORES DEDICADOS
                        </span>
                        <br>
                        <span class="opcDesc">
                          EL MAXIMO RENDIMIENTO PARA TU PROYECTO EN LINEA.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          WORDPRESS HOSTING
                        </span>
                        <br>
                        <span class="opcDesc">
                          IMPLEMENTA DISEÑOS O PLANTILLAS SI NO ERES UN EXPERTO WEB.
                        </span>
                        </a>

                      </li>

                    </ul>
                  </li>
                  <li class="opc">
                    <ul>
                      <li>
                        <img src="../../resources/cloudhosting.jpeg">

                      </li>

                    </ul>
                  </li>
                </div>
              </ul>
            </li>
            <li>
              <a href="">INICIA TU WEB</a>

              <ul class="navBarServicios">
                <div class="opciones">
                  <li class="opc">
                    <ul>
                      <li>
                        HOSPEDA TU SITIO EN LINEA
                      </li>

                      <li>
                        <a href="../WebHosting/">
                        <span class="opcTitulo">
                          WEB HOSTING
                        </span>
                        <br>
                        <span class="opcDesc">
                          OBTEN TU SITIO WEB, ALMACENAMIENTO, APLICACIONES Y MUCHO MAS.
                        </span>
                        </a>

                      </li>
                      <li>
                        AUMENTA TU PRESENCIA ONLINE
                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          WORDPRESS HOSTING
                        </span>
                        <br>
                        <span class="opcDesc">
                          CREA TU BLOG EMPRESARIAL CON LOS MEJORES DISEÑOS Y PLUGINS Y FACIL DE ADMINISTRAR.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          EMAIL MARKETING
                        </span>
                        <br>
                        <span class="opcDesc">
                          HAS QUE TU NEGOCIO LLEGUE A MAS USUARIOS Y MANTENERLOS INFORMADOS DE TU SITIO WEB.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          EMAIL CORPORATIVO
                        </span>
                        <br>
                        <span class="opcDesc">
                          DALE MAS PROFESIONALIDAD A TU EMPRESA ,SEGURIDAD Y RAPIDEZ EN TUS EMAILS.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="../CertificadoSSL/">
                        <span class="opcTitulo">
                          CERTIFICADOS SSL
                        </span>
                        <br>
                        <span class="opcDesc">
                          OFRECE SEGURIDAD A TUS CLIENTES DE QUE SU INFORMACION ESTA A SALVO EN TU SITIO WEB O TIENDA ONLINE.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="../chat/">
                        <span class="opcTitulo">
                          CHAT ATENCION ONLINE
                        </span>
                        <br>
                        <span class="opcDesc">
                          MANTENTE CONECTADO CON TUS CLIENTES.
                        </span>
                        </a>

                      </li>

                    </ul>
                  </li>
                  <li class="opc">
                    <ul>
                      <li>
                        <img src="../../resources/descarga.jpg">

                      </li>

                    </ul>
                  </li>
                </div>
              </ul>
            </li>
            <li>
              <a href="">WEB PROFESIONAL</a>

              <ul class="navBarServicios">
                <div class="opciones">
                  <li class="opc">
                    <ul>
                      <li>
                        <a href="../WebHosting/">
                        <span class="opcTitulo">
                          WEB HOSTING
                        </span>
                        <br>
                        <span class="opcDesc">
                          OBTEN TU SITIO WEB, ALMACENAMIENTO, APLICACIONES Y MUCHO MAS.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          EMAIL MARKETING
                        </span>
                        <br>
                        <span class="opcDesc">
                          HAS QUE TU NEGOCIO LLEGUE A MAS USUARIOS Y MANTENERLOS INFORMADOS DE TU SITIO WEB.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="../chat/">
                        <span class="opcTitulo">
                          CHAT ATENCION ONLINE
                        </span>
                        <br>
                        <span class="opcDesc">
                          MANTENTE CONECTADO CON TUS CLIENTES.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          HOSTED EXCHANGE
                        </span>
                        <br>
                        <span class="opcDesc">
                          OFRECE SEGURIDAD A TUS CLIENTES DE QUE SU INFORMACION ESTA A SALVO EN TU SITIO WEB O TIENDA ONLINE.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          SERVIDORES DEDICADOS
                        </span>
                        <br>
                        <span class="opcDesc">
                          EL MAXIMO RENDIMIENTO PARA TU PROYECTO EN LINEA.
                        </span>
                        </a>

                      </li>

                      <li>
                        <a href="../CertificadoSSL/">
                        <span class="opcTitulo">
                          CERTIFICADOS SSL
                        </span>
                        <br>
                        <span class="opcDesc">
                          OFRECE SEGURIDAD A TUS CLIENTES DE QUE SU INFORMACION ESTA A SALVO EN TU SITIO WEB O TIENDA ONLINE.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          SSD CLOUD SERVERS (VPN)
                        </span>
                        <br>
                        <span class="opcDesc">
                          PASA LA INFO UWU
                        </span>
                        </a>

                      </li>


                    </ul>
                  </li>
                  <li class="opc">
                    <ul>
                      <li>
                        <a href="../CDN/">
                        <span class="opcTitulo">
                          CDN
                        </span>
                        <br>
                        <span class="opcDesc">
                          PASA LA INFO UWU
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          STREAMING AUDIO
                        </span>
                        <br>
                        <span class="opcDesc">
                          TRANSMITE MUSICA, ENTREVISTAS ,CONFERENCIAS Y CONTENIDO EN AUDIO STREAMING.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          DNS DINAMICO
                        </span>
                        <br>
                        <span class="opcDesc">
                          PASA LA INFO UWU
                        </span>
                        </a>

                      </li>

                    </ul>
                  </li>
                </div>
              </ul>
            </li>
            <li>
              <a href="">DESARROLLO WEB</a>

              <ul class="navBarServicios">
                <div class="opciones">
                  <li class="opc">
                    <ul>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          DISEÑO DE PAGINAS WEB
                        </span>
                        <br>
                        <span class="opcDesc">
                          DESARROLLA Y ADMINISTRA TU PAGINA WEB TEKVIA TE DA LAS BASES Y EL DISEÑO.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          CREACION DE TIENDAS EN LINEA
                        </span>
                        <br>
                        <span class="opcDesc">
                          INICIA TU TIENDA EN LINEA HOY MISMO Y LLEVA TU PRODUCTO A UN SEGUNDO NIVEL.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          DESARROLLO DE APLICACIONES WEB
                        </span>
                        <br>
                        <span class="opcDesc">
                          LLEVAMOS EL DESARROLLO DE TU APLICACION AL EXITO CON NUESTRO EQUIPO.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          SEGURIDAD WEB
                        </span>
                        <br>
                        <span class="opcDesc">
                          TEKVIA TE DA SEGURIDAD A TI Y A TUS CLIENTES OFRECIENDO UNA NAVEGACION SEGURA.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          DESARROLLO DE SISTEMAS DE ADMINISTRACION
                        </span>
                        <br>
                        <span class="opcDesc">
                          ASMINISTRA TU NEGOCIO, TEKVIA AYUDA A LA MEJOR ADMINISTRACION CON UN SOFTWARE.
                        </span>
                        </a>

                      </li>



                    </ul>
                  </li>
                  <li class="opc">
                    <ul>


                    </ul>
                  </li>
                </div>
              </ul>
            </li>

          </ul>
          <div class="iconoCarro">
            <div class="icono1">
              <i class="fa fa-search" aria-hidden="true"></i>
            </div>
            <div class="icono2">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
          </div>

        </div>

        <div class="menuIcono" id="menuIcono">
          <div class="menuContenedorIcono" id="menuContenedorIcono" onclick="toggleMenu(this)">
            <div class="lineaMenuIcono1"></div>
            <div class="lineaMenuIcono2"></div>
            <div class="lineaMenuIcono3"></div>
          </div>
          <div class="iconosCarro">

          </div>
        </div>
      </div>
      </nav>
    </header>
    <div class="headerMovil">
      <div class="menuMovilContenedor">
        <div class="iconoMenuMovil">
          <div class="lineaMenuMovilCerrada">

          </div>
          <div class="lineaMenuMovilCerrada">

          </div>
          <div class="lineaMenuMovilCerrada">

          </div>
        </div>
        <div class="logoMenuMovil">

        </div>
        <div class="carritoMenuMovil">

        </div>
      </div>
    </div>
      <div class="formulariosection">
    <main>
        <div class="formularioedu" data-aos="zoom-in">
         <section class="hojita"></section>
        <section class="formulario">
            <form id="fo3" action="enviar.php" method="post" enctype="multipart/form-data" name="fo3">
            <div class="titulo" data-aos="fade-rigth">
                <p class="titulog">Formulario de registro .edu</p>
                <p class="tituloc">por favor llena el formulario de registro</p>
                </div><p class="titulob">(* Campos obligatorios)</p>
            <section class="inputtext" data-aos="fade-rigth">
            <div class="inputtexti">
                *Nombre de la institución: <input class="inputt" type="text" name="nombreInstitucion" autocomplete="off" required><br><br>
                *RFC: <input class="inputt" type="text" name="rfcInstitucion" autocomplete="off" required><br><br>
                *Dirección de la institución: <input class="inputt" type="text" name="direccionInstitucion" autocomplete="off" required><br><br>
                No. int: <input class="inputtc" type="text" name="noIntInstitucion" autocomplete="off"> *No. ext: <input class="inputtc" type="text" name="noExtInstitucion" onkeypress="return justNumbers(event);" autocomplete="off" required><br><br>
                *CP: <input class="inputtc" type="text" name="cpInstitucion" maxlength="5" onkeypress="return justNumbers(event);" autocomplete="off" required> *Colonia/Localidad: <input class="inputt" type="text" name="coloniaInstitucion" autocomplete="off" required><br><br>
                *Estado: <select class="inputts" name="estadoInstitucion" autocomplete="off">
                <option value="0"></option>
                <option value="Aguascalientes">Aguascalientes</option>
                <option value="Baja California">Baja California</option>
                <option value="Baja California Sur">Baja California Sur</option>
                <option value="Campeche">Campeche</option>
                <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                <option value="Colima">Colima</option>
                <option value="Chiapas">Chiapas</option>
                <option value="Chihuahua">Chihuahua</option>
                <option value="Ciudad de México">Ciudad de México</option>
                <option value="Durango">Durango</option>
                <option value="Guanajuato">Guanajuato</option>
                <option value="Guerrero">Guerrero</option>
                <option value="Hidalgo">Hidalgo</option>
                <option value="Jalisco">Jalisco</option>
                <option value="Mexico">México</option>
                <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
                <option value="Morelos">Morelos</option>
                <option value="Nayarit">Nayarit</option>
                <option value="Nuevo León">Nuevo León</option>
                <option value="Oaxaca">Oaxaca</option>
                <option value="Puebla">Puebla</option>
                <option value="Querétaro">Querétaro</option>
                <option value="Quintana Roo">Quintana Roo</option>
                <option value="San Luis Potosi">San Luis Potosí</option>
                <option value="Sinaloa">Sinaloa</option>
                <option value="Sonora">Sonora</option>
                <option value="Tabasco">Tabasco</option>
                <option value="Tamaulipas">Tamaulipas</option>
                <option value="Tlaxcala">Tlaxcala</option>
                <option value="Veracruz">Veracruz</option>
                <option value="Yucatan">Yucatán</option>
                <option value="Zacatecas">Zacatecas</option>
                </select> *Ciudad/Municipio: <input class="inputt" type="text" name="municipioInstitucion" autocomplete="off" required><br><br><br>
                *Comprobante de domicilio (recibo de luz, recibo de agua, recibo telefonico, predial)<br>
                <input type="file" name="comprobanteInstitucion" id="comprobanteInstitucion" class="inputfile" autocomplete="off" required />
                <label for="comprobanteInstitucion" class="lh">SELECCIONAR ARCHIVO</label>
                </div>
                <div class="setevelaraya"></div>
                <div class="inputtextd">
                *Nombre del represante legal:<br>
                <input class="inputtr" type="text" name="nombreRP" autocomplete="off" required><br><br>
                *Dirección del representantel legal:<br>
                <input class="inputtr" type="text" name="direccionRP" autocomplete="off" required><br><br>
                <div class="mitadRP">
                    <div class="mitadRP1">
                    *CURP:<br>
                    <input class="inputtr2" type="text" name="curpRP" autocomplete="off" required><br><br>
                    *Estado:<br>
                    <input class="inputtr2" type="text" name="estadoRP" autocomplete="off" required><br><br>
                    *Teléfono:<br>
                    <input class="inputtr2" type="tel" name="telRP" maxlength="10" onkeypress="return justNumbers(event);" autocomplete="off" required><br>  <br> 
                    </div>
                    <div class="mitadRP2">
                    *Colonia/Localidad:<br>
                    <input class="inputtr2" type="text" name="coloniaRP" autocomplete="off" required><br><br>
                    *Ciudad/Municipio:<br>
                    <input class="inputtr2" type="text" name="municipioRP" autocomplete="off" required><br><br>
                    Celular:<br>
                    <input class="inputtr2" type="tel" name="celRP" maxlength="10" onkeypress="return justNumbers(event);" autocomplete="off"><br><br>
                    </div>
                    </div><br><br><br><br><br><br><br>
                    *Correo:<br>
                    <input class="inputtr2" type="email" name="correoRP" autocomplete="off" required><br><br> 
                </div>
            </section>
               <section class="inputarchivos">
                   <div class="tituloabajo" data-aos="fade-left">
                   *por favor sube los siguientes documentos<br>(formato PDF)
                   </div>
                   <div class="archivos" data-aos="fade-left">
                    *Cedula de registro del RFC vigente<br>
                    <input type="file" name="cedulaRfcAR" id="cedulaRfcAR" class="inputfile" autocomplete="off" required/>
                <label for="cedulaRfcAR" class="lh">SELECCIONAR ARCHIVO</label><br><br><br>
                    *Cedula de autorización ante la SEP, CONACYT o centro educativo por el estado Méxicano<br>
                       <input type="file" name="cedulaAutorizacionAR" id="cedulaAutorizacionAR" class="inputfile" autocomplete="off" required />
                <label for="cedulaAutorizacionAR" class="lh">SELECCIONAR ARCHIVO</label><br><br><br>
                    *Registro SEP o CONACYT<br>
                       <input type="file" name="registroAR" id="registroAR" class="inputfile" autocomplete="off" required />
                <label for="registroAR" class="lh">SELECCIONAR ARCHIVO</label><br><br><br>
                    *Copia del periodico o diario oficial que lo acredite<br>
                       <input type="file" name="copiaAcreditaAR" id="copiaAcreditaAR"class="inputfile" autocomplete="off" required />
                <label for="copiaAcreditaAR" class="lh">SELECCIONAR ARCHIVO</label><br><br><br>
                    *Copia de identificacion vigente del representante legal<br>
                       <input type="file" name="copiaRPAR" id="copiaRPAR" class="inputfile" autocomplete="off" required />
                <label for="copiaRPAR" class="lh">SELECCIONAR ARCHIVO</label><br><br><br>
                    <div class="mitadRP">
                        <div class="mitadRP1">
                    *Carta membretada de la institución<br>
                            <input type="file" name="cartaMembretadaAR" id="cartaMembretadaAR" class="inputfile" autocomplete="off" required />
                <label for="cartaMembretadaAR" class="lh">SELECCIONAR ARCHIVO</label><br><br><br>
                            *Carta poder ante notario<br>
                            <input type="file" name="cartaPoderAR" id="cartaPoderAR" class="inputfile" autocomplete="off" required />
                <label for="cartaPoderAR" class="lh">SELECCIONAR ARCHIVO</label><br><br><br>
                        </div>
                        <div class="mitadRP2">
                            <a href="#"> <div class="botoncitoverde">AYUDA</div> </a>
                        </div>
                       </div>
                   </div>
    </section>
                <div class="final">
                    <div class="finaly" data-aos="zoom-in">
                    <input type="submit" value="ENVIAR" class="finalbtn">
                        <div class="finaltxt">En breve respoderemos tu solicitud y sera notificado en tu<br>panel de control <a href="#"><font class="verde">inicia sesion</font></a> para ver el avance</div>
                    </div><div id="result"></div>
                </div>
            </form>
        </section>
        </div>
    </main>
          <div class="espacioblanco"></div>
    <footer class="footeredu">
        <section class="part1">
        <div class="part1i" data-aos="fade-right">
            <div class="newsletter">
                <div class="newsletteri"><img src="../../resources/cloud.png"></div><div class="newsletterd">Newsletter</div>
            </div>
            <div class="part12i">
                <div class="rayita"></div>
                Suscribete para recibir novedades, ofertas especiales e invitaciones a<br>nuestros eventos exclusivos.
                <div class="rayita"></div><br>
                <form class="form">
                <input type="text" name="nombre" class="inputnwltter" placeholder=" Tu Nombre."><br><br>
                <input type="mail" name="correo" class="inputnwltter" placeholder=" Tu Correo."><br><br>
                    <input type="submit" value="ENVIAR" class="btnnwletter">
                </form>
            </div>
            </div>
            <div class="part1d" data-aos="fade-left">
                <div class="part12d">
                    <div class="redes">
                        <div class="redesmv">
                            <div class="redesmvl"><a href="#"><div class="circulitoazul"><i class="fa fa-facebook adentrillo" aria-hidden="true"></i></div></a><a href="#"><div class="circulitoazul"> <i class="fa fa-twitter adentrillo" aria-hidden="true"></i></div></a><a href="#"><div class="circulitoazul"><i class="fa fa-google adentrillo" aria-hidden="true"></i></div></a><a href="#"><div class="circulitoazul"><i class="fa fa-instagram adentrillo" aria-hidden="true"></i></div></a></div>
                        </div>
                    </div>
                    <p class="siguenos">Siguenos en nuestras redes sociales, y enterate de nuestras ofertas.</p>
                </div>
            </div>
        </section>
        <section class="part2">
            <div class="part2i" data-aos="zoom-in">
                <div class="txtpart2">
                <div class="titulopart2">La Empresa</div><br>
                    <div class="txtpart2i"><div class="t2i1"><div class="onit">&#8226; Sobre Tekvia<br></div><div class="onit">&#8226; Tienda en linea<br></div><div class="onit">&#8226; Soporte<br></div><div class="onit">&#8226; Panel del Cliente<br></div><div class="onit">&#8226; Bolsa de Trabajo Tekvia<br></div><div class="onit">&#8226; Politica de Privacidad<br></div></div><div class="t2i2"><div class="onit">&#8226; Infrestructura de Tekvia<br></div><div class="onit">&#8226; supportcenter.mx<br></div><div class="onit">&#8226; Blog<br></div><div class="onit">&#8226; Dirección<br></div><div class="onit">&#8226; Cotizar Servicios<br></div><div class="onit">&#8226; Asesoria Gobierno<br></div></div>
                    </div>
                </div>
            </div>
            <div class="part2d" data-aos="zoom-in">
                <div class="contelefonos">
                    <div class="telefonos1">Teléfonos para<br><b><i class="fa fa-phone phonet" aria-hidden="true"></i> CONTACTO</b></div>
                <div class="rayita2"></div>
                <div class="telefonos2">+52 33 15892616</div>
                <div class="rayita2"></div>
                </div>
            </div>
        </section>
        <section class="part3">
            <div class="part3ar" >
                <a href="#" class="txtpart3">HOSTING</a> <a href="#" class="txtpart3">DOMINIOS </a><a href="#" class="txtpart3">INICIA TU WEB </a><a href="#" class="txtpart3">WEB PROFESIONAL </a><a href="#" class="txtpart3">DESARROLLO WEB </a><a href="#" class="txtpart3">LOGIN </a><a href="#" class="txtpart3">AYUDA</a>
            </div>
            <div class="part3ab">
                <a href="#" class="txtpart3"> REGISTRA TU DOMINIO </a><a href="#" class="txtpart3">CLOUD HOSTING </a><a href="#" class="txtpart3">PROTECCIÓN DE DATOS </a><a href="#" class="txtpart3">TIENDA EN LINEA </a><a href="#" class="txtpart3">SUPPORT CENTER</a>
            </div>
        </section>
        <section class="part4">
            <div class="part4f"><br>
            Copyright &#169; Tekvia 2017 Todos los derechos reservados.
            </div>
        </section>
    </footer>
      </div>
  </body>
  <script type="text/javascript" src="../../assets/javascripts/menuscripts.js"></script>
  <script type="text/javascript" src="../../assets/slick/slick.min.js"></script>
  <script type="text/javascript" src="../../assets/javascripts/slideJava.js"></script>
  <script type="text/javascript" src="../../assets/aos-master/aos-master/dist/aos.js"></script>
  <script type="text/javascript" src="../../assets/javascripts/sweetalert2.js"></script>
  <script type="text/javascript" src="../../assets/javascripts/formularioedujs.js"></script>
  <script type="text/javascript" src="../../assets/javascripts/jquery-3.2.0.min.js"></script>    
  <script> 
    AOS.init({
      once:true,
      duration:1000,
    });
  </script>
    <script>
        function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
         
        return /\d/.test(String.fromCharCode(keynum));
        }
        </script>
    <script src="jquery-1.3.min.js" language="javascript"></script>
    
    
    <script>
    $('#form, #fat, #fo3').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize('formData'),
 
            success: function(data) {
                $('#result').html(data);
            }
        })        
        return false;
    }); 
        </script>
    
    <script type="text/javascript">
    $(document).ready(function() {
    $("#mexicoEsp").click(function(){
    $("img#idioma").attr("src", "../../resources/Mexico.svg");
    });
    });
    </script>
    
    <script type="text/javascript">
    $(document).ready(function() {
    $("#unitedEng").click(function(){
    $("img#idioma").attr("src", "../../resources/UnitedKingdom.svg");
    });
    });
    </script>
<script type="text/javascript">
    $(document).ready(function() {
    $("#mexicoEsp").click(function(){
    $("img#idioma").attr("src", "../../resources/Mexico.svg");
    });
    });
    </script>
    
    <script type="text/javascript">
    $(document).ready(function() {
    $("#unitedEng").click(function(){
    $("img#idioma").attr("src", "../../resources/UnitedKingdom.svg");
    });
    });
    </script>
    
</html>
