<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <!-- META -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="keywords" content="" />
      <meta name="author" content="" />
      <meta name="robots" content="" />
      <meta name="description" content="" />
      <!-- FAVICONS ICON -->
      <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>/public/tema/images/favicon.png" />
      <!-- PAGE TITLE HERE -->
      <title>Pelo &amp; Pele Cosméticos</title>
      <!-- MOBILE SPECIFIC -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <!-- BOOTSTRAP -->
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>/public/tema/css/bootstrap.min.css">
      <!-- FONTAWESOME -->
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>/public/tema/css/fontawesome/css/font-awesome.min.css" />
      <!-- FLATICON -->
      <!-- ANIMATE --> 
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>/public/tema/css/animate.min.css">
      <!-- OWL CAROUSEL -->
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>/public/tema/css/owl.carousel.min.css">
      <!-- BOOTSTRAP SELECT BOX -->
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>/public/tema/css/bootstrap-select.min.css">
      <!-- MAGNIFIC POPUP -->
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>/public/tema/css/magnific-popup.min.css">
      <!-- LOADER -->
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>/public/tema/css/loader.min.css">
      <!-- MAIN -->
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>/public/tema/css/style.css">
      <!-- THEME COLOR CHANGE -->
      <link rel="stylesheet" class="skin" type="text/css" href="<?=base_url()?>/public/tema/css/skin/skin-1.css">
      <!-- SIDE SWITCHER -->
      <!-- <link rel="stylesheet" type="text/css" href="<?=base_url()?>/public/tema/css/switcher.css"> -->
      <!-- REVOLUTION SLIDER CSS -->
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>/public/tema/plugins/revolution/revolution/css/settings.css">
      <!-- REVOLUTION NAVIGATION STYLE -->
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>/public/tema/plugins/revolution/revolution/css/navigation.css">
      <!-- GOOGLE FONTS -->
      <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat|Poppins">
      <!-- CUSTOM -->
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>/public/tema/css/custom.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>/public/tema/fonts/font/flaticon.css">
      <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
   </head>
   <body id="bg">
      <style type="text/css">
        #bemvindo{
          background-image:url(<?=base_url()?>/public/tema/images/background/bg-1.png)!important;
        }
        #ofertaespecial{
          background-image:url(<?=base_url()?>/public/tema/images/background/banner1.jpg); padding-top: 40px; padding-bottom: 350px!important;
        }
        #depoimentos{
          background-image:url(<?=base_url()?>/public/tema/images/background/bg-6.jpg)!important;
        }
        #breadcrumb{
          background-image:url(<?=base_url()?>/public/tema/images/banner/about-banner.jpg)!important;
        }
     </style>
      <div class="page-wraper">
         <!--// Header \\-->
         <?=$header?>
         <!--// Content \\-->
         <?=$template?>
         <!--// Footer \\-->
         <?=$footer?>
      </div>
      <script type="text/javascript" src="<?=base_url()?>/public/tema/js/mapa-representantes.js"></script>
      <script type="text/javascript">
         $(".button").on("click",function(){
            var id = $(this).attr('id');
            console.log(id);
            $('.display').hide();
            $('.'+id).show();
         });
      </script>
      <!-- JQUERY.MIN JS -->
      <script type="text/javascript"  src="<?=base_url()?>/public/tema/js/jquery-1.12.4.min.js"></script>
      <!-- BOOTSTRAP.MIN JS -->
      <script type="text/javascript"  src="<?=base_url()?>/public/tema/js/bootstrap.min.js"></script>
      <!-- FORM JS -->
      <script type="text/javascript"  src="<?=base_url()?>/public/tema/js/bootstrap-select.min.js"></script>
      <!-- FORM JS -->
      <script type="text/javascript"  src="<?=base_url()?>/public/tema/js/jquery.bootstrap-touchspin.min.js"></script>
      <!-- MAGNIFIC-POPUP JS -->
      <script type="text/javascript"  src="<?=base_url()?>/public/tema/js/magnific-popup.min.js"></script>
      <!-- WAYPOINTS JS -->
      <script type="text/javascript"  src="<?=base_url()?>/public/tema/js/waypoints.min.js"></script>
      <!-- COUNTERUP JS -->
      <script type="text/javascript"  src="<?=base_url()?>/public/tema/js/counterup.min.js"></script>
      <!-- COUNTERUP JS -->
      <script type="text/javascript"  src="<?=base_url()?>/public/tema/js/waypoints-sticky.min.js"></script>
      <!-- MASONRY  -->
      <script type="text/javascript"  src="<?=base_url()?>/public/tema/js/isotope.pkgd.min.js"></script>
      <!-- OWL  SLIDER  -->
      <script type="text/javascript"  src="<?=base_url()?>/public/tema/js/owl.carousel.min.js"></script>
      <!-- PARALLAX BG IMAGE   --> 
      <script type="text/javascript"  src="<?=base_url()?>/public/tema/js/stellar.min.js"></script>
      <!-- ON SCROLL CONTENT ANIMTE   -->
      <script type="text/javascript"  src="<?=base_url()?>/public/tema/js/scrolla.min.js"></script>
      <!-- CUSTOM FUCTIONS  -->
      <script type="text/javascript"  src="<?=base_url()?>/public/tema/js/custom.js"></script>
      <!-- SHORTCODE FUCTIONS  -->
      <script type="text/javascript"  src="<?=base_url()?>/public/tema/js/shortcode.js"></script>
      <!-- SWITCHER FUCTIONS  -->
      <script type="text/javascript"  src="<?=base_url()?>/public/tema/js/switcher.js"></script>
      <!-- REVOLUTION JS FILES -->
      <script type="text/javascript" src="<?=base_url()?>/public/tema/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
      <script type="text/javascript" src="<?=base_url()?>/public/tema/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
      <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->  
      <script type="text/javascript" src="<?=base_url()?>/public/tema/plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>
      <!-- REVOLUTION SLIDER FUNCTION  ===== -->
      <script type="text/javascript"  src="<?=base_url()?>/public/tema/js/rev-script-1.js"></script>
      <!-- GOOGLE MAP -->
      <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyAm-mlSwDscHV5q_MuS0g9g9IEApI-yg8s&amp;callback=initMap"  type="text/javascript"></script>
      <script type="text/javascript"  src="<?=base_url()?>/public/tema/js/map.script.js"></script>
      <script>
         $(document).ready(function() {
           var sync1 = $("#sync1");
           var sync2 = $("#sync2");
           var slidesPerPage = 5; //definir globalmente o número de elementos por página
           var syncedSecondary = true;
         
              sync1.owlCarousel({
                items : 1,
                slideSpeed : 2000,
                nav: true,
                autoplay: false,
                dots: false,
                loop: true,
                responsiveRefreshRate : 200,
                navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
              }).on('changed.owl.carousel', syncPosition);
         
              sync2
                .on('initialized.owl.carousel', function () {
                  sync2.find(".owl-item").eq(0).addClass("current");
                })
                .owlCarousel({
                items : slidesPerPage,
                dots: false,
                nav: false,
                margin:5,
                smartSpeed: 200,
                slideSpeed : 500,
                slideBy: slidesPerPage, //alternativamente, você pode deslizar por 1, desta forma, o slide ativo vai ficar com o primeiro item no segundo carrossel
                responsiveRefreshRate : 100
              }).on('changed.owl.carousel', syncPosition2);
         
           function syncPosition(el) {
             //se você definir o loop como false, você precisará restaurar essa próxima linha
             //var current = el.item.index;
             
             //se você desabilitar o loop você tem que comentar este bloco
             var count = el.item.count-1;
             var current = Math.round(el.item.index - (el.item.count/2) - .5);
             
             if(current < 0) {
               current = count;
             }
             if(current > count) {
               current = 0;
             }
             //end block
             sync2
               .find(".owl-item")
               .removeClass("current")
               .eq(current)
               .addClass("current");
             var onscreen = sync2.find('.owl-item.active').length - 1;
             var start = sync2.find('.owl-item.active').first().index();
             var end = sync2.find('.owl-item.active').last().index();
             
             if (current > end) {
               sync2.data('owl.carousel').to(current, 100, true);
             }
             if (current < start) {
               sync2.data('owl.carousel').to(current - onscreen, 100, true);
             }
           }
           
           function syncPosition2(el) {
             if(syncedSecondary) {
               var number = el.item.index;
               sync1.data('owl.carousel').to(number, 100, true);
             }
           }
           
           sync2.on("click", ".owl-item", function(e){
             e.preventDefault();
             var number = $(this).index();
             sync1.data('owl.carousel').to(number, 300, true);
           });
         });
      </script>
   </body>
</html>