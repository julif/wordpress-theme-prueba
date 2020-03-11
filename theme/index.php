<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog de Prueba</title> 
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script><!-- --- Jquery --- --> 



  <!-- css -->
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css" type="text/css" media="screen" /><!-- hoja de estilos pricipal -->



   <!-- banner -->
   <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/banner.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/banner_animation.css"> 
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/banner_responsive.css">  
    <script src="<?php bloginfo('template_url')?>/parallax/jarallax.min.js"></script>
 
 
</head>
<body>


  <?php get_header() ?> 
  <style>
  nav{    position: absolute;
    z-index: 9000;
    background-color: transparent;}
</style>
  
  <style>
    #julif-logo {
    animation-delay: 0.50s;
}
banner{
  height: 100vh;
   width: 100%; 
   background-color: #334158;
   display: flex;
   justify-content: center;
    align-items: center;
    overflow: hidden;
    /* background */
    background-image: url(<?php bloginfo('template_url')?>/img/banner_background.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    /* fade borders */
    -webkit-box-shadow: inset 0 0 140px #0b0d13!important;
    box-shadow: inset 0 0 140px #0b0d13!important;
    -moz-box-shadow: inset 0 0 140px 70px #0b0d13!important;
    -webkit-box-shadow: inset 0 0 140px 70px #0b0d13!important;
    box-shadow: inset 0 0 140px 70px #0b0d13!important;
  }
#banner_content {
  max-height: 80%;
  display: block;
}
#julif-logo{
  width: 45% !important;
  margin-bottom: 40px;
  max-width: 400px;
}
#banner_nombre {
  text-align: center;
  color: white;
  /* background-color: red; */
  /* padding-bottom: 15px; */
  font-size: 8vh;
  font-family: "proxima-nova",sans-serif;
  margin-top: -15px;
  text-transform: uppercase;
  font-size: 8vh;
}
#banner_links {
  /* margin: 16px;
  margin-top: 0px;
  display: block;
  text-align: center;
  margin-left: 148px;
  margin-right: 148px; */
  position: absolute;
  top: 15px;
  right: 15px;
}
#banner_links a {
  font: 300 32px/1 'Open Sans', sans-serif;
  /* margin: 8px; */
  color: #e3e4e6!important;
  text-decoration: none!important;
  /* background-color: #0e0e0e; */
  padding: 15px;
  /* border-radius: 5px; */
  text-transform: uppercase;
  /* background-color: #557ad1; */
  border: none;
  
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 19px;
  font-size: 2.5vh;
  font-weight: 600;
  padding-bottom: 8px;
}
#banner_links a:hover {
  /* background-color: #3357ab; */
  /* background-color: #000000;
  box-shadow: 0 0 0px 2px #ffffff; */
  color: white;
  border-bottom: 3px solid white;
}
.nav_socialinks a {
  color: #f6f7fb;
  display: -webkit-inline-box;
  background-color: black;
  margin-left: 6px;
  margin-right: 6px;
  padding: 11px;
  border-radius: 10px;
  font-size: 20px;
  font-size: 3vh;
}
.bars-linkcontainer:hover .fa-bars{
 color: #557ad1!important;
} 
.close-linkcontainer:hover .fa-times{
 color: #557ad1!important;
} 

.twitter-linkcontainer:hover .fa-twitter{
  color: #2daae2 !important;
} 
/*    .fa-twitter:hover{    
  color: #2daae2 !important;
}*/
.facebook-linkcontainer:hover  .fa-facebook-square{    
  color: #4064ac !important;
}
.instagram-linkcontainer:hover  .fa-instagram{
  background: -webkit-linear-gradient(#c11bff,#ffc11b);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.github-linkcontainer:hover  .fa-github{
  color: #bfbfbf!important; 
}

/* parallax */
#jarallax-container-0 div{
   /* fade borders */
   -webkit-box-shadow: inset 0 0 140px #0b0d13!important;
   box-shadow: inset 0 0 140px #0b0d13!important;
   -moz-box-shadow: inset 0 0 140px 70px #0b0d13!important;
   -webkit-box-shadow: inset 0 0 140px 70px #0b0d13!important;
   box-shadow: inset 0 0 140px 70px #0b0d13!important;
}
  </style>

   <!-- banner -->
   <banner class="parallax-background" id="banner">
    <!--   <div id="banner_links" style="text-align: center;">
        <a id="link1" href="blog.html">Blog</a>
        <a id="link2" href="devblog.html">Devblog</a>
        <a id="link3" href="portfolio.html">Portfolio</a> 
      </div> -->
      <div id="banner_content">
        <div style="text-align: center;">
          <img id="julif-logo" src="<?php bloginfo('template_url')?>/img/julif_icon.png" alt="logo Julif">
          <div id="banner_nombre"> Julian Filardi </div>
      
          <div  style="text-align: center;display: inline-flex;width: -webkit-fill-available;justify-content: center;">
            <div class="nav_socialinks">
                <a href="https://twitter.com/julian_julif" class="twitter-linkcontainer"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/JulifIsBetterThanYourMom/" class="facebook-linkcontainer"><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.instagram.com/_julif_/" class="instagram-linkcontainer"><i class="fab fa-instagram"></i></a>
                <a href="https://github.com/julif" class="github-linkcontainer"><i class="fab fa-github"></i></a>
            </div>
        </div>
        </div>
      </div>
    </banner>



    <script >
          // parallax
        (function($) {
           $.fn.outerFind = function(selector) {
             return this.find(selector).addBack(selector);
            };
             // .mbr-parallax-background
             function initParallax(card) {
              setTimeout(function() {
                $(card).outerFind('.parallax-background')
                .jarallax({speed: 0.6 }).css('position', 'relative');}, 0);
              }
              if ($.fn.jarallax  ) {
                $(window).on('update.parallax', function(event) {
                  setTimeout(function() {
                    var $jarallax = $('.parallax-background');
                    $jarallax.jarallax('coverImage');
                    $jarallax.jarallax('clipContainer');
                    $jarallax.jarallax('onScroll');
                  }, 0);
                });
                initParallax(document.body);
              }
        })(jQuery);
            </script>


<?php include(TEMPLATEPATH."/about_me/about_me.php"); ?> 

  <?php get_footer() ?>
</body>

