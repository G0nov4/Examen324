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
  
              <h2>Estadistica</h2>
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
                <p>Formar profesionales id??neos y competentes en el campo de la estad??stica, capaces de resolver problemas de forma creativa, innovadora y ??tica con la utilizaci??n de la tecnolog??a, los conocimientos cient??ficos y comprometidos con el desarrollo sostenible del pa??s.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Vision</h4>
                <p>La Carrera de Estad??stica es L??der en la formaci??n de profesionales en la ciencia de la estad??stica, buscando la excelencia acad??mica a trav??s del desarrollo de la docencia, investigaci??n y extensi??n. Capacitados para impulsar el desarrollo del pa??s con conocimiento de la realidad nacional, dotados de recursos cient??ficos, informativos y t??cnicos al servicio de la poblaci??n.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>OBJETIVOS</h4>
                <p>Formar profesionales id??neos y competentes en el campo de la estad??stica, capaces de generar y difundir conocimiento cient??fico, con pensamiento reflexivo-cr??tico, innovador y creativo, de apoyo a los procesos de toma de decisiones, comprometidos con el desarrollo sostenible del pa??s.
Desarrollar y difundir la ciencia, la tecnolog??a y la cultura en general dentro y fuera de la carrera de Estad??stica.
Desarrollar el proceso acad??mico del profesional Estad??stico, integrando la teor??a y la pr??ctica, as?? como la ense??anza- aprendizaje la producci??n, la innovaci??n y la investigaci??n.
</p>
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