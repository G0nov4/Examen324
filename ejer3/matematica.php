
<?php
    session_start();
    $user=$_SESSION['username'];
    if($user == null || $user == ''){
        echo '<h2>Usted no es un usuario registrado</h2>';
        die();
    }
    else{
        include ('header.php');
        echo "Hola, un gusto verte ",$user;
    
    }
?>
<!DOCTYPE html>
<html lang="en" style="background: black
">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>WEB fcpn</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

 

  <!-- ***** Header Area Start ***** -->
  	<?php
  		include 'header.php';
  	?>
  <!-- ***** Header Area End ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/umsa-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
  
              <h2>Matematica</h2>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
    <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-01.png" alt="">
              </div>
              <div class="down-content">
                <h4>Mision</h4>
                <p>La Carrera de Matem??tica de la UMSA, posee un nivel acad??mico de excelencia, forma profesionales e investigadores, comprometidos con la sociedad y sus necesidades; orientados a la creaci??n de conocimientos mediante los enfoques de la Matem??tica pura y aplicada, que respondan a los retos cient??ficos y tecnol??gicos de la sociedad, enfatizando en la formaci??n integral orientada al desarrollo y la creaci??n de conocimientos matem??ticos en las ??reas de la Matem??tica Pura y Aplicada, para lograr la transformaci??n del pa??s con responsabilidad social y contribuyendo a su desarrollo sostenible.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Vision</h4>
                <p>Ser la Carrera l??der a nivel nacional que forme egresados competitivos o cualificados con calidad acad??mica, para ser aceptados en el mercado laboral; con docentes de excelente nivel acad??mico, planes y programas de estudio vigentes dise??ados bajo est??ndares internacionales, para desarrollar aptitudes y habilidades matem??ticas aportando al progreso cient??fico y tecnol??gico en el marco de la ??tica profesional, la superaci??n individual y colectiva para el progreso educativo del pa??s.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>OBJETIVOS</h4>
                <p>Tomar la responsabilidad del desarrollo de la ciencia matem??tica en el pa??s, dentro los c??nones universales intr??nsecos de esta ciencia.
Desarrollar capacidades y habilidades de an??lisis y pensamiento l??gico y riguroso a trav??s de la matem??tica.
Adquirir la capacidad de utilizar conocimientos matem??ticos te??ricos y pr??cticos, en la definici??n de problemas y la b??squeda de soluciones en contextos acad??micos o empresariales.
Preparar para posteriores estudios especializados, en disciplinas propias de la Matem??tica o de cualquier ciencia que requiera conocimientos matem??ticos.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>OFERTA ACAD??MICA</h4>
                <p>El grado de Licenciado en Matem??tica y Licenciado en Matem??tica Aplicada cualifica para la formulaci??n, an??lisis, resoluci??n y tratamiento de problemas matem??ticos en diversos campos de la ciencia y la tecnolog??a, con vistas a satisfacer la demanda de sectores involucrados en la producci??n e implementaci??n de conocimiento cient??fico y tecnol??gico para el desarrollo del pa??s.</p>
              </div>
            </div>            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area Start ***** -->
  

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>

</body>

</body>
</html>