<style>
	nav{
	background-color: #111c29;
    display: -webkit-box;
    width: 100%;
    line-height: 50px;
}
nav #main_nav_content {
    position: relative;
    display: -webkit-box;
    width: 100%;
    max-width: 1200px;
    margin: 0px auto;
    height: 50px;
}
.nav_brand{

    padding-top: 8px;
    padding-left: 8px;
    padding-right: 8px;
}
.nav_content_right{
    position: absolute;
    right:  0;
    display: -webkit-box;

}
.nav_links a{
    display: -webkit-inline-box;
    margin-left: 5px;
    padding-left: 10px;
    padding-right: 10px;
    color: white;
    font-weight: 700;
    font-family: "proxima-nova",sans-serif;
    font-size: 17px;
    text-decoration: none;
}
.nav_links a:hover{
       color:  #378cbd;
}

</style>
<nav>
	<div id="main_nav_content">
		<div class="nav_links"> 
			<a  style="    text-transform: uppercase;font-stretch: semi-condensed; color: white!important;font-size: 25px;" href="<?php echo get_home_url(); ?>"> Julif</a>
		</div>
		<div class="nav_content_right">
			<div class="nav_links">
				<a href="#">link 1</a>
				<a href="#">link 2</a>
				<a href="#">link 3</a>
			</div>
		</div>
	</div>
</nav>

