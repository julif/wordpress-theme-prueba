<style>
    about_me{       background-color: #101017;    display: block;}
    container{    display: block;
     
        padding: 20px;
        padding-top: 50px;
        padding-bottom: 50px;
    /* background-color: red;  */
    margin: 0px auto;
    min-height: 0%!important;
    max-width: 1200px;}
    .media-container-row{display: flex;
    align-items: center;}
    .media-content{    font-family: "proxima-nova",sans-serif;margin-left: 50px;
    font-size: 1.5rem;}

    .mbr-figure{    max-width: 25%;}
    .mbr-figure img {
    display: block;
    width: 100%;
  
}
.about_me_text{color: #9c9c9c; }
.about_me_title{color: white;}
.about_me_text_highligth{color: #fba434;}





@media screen and (max-width:1000px) and (orientation: portrait){
    .media-container-row {
     display: block; 
    align-items: center;
}
.mbr-figure{   
     max-width: none;   
 display: flex;
    justify-content: center}
    .mbr-figure img {max-width: 250px;}

.about_me_title{
    text-align: center;}
    .media-content { font-size: 3vh;margin-left: 0px;}
}
@media screen and (max-width:1000px) and (orientation: landscape)  {
    .media-container-row{display: flex;
    align-items: center;}
    .about_me_title{ font-size: 10vh;}
    .media-content{font-size: 5vh;margin-left: 30px;}
  }
</style>
<about_me>
    <container>
        <div class="media-container-row"> 
            <div class="mbr-figure">
                <img src="<?php bloginfo('template_url')?>/img/foto.jpg" style="    border-radius: 15px;">
             </div>
            <div class="media-content">
                <h2 class="about_me_title">Sobre mi:</h2>
                <p class="about_me_text">
                    Mi nombre es <span  class="about_me_text_highligth">Julian Filardi</span> tengo 29 años y soy un desarrollador web front end / ilustrador Argentino.</p>
                    <p class="about_me_text" >Me especializo en crear themes para wordpress y pequeños juegos simples para navegador utilizando javascript vainilla.</p>

            </div> 
        </div>
    </container>
 
 </about_me>
 <!-- <style>
      about_me{       background-color: #efefef;}
      .about_me_title{color: black;}
      .about_me_text{color: #565656; }
      .about_me_text_highligth{color: black;}
 
 
 </style> -->


