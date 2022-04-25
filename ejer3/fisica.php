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
  
              <h2>Fisica</h2>
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
                <p>La carrera de Física tiene como misión propia y fundamental la de formar y entrenar recursos humanos de alto nivel, especializados en la investigación científica, la docencia y la aplicación de conocimientos en todas las áreas de la Física; crear y difundir conocimiento en física o relacionado con la física, formando y contribuyendo para la formación de profesionales críticos, independientes y capacitados tanto a nivel de pregrado como de posgrado. Estos profesionales deberán ser capaces de contribuir al desarrollo científico y tecnológico, y como consecuencia, al mejoramiento de las condiciones sociales y económicas del País.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Vision</h4>
                <p>SLa visión de la Carrera es la de constituirse en un centro de excelencia en Física con capacidades plenas para entrar competitivamente en el ámbito científico a nivel regional y mundial.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>OBJETIVOS</h4>
                <p>Constituirse en un centro de excelencia en el ámbito de su particular disciplina.
Formar investigadores profesionales en Física con sólidos conocimientos teóricos y experimentales en los fundamentos de las principales áreas de esta ciencia.
Desarrollar docencia universitaria, investigación científica, interacción social y ofrecer servicios académicos y técnicos para posibilitar y contribuir al desarrollo tecnológico y al incremento de la cultura científica de la región y del país.
Ofrecer un plan de estudios racional, integral y flexible, capaz de incorporar progresivamente niveles de posgrado disciplinarios.
</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>OFERTA ACADÉMICA</h4>
                <p>El grado de Licenciado en Matemática y Licenciado en Matemática Aplicada cualifica para la formulación, análisis, resolución y tratamiento de problemas matemáticos en diversos campos de la ciencia y la tecnología, con vistas a satisfacer la demanda de sectores involucrados en la producción e implementación de conocimiento científico y tecnológico para el desarrollo del país.</p>
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