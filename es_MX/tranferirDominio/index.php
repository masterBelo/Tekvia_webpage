
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
    <script type="text/javascript" src="../../assets/javascripts/jquery.min.js"></script>
    <script type="text/javascript" src="../../assets/javascripts/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="../../assets/css/estilosInicio.css">
    <link rel="stylesheet" href="../../assets/css/tranferirDominio.css">
    <link rel="stylesheet" href="../../assets/css/menustyles.css">

    <link rel="stylesheet" href="../../assets/css/footerstyle.css">
    <link rel="stylesheet" type="text/css" href="../../assets/slick/slick.css"/>
    <link rel="stylesheet" href="../../assets/aos-master/aos-master/dist/aos.css">
    <link rel="stylesheet" type="text/css" href="../../assets/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="../../assets/css/btnStyle.css"/>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css"/>


    <title>Transferir dominio</title>
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
        <a class="logo" href="http://tekvia.com.mx/es_MX/"></a>
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
             <a href="../../en_UK/tranferirDominio/">
                <div class="opcionDrop">
                 <img src="../../resources/UnitedKingdom.svg"/>
                      <span>Ingles</span>
              </div>
                </a>
                <a href="#">
              <div class="opcionDrop">
                 <img src="../../resources/Mexico.svg"/>
                      <span>Español</span>
              </div>
                </a>
            </div>
          </div>
          <a href="../login/" class="part1Opc2">PANEL</a>

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
                      <!--  <img src="../../resources/descarga.jpg"> -->

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
                    <!--  <img src="../../resources/cloudhosting.jpeg"> -->

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
                      <!--  <img src="../../resources/descarga.jpg"> -->

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
    <main>
      <section class="contenidoInicio">
          <div class="transferirDominio">
              <div class="transferirDominio1">
                  <div class="transferirDominioTxt">
                      Transfiere tu dominio ahora<br>obtén una mensualidad gratis, no esperes más<br>
                      <div class="tranferirDominioInput">
                      <form action="#" method="post">
                          <input class="tranferirDominioInputD" placeholder="  ¿Que dominio tienes?"><div class="fa fa-search tranferirDominioInputI" aria-hidden="true"></div>
                      </form>
                      </div>
                  </div>
                  <div class="transferirDominioBtnArea">
                  <form action="#" method="post">
                      <button class="btn" >AYUDA</button>
                      </form>
                  </div>
              </div>
              <div class="transferirDominio2">
                  <img class="transferirDominioImg" src="../../resources/g5160.png">
              </div>
          </div>
          <div class="transferirDominioAyuda">
              <p class="transferirDominioAyuda1">¿Necesitas Asesoria?</p>
              <p class="transferirDominioAyuda2">ó</p>
              <p class="transferirDominioAyuda3">Llama ahora (33) 1586 2616</p>
          </div>
          <div class="transferirDominio3">
              <div class="transferirDominio31">
                  <div class="transferirDominio3P21">
                      <div class="transferirDominio3P211">
                      <p class="tD22">SIEMPRE <font class="comoelmarazul">INFORMADO</font></p>
                      <p>Con tekvia mantente informado en tiempo real, con nuestra área de clientes, pagos, renovaciones, información de tus servicios, ayuda tekvia, y mantén la administración de tu sitio en la palma<br>de tu mano.</p>
                      </div>
                  </div>
                  <div class="transferirDominio3P22">
                      <div class="transferirDominio3P221">
                      <p class="tD22">¿POR QUE <font class="comoelmarazul">CAMBIARTE</font> A TEKVIA?</p>
                      <p>Cambiarte con nosotros será tu mejor opción ya que todos nuestros
                          Servidores se encuentran en la región, además contamos con alta,
                          Tecnología de monitoreo simultaneo donde tu servicio alojado esta en las
                          Mejores manos y con calidad en el servicio.</p>
                      </div>
                  </div>
                  <div class="transferirDominio3P23">
                      <div class="transferirDominio3P241">
                        <p class="tD22">HAZLO <font class="comoelmarazul">TU</font> MISMO CON TEKVIA</p>
                        <p>No necesitas ayuda de profesionales con tekvia, hazlo tu mismo pero claro si tienes problemas, contacta a un experto y con gusto te ayudaremos.</p>
                      </div>
                  </div>
                  <div class="transferirDominio3P24">
                      <div class="transferirDominio3P231">
                        <p class="tD22">SIEMPRE <font class="comoelmarazul">PRESENTE</font> CON TEKVIA</p>
                        <p>Deja que tu marcar tenga presencia en internet somos los mejores con soporte 24x7 365 días del año, nodejes que tu clientes<br>dejen de buscarte, tenemos el mejor plan a tu medida.</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>

    </main>
    <footer>
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

  </body>
  <script type="text/javascript" src="../../assets/javascripts/menuscripts.js"></script>
  <script type="text/javascript" src="../../assets/slick/slick.min.js"></script>
  <script type="text/javascript" src="../../assets/javascripts/slideJava.js"></script>
  <script type="text/javascript" src="../../assets/aos-master/aos-master/dist/aos.js"></script>
  <script>
    AOS.init({
      once:true,
      duration:1000,
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
    $("#mxn").click(function(){
    $("img#moneda").attr("src", "../../resources/peso.jpg");
    });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
    $("#usd").click(function(){
    $("img#moneda").attr("src", "../../resources/dolar.jpg");
    });
    });
    </script>
</html>
