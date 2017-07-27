<?php
  session_start();
  if(isset($_SESSION['ide']))
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
    <link rel="stylesheet" href="../../assets/css/menustyles.css">

    <link rel="stylesheet" href="../../assets/css/footerstyle.css">
    <link rel="stylesheet" type="text/css" href="../../assets/slick/slick.css"/>
    <link rel="stylesheet" href="../../assets/aos-master/aos-master/dist/aos.css">
    <link rel="stylesheet" type="text/css" href="../../assets/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="../../assets/css/btnStyle.css"/>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../../assets/css/estiloWebHosting.css">


    <title>Web Hosting</title>
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
        <a class="logo" href="http://tekvia.com.mx/en_UK/"></a>
        <div class="contenedorOpciones">
          <div class="part1Opc1">ABOUT TEKVIA</div>
          <div class="dropdown part1Opc3">
            <a href="" class="" id="modalMoneda"><img src="../../resources/peso.jpg" id="moneda"></a>
            <div class="dropdowncontent" id="dropdownMoneda">
              <a href="#" id="usd">USD</a>
              <a href="#" id="mxn">MXN</a>
            </div>
          </div>
          <div class="dropdown part1Opc3">
              <img src="../../resources/UnitedKingdom.svg" width="25px" height="15px" id="idioma">
            <a href="" class="" id="modalIdioma">LANGUAGE</a>
            <div class="dropdowncontent" id="dropdownIdioma">
             <a href="#">
                <div class="opcionDrop">
                 <img src="../../resources/UnitedKingdom.svg"/>
                      <span>English</span>
              </div>
                </a>
                <a href="../../es_MX/WebHosting/">
              <div class="opcionDrop">
                 <img src="../../resources/Mexico.svg"/>
                      <span>Spanish</span>
              </div>
                </a>
            </div>
          </div>
          <a href="../login/" class="part1Opc2">PROFILE</a>

        </div>
      </div>
      <nav>
      <div class="headerPart2">

        <div class="contenedorNavegacion">
          <ul class="navegacion">
            <li>
              <a href="">DOMAINS</a>

              <ul class="navBarServicios">
                <div class="opciones">
                  <li class="opc">
                    <ul>
                      <li>
                        <a href="../registrarDominios/">
                        <span class="opcTitulo">
                          REGISTER YOUR DOMAIN
                        </span>
                        <br>
                        <span class="opcDesc">
                          MAKE REGISTRATION WITH THE BEST, ACCREDITED BY ICANN.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="../MxDominios/">
                        <span class="opcTitulo">
                          DOMAINS .COM .MX .NET
                        </span>
                        <br>
                        <span class="opcDesc">
                          REGISTER YOUR DOMAIN IN MEXICO AND DO NOT WORRY.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="../PuntoEdu/">
                        <span class="opcTitulo">
                          DOMAINS .EDU
                        </span>
                        <br>
                        <span class="opcDesc">
                          WE DO THE PROCESS FOR YOU, DO NOT EXPECT MORE REGISTER NOW.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="../tranferirDominio/">
                        <span class="opcTitulo">
                          TRANSFER YOUR DOMAIN
                        </span>
                        <br>
                        <span class="opcDesc">
                            TRUST IN US AND WINS TRANQUILITY.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="../buscarDominio/">
                        <span class="opcTitulo">
                          SEARCH DOMAIND
                        </span>
                        <br>
                        <span class="opcDesc">
                          CONSULT THE INFORMATION OF YOUR DOMAIN WITH THE TEKVIA TOOL.
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
                          ALL INCLUSIVE AND SAFE.
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
                          THE BEST SERVERS ALWAYS AT YOUR DISPOSAL.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          DEDICATED SERVERS
                        </span>
                        <br>
                        <span class="opcDesc">
                          THE MAXIMUM PERFORMANCE FOR YOUR PROJECT ON LINE.
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
                          IMPLEMENT DESIGNS OR TEMPLATES IF YOU ARE NOT A WEB EXPERT.
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
              <a href="">START YOUR WEB</a>

              <ul class="navBarServicios">
                <div class="opciones">
                  <li class="opc">
                    <ul>
                      <li>
                        HOST YOUR SITE ONLINE
                      </li>

                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          WEB HOSTING
                        </span>
                        <br>
                        <span class="opcDesc">
                          GET YOUR WEB SITE, STORAGE, APPLICATIONS AND MUCH MORE.
                        </span>
                        </a>

                      </li>
                      <li>
                        INCREASE YOUR ONLINE PRESENCE
                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          WORDPRESS HOSTING
                        </span>
                        <br>
                        <span class="opcDesc">
                            CREATE YOUR BUSINESS BLOG WITH THE BEST DESIGNS AND PLUGINS AND EASY TO MANAGE.
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
                          HAVE YOUR BUSINESS GET TO MORE USERS AND KEEP IT INFORMED FROM YOUR WEBSITE
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          CORPORATE EMAIL
                        </span>
                        <br>
                        <span class="opcDesc">
                          GIVE MORE PROFESSIONALISM TO YOUR COMPANY ,SAFETY AND SPEED IN YOUR EMAILS.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="../CertificadoSSL/">
                        <span class="opcTitulo">
                          SSL CERTIFICATES
                        </span>
                        <br>
                        <span class="opcDesc">
                          OFFER SECURITY TO YOUR CUSTOMERS THAT YOUR INFORMATION IS SAVED ON YOUR WEB SITE OR ONLINE STORE.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="../chat/">
                        <span class="opcTitulo">
                          CHAT ONLINE ATTENTION
                        </span>
                        <br>
                        <span class="opcDesc">
                          STAY CONNECTED TO YOUR CUSTOMERS.
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
              <a href="">PROFESSIONAL WEB</a>

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
                          GET YOUR WEB SITE, STORAGE, APPLICATIONS AND MUCH MORE.
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
                          HAVE YOUR BUSINESS GET TO MORE USERS AND KEEP IT INFORMED FROM YOUR WEBSITE.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="../chat/">
                        <span class="opcTitulo">
                          CHAT ONLINE ATTENTION
                        </span>
                        <br>
                        <span class="opcDesc">
                          STAY CONNECTED TO YOUR CUSTOMERS.
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
                          OFFER SECURITY TO YOUR CUSTOMERS THAT YOUR INFORMATION IS SAVED ON YOUR WEB SITE OR ONLINE STORE.
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
                          DEDICATED SERVERS
                        </span>
                        </a>

                      </li>

                      <li>
                        <a href="../CertificadoSSL/">
                        <span class="opcTitulo">
                          SSL CERTIFICATES
                        </span>
                        <br>
                        <span class="opcDesc">
                          OFFER SECURITY TO YOUR CUSTOMERS THAT YOUR INFORMATION IS SAVED ON YOUR WEB SITE OR ONLINE STORE.
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
                          GO INFO UWU
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
                          GO INFO UWU
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
                          TRANSMIT MUSIC, INTERVIEWS, CONFERENCES AND CONTENT IN AUDIO STREAMING.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                        DYNAMIC DNS
                        </span>
                        <br>
                        <span class="opcDesc">
                          GO INFO UWU
                        </span>
                        </a>

                      </li>

                    </ul>
                  </li>
                </div>
              </ul>
            </li>
            <li>
              <a href="">WEB DEVELOPMENT</a>

              <ul class="navBarServicios">
                <div class="opciones">
                  <li class="opc">
                    <ul>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          WEB PAGES DESIGN
                        </span>
                        <br>
                        <span class="opcDesc">
                          DEVELOP AND ADMINISTER YOUR WEB PAGE TEKVIA GIVES YOU THE BASIS AND DESIGN.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          CREATING ONLINE STORES
                        </span>
                        <br>
                        <span class="opcDesc">
                          START YOUR ONLINE STORE TODAY AND TAKE YOUR PRODUCT TO A SECOND LEVEL.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          WEB APPLICATIONS DEVELOPMENT
                        </span>
                        <br>
                        <span class="opcDesc">
                          WE HAVE THE DEVELOPMENT OF YOUR APPLICATION TO SUCCESS WITH OUR TEAM.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          WEB SECURITY
                        </span>
                        <br>
                        <span class="opcDesc">
                          TEKVIA GIVES YOU AND YOUR CUSTOMERS THE SAFETY OFFERING SAFE NAVIGATION.
                        </span>
                        </a>

                      </li>
                      <li>
                        <a href="">
                        <span class="opcTitulo">
                          DEVELOPMENT OF ADMINISTRATION SYSTEMS.
                        </span>
                        <br>
                        <span class="opcDesc">
                          ADMINISTRA YOUR BUSINESS, TEKVIA HELPS THE BEST ADMINISTRATION WITH A SOFTWARE.
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
      <section id="seccion1">
      <div class="fila1seccion1">
          <div class="shield">
            <p class="textI"> WEB HOSTING </p>
            <p class="textII"> THE BEST SOLUTION TO HOST YOUR WEB </p>
            <img src="../../resources/za-wardo.png" alt="">
            <p class="textIII"> WHAT YOU EXPECT TO HOST YOUR WEB WITH US </p>
            <button type="button" name="button"> BUY </button>
          </div>
      </div>
      </section>
      <section id="seccion2">
          <img src="../../resources/123i.png" alt="">
      </section>
      <section id="seccion2-1">
        <div class="info">
          <p> <a>REGISTER</a> BUY AND SECURE YOUR SPACE, OR <a>LOG IN</a> TO GO TO YOUR CUSTOMER AREA AND PURCHASE NOW </p>
        </div>
      </section>
      <section id="seccion3i">
        <button type="button" name="button"> BUY </button>
      </section>
      <section id="seccion4">
        <div class="columna1">
          <img src="../../resources/tekvia.png">
        </div>
        <div class="columna2">
          <div class="grid">
            <div class="box_a">
              <img src="../../resources/bag.png">
            </div>
            <div class="box_b">
              <p> MAKE YOUR CUSTOMERS </br> ARRIVE </br> TO YOUR SITE </p>
            </div>
            <div class="box_c">
              <p> CREATE YOUR STORE </br> ON LINE AND STAY  </br> WITH TEKVIA</p>
            </div>
            <div class="box_d">
              <img src="../../resources/carrito.png">
            </div>
            <div class="box_e">
              <img src="../../resources/bag2.png">
            </div>
            <div class="box_f">
              <p> SELL MORE, </br> ARRIVE TO MORE </br> CUSTOMERS WITH </br> WEB HOSTING </p>
            </div>
          </div>
        </div>
      </section>
      <section id="seccion4-1">
        <button type="button" style="button">BUY</button>
        <P> SUPPORT 24X7X365 DAYS YOUR SITE ALWAYS ONLINE</P>
      </section>
    </main>
    <footer>
        <section class="part1">
        <div class="part1i" data-aos="fade-right">
            <div class="newsletter">
            <div><img class="newsletteri" src="../../resources/cloud.png"></div><div class="newsletterd">Newsletter</div>
            </div>
            <div class="part12i">
                <div class="rayita"></div>
                Subscribe to receive news, special offers and invitations<br>to our exclusive events.
                <div class="rayita"></div><br>
                <form class="form">
                <input type="text" name="nombre" class="inputnwltter" placeholder=" Your Name."><br><br>
                <input type="mail" name="correo" class="inputnwltter" placeholder=" Your Email."><br><br>
                    <input type="submit" value="SEND" class="btnnwletter">
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
                    <p class="siguenos">Follow us on our social networks, and find out about our offers.</p>
                </div>
            </div>
        </section>
        <section class="part2">
            <div class="part2i" data-aos="zoom-in">
                <div class="txtpart2">
                <div class="titulopart2">The company</div><br>
                    <div class="txtpart2i"><div class="t2i1"><div class="onit">&#8226; About Tekvia<br></div><div class="onit">&#8226; Online store<br></div><div class="onit">&#8226; Support<br></div><div class="onit">&#8226; Client Panel<br></div><div class="onit">&#8226; Tekvia Jobs<br></div><div class="onit">&#8226; Privacy Policy<br></div></div><div class="t2i2"><div class="onit">&#8226; Tekvia Infrastructure<br></div><div class="onit">&#8226; supportcenter.mx<br></div><div class="onit">&#8226; Blog<br></div><div class="onit">&#8226; Address<br></div><div class="onit">&#8226; Quote Services<br></div><div class="onit">&#8226; Government Advising<br></div></div>
                    </div>
                </div>
            </div>
            <div class="part2d" data-aos="zoom-in">
                <div class="contelefonos">
                    <div class="telefonos1">Contact<br><b><i class="fa fa-phone phonet" aria-hidden="true"></i> PHONES</b></div>
                <div class="rayita2"></div>
                <div class="telefonos2">+52  33 15892616</div>
                <div class="telefonos2">+52 33 33922475</div>
                <div class="telefonos2">+52 33 10255178</div>
                <div class="rayita2"></div>
                </div>
            </div>
        </section>
        <section class="part3">
            <div class="part3ar" >
                <a href="#" class="txtpart3">HOSTING</a> <a href="#" class="txtpart3">DOMAINS </a><a href="#" class="txtpart3">START YOUR WEB </a><a href="#" class="txtpart3">PROFESSIONAL WEB </a><a href="#" class="txtpart3">WEB DEVELOPMENT </a><a href="#" class="txtpart3">LOGIN </a><a href="#" class="txtpart3">HELP</a>
            </div>
            <div class="part3ab">
                <a href="#" class="txtpart3"> REGISTER YOUR DOMAIN </a><a href="#" class="txtpart3">CLOUD HOSTING </a><a href="#" class="txtpart3">DATA PROTECTION </a><a href="#" class="txtpart3">ONLINE STORE </a><a href="#" class="txtpart3">SUPPORT CENTER</a>
            </div>
        </section>
        <section class="part4">
            <div class="part4f"><br>
            Copyright &#169; Tekvia 2017 All rights reserved.
            </div>
        </section>
    </footer>

  </body>
  <script type="text/javascript" src="../../assets/javascripts/menuscripts.js">
  </script>
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
    $("img#idioma").attr("src", "../resources/UnitedKingdom.svg");
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
