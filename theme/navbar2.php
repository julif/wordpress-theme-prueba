<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<style>
    nav{
      /* background-color: #1c1f2b; */
      background-color: white;
      background-color: #111c29;
      /* font-family: "Quicksand", sans-serif; */
      /* position: fixed; */
      top: 0;
      width: 100%;
      color: white;
      /* transition: 0.8s; */
      padding: 9px 0px;
      font-size: 18px;
      font-weight: 700;
      /* box-shadow: 0 5px 10px rgba(28, 30, 58, 0.23), 0 7px 18px rgba(0, 9, 128, 0.05); */
      /* border-bottom: 2px solid #dcdcdc; */
      /* z-index: 1000000; */
      text-align: left;
}
nav #main_nav_content {
  display: flow-root;
  width: 98%;
  max-width: 1290px;
  margin: 0px auto;
}


nav a {
  /* color: white; */
  /* color: black; */
  color: #97a0ad;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.active {
  /* color: #f6b606!important; */
  /* background: #29abe0; */
  /* border: 1px solid #29abe0; */
  color: var(--active-color)!important;
  font-weight: 600;
  text-transform: none;
  border-radius: 13px;
  /* transition: 0.8s; */
}
.right {
  float: right;
  display: flex;
}
#julif-logo-background {
  fill: var(--active-color)!important;
}








nav form{
        /* margin: 10px; */
        margin: 0px;
        margin-top: 5px;
        position: relative;
  }
  nav form input{    
    background-color: #ffffff;
    border: solid rgba(0,0,0,0) 1.5px;
    height: 36px;
    width: 100%;
    border-radius: 9999px;
    padding-left: 1.5rem; 
    padding-right: 1.5rem; 
    padding-top: 1.35rem;
    padding-bottom: 1.35rem;
    color: black!important;
    /* background-color: rgba(255,255,255,0.1); */
    font-weight: 600;
    -webkit-transition: all .1s ease-in-out;
    transition: all .1s ease-in-out;
  }
  /* sidebar .screen-reader-text, sidebar .search-submit{ display:none;} */
  input:focus {
    border: solid #95d0ff 1.5px;
    outline: none;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.0125), 0 0 8px rgba(34,139,230,0.5);
     box-shadow: inset 0 1px 1px rgba(0,0,0,0.0125), 0 0 8px rgba(34,139,230,0.5);
  }
  nav .search-submit{   
    top: 50%;
    -webkit-transform: translateY(-50%);
    position: absolute;    
    right: 1rem;
    transform: translateY(-50%);
    padding: 11px;
    /* background-color: red; */
    cursor: pointer;
  }
  button {     
    border: transparent;
    background-color: transparent;
    color: #afb3bd!important;
  }
  ::placeholder {
    color:  #afb3bd!important;
  }
</style>
<nav>
<div id="main_nav_content">
    <a  href="<?php echo get_home_url(); ?>" style="padding: 0px;"> 
        <div style="text-align: left;">
        <img src="<?php bloginfo('template_url')?>/img/avatar_julif.png" alt="Julif" style="    position: absolute;height: 60px;width: auto;margin-top: -5px;">
        <img src="<?php bloginfo('template_url')?>/img/jijiji3.svg" alt="Julif" style="position: absolute;height: 50px;width:auto;    padding-left: 60px;">
    </div>
    <style> 
    #julif-logo-background{  fill: var(--active-color)!important;}
    .julif-logo-letras{ fill:white!important;}
    </style>   
</a>
            <div class="right">
              <div class="desktop-only" style="display: flex;margin-right: 15px;">  
                <a id="nav-blog-link" href="index.html" class="active"> Blog</a>   
                <a id="nav-devblog-link" href="devblog.html"> Devblog</a>
              </div>
              

              <!-- <form role="search" method="get" class="search-form" action="http://localhost/">
                <label for="search-form-5d35dfdc4323d">

                </label>
                <input type="search" id="search-form-5d35dfdc4323d" class="search-field" placeholder="Buscar …" value="" name="s">
                <button type="submit" class="search-submit"><span class="screen-reader-text">   <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-fw"><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" class=""></path></svg></span></button>
                </form> -->
            </div>
</div>

              </nav>