<!DOCTYPE html>
<?php
include "admin/sistem/koneksi.php";

	$query = "SELECT * FROM promo"; // Query untuk menampilkan semua data siswa
	$sql = mysql_query($query); // Eksekusi/Jalankan query dari variabel $query
	$data = mysql_fetch_array($sql);
	?>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->
<!--
	ucorpora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	https://www.freshdesignweb.com/ucorpora/
-->
<head>
	<!-- Basic Meta Tags -->
  <meta charset="utf-8">
  <title>Roket Chiken</title>
	<meta name="description" content="ucorpora Gallery - Free Business Corporate HTML Template">
	<meta name="keywords" content="ucorpora, ucorpora gallery, free, template, corporate, clean, modern, bootstrap, creative, design">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--[if (gte IE 9)|!(IE)]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <![endif]--> 

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" type="image/png">

  <!-- Styles -->
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/bootstrap-override.css" rel="stylesheet">

  <!-- Font Avesome Styles -->
  <link href="css/font-awesome/font-awesome.css" rel="stylesheet">
	<!--[if IE 7]>
		<link href="css/font-awesome/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->

  <!-- FlexSlider Style -->
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen">

	<!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->   

</head>       
<body>
  <!-- Header -->
  <header id="header">
    <div class="container">
      <div class="row t-container">

        <!-- Logo -->
        <div class="span3">
		   <P>
            <a href="index.php"><marquee><h2><b>SELAMAT DATANG DI WEB ROKET CHIKEN</b></h2></marquee></a>
             </P>        
        </div>

        <div class="span9">
          <div class="row space60"></div>
             <nav id="nav" role="navigation">
               	<a href="#nav" title="Show navigation">Show navigation</a>
	            <a href="#" title="Hide navigation">Hide navigation</a>
	            <ul class="clearfix">
	           	<li><a href="index.php" title="">Home</a></li>
                <li><a href="profil.php" title="">Profil</a></li>                
                <li class="active"><a href="promo.php" title="">Promo</a></li>
                <li><a href="lokasi.php" title="">Lokasi</a></li>
                <li><a href="makanan.php" title=""><span>Produk</span></a>
  			      <ul> <!-- Submenu -->
                      <li><a href="makanan.php" title="">Makanan</a></li>
                      <li><a href="minuman.php" title="">Minuman</a></li>
                      <li><a href="cemilan.php" title="">Cemilan</a></li>
                      <li><a href="diskon.php" title="">Diskon</a></li>
  		         </ul> <!-- End Submenu -->      
               </li>
	           </ul>
          </nav>
         </div> 
      </div> 
       <div class="row space40"></div>
  </div> 
</header><!-- Header End -->
<!-- Titlebar
================================================== -->
<section id="titlebar">
	<!-- Container -->
	<div class="container">
	
		<div class="eight columns">
			<h3 class="left">Gallery</h3>
		</div>
		
		<div class="eight columns">
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="index.php">Home</a></li>
					<li><a href="promo.php">Promo</a></li>
				</ul>
			</nav>
		</div>

	</div>
	<!-- Container / End -->
</section>

  <!-- Content -->
  <div id="content">
    <div class="container">

      <div class="row">
        <div class="span12">
          <h2><b><?php echo $data['judul'];?></b></h2> 

							<img src="<?php echo "admin/images/".$data['gambar'];?>" />
							<?php echo $data['isi'];?>
							<ul class="last">
							</ul>
      <div class="row">
        <div class="span12">  
            <!-- portfolio filter -->		
        		<ul id="portfolio-filter">
        			<li class="active"><a href="#" class="filter" data-filter="*">All</a></li>
        			<li><a href="#" class="filter" data-filter=".photography">Photography</a></li>
              <li><a href="#" class="filter" data-filter=".architecture">Architecture</a></li>
        			<li><a href="#" class="filter" data-filter=".webdesign">Webdesign</a></li>
              <li><a href="#" class="filter" data-filter=".technology">Thechnology</a></li>
              <li><a href="#" class="filter" data-filter=".identity">Identity</a></li>
        		</ul>
    
        		<section class="row" id="portfolio-items">
              <ul class="portfolio">
                
                <li>
                  <article class="span3 project" data-tags="photography">     
                    <a href="#">
                      <div class="square-1">
                        <div class="img-container">
                          <img src="img/gallery/01.jpg" alt="">
                          <div class="img-bg-icon"></div>
                        </div>
                        <h3>Photo Ucorpora</h3>
                          More description about photo 
                      </div>
                    </a>
                  </article>
                </li> 
                
                <li>
                  <article class="span3 project" data-tags="webdesign">     
                    <a href="#">
                      <div class="square-1">
                        <div class="img-container">
                          <img src="img/gallery/02.jpg" alt="">
                          <div class="img-bg-icon"></div>
                        </div>
                        <h3>Photo Ucorpora</h3>
                          More description about photo 
                      </div>
                    </a>
                  </article>
                </li>  
                
                <li>
                  <article class="span3 project" data-tags="photography,identity">     
                    <a href="#">
                      <div class="square-1">
                        <div class="img-container">
                          <img src="img/gallery/03.jpg" alt="">
                          <div class="img-bg-icon"></div>
                        </div>
                        <h3>Photo Ucorpora</h3>
                          More description about photo 
                      </div>
                    </a>
                  </article>
                </li>  
                
                <li>
                  <article class="span3 project" data-tags="identity,architecture">     
                    <a href="#">
                      <div class="square-1">
                        <div class="img-container">
                          <img src="img/gallery/04.jpg" alt="">
                          <div class="img-bg-icon"></div>
                        </div>
                        <h3>Photo Ucorpora</h3>
                          More description about photo 
                      </div>
                    </a>
                  </article>
                </li> 
                 
                <li>
                  <article class="span3 project" data-tags="architecture,technology">     
                    <a href="#">
                      <div class="square-1">
                        <div class="img-container">
                          <img src="img/gallery/05.jpg" alt="">
                          <div class="img-bg-icon"></div>
                        </div>
                        <h3>Photo Ucorpora</h3>
                          More description about photo 
                      </div>
                    </a>
                  </article>
                </li>
                
                <li>
                  <article class="span3 project" data-tags="technology,webdesign">     
                    <a href="#">
                      <div class="square-1">
                        <div class="img-container">
                          <img src="img/gallery/06.jpg" alt="">
                          <div class="img-bg-icon"></div>
                        </div>
                        <h3>Photo Ucorpora</h3>
                          More description about photo 
                      </div>
                    </a>
                  </article>
                </li> 
                 
                <li>
                  <article class="span3 project" data-tags="architecture">     
                    <a href="#">
                      <div class="square-1">
                        <div class="img-container">
                          <img src="img/gallery/07.jpg" alt="">
                          <div class="img-bg-icon"></div>
                        </div>
                        <h3>Photo Ucorpora</h3>
                          More description about photo 
                      </div>
                    </a>
                  </article>
                </li>    
                
                <li>
                  <article class="span3 project" data-tags="identity,technology">     
                    <a href="#">
                      <div class="square-1">
                        <div class="img-container">
                          <img src="img/gallery/08.jpg" alt="">
                          <div class="img-bg-icon"></div>
                        </div>
                        <h3>Photo Ucorpora</h3>
                          More description about photo 
                      </div>
                    </a>
                  </article>
                </li> 
                 
                <li>
                  <article class="span3 project" data-tags="webdesign, architecture">     
                    <a href="#">
                      <div class="square-1">
                        <div class="img-container">
                          <img src="img/gallery/09.jpg" alt="">
                          <div class="img-bg-icon"></div>
                        </div>
                        <h3>Photo Ucorpora</h3>
                          More description about photo 
                      </div>
                    </a>
                  </article>
                </li>      
    
                <li>
                  <article class="span3 project" data-tags="technology,webdesign">     
                    <a href="#">
                      <div class="square-1">
                        <div class="img-container">
                          <img src="img/gallery/10.jpg" alt="">
                          <div class="img-bg-icon"></div>
                        </div>
                        <h3>Photo Ucorpora</h3>
                          More description about photo 
                      </div>
                    </a>
                  </article>
                </li> 
                 
                <li>
                  <article class="span3 project" data-tags="architecture,photography">     
                    <a href="#">
                      <div class="square-1">
                        <div class="img-container">
                          <img src="img/gallery/11.jpg" alt="">
                          <div class="img-bg-icon"></div>
                        </div>
                        <h3>Photo Ucorpora</h3>
                          More description about photo 
                      </div>
                    </a>
                  </article>
                </li>    
                
                <li>
                  <article class="span3 project" data-tags="technology,identity,architecture">     
                    <a href="#">
                      <div class="square-1">
                        <div class="img-container">
                          <img src="img/gallery/12.jpg" alt="">
                          <div class="img-bg-icon"></div>
                        </div>
                        <h3>Photo Ucorpora</h3>
                          More description about photo 
                      </div>
                    </a>
                  </article>
                </li> 
                
              </ul> 
            </section>   
                          
  <!-- Content End -->
  </div> </div> </div> </div> </div> </div> </div>
  
  <!-- Footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="span5">
        <h3>Contact Form</h3>
        <div>         
          <form class="form-main" name="ajax-form" id="ajax-form" action="#" method="post">
            <div id="ajaxsuccess">E-mail was successfully sent.</div> 
            <div class="error" id="err-name">Please enter name</div>
            <input name="name" id="name" type="text" value="Name" onfocus="if(this.value == 'Name') this.value='';" onblur="if(this.value == '') this.value='Name';">
            
            <div class="error" id="err-email">Please enter e-mail</div>
		        <div class="error" id="err-emailvld">E-mail is not a valid format</div>
            <input  name="email" id="email" type="text" value="E-mail" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';">

            <div class="error" id="err-message">Please enter message</div>
            <textarea  name="message" id="message" onfocus="if(this.value == 'Message') this.value='';" onblur="if(this.value == '') this.value='Message';">Message</textarea><br>
            <div>
            	<div class="error" id="err-form">There was a problem validating the form please check!</div>
            	<div class="error" id="err-timedout">The connection to the server timed out!</div>
            	<div class="error" id="err-state"></div>
            </div>
            <button id="send" class="btn f-right">Send Message <i class="icon-ok"></i></button>
          </form>
        </div>
        </div>
        <div class="span3 offset3">
          <h3>Address</h3>
          81 Sunnyvale Street<br>
          Los Angeles, CA 90185<br>
          United States<br>
          <br>
          <i class="icon-phone"></i>+01 880 555 999<br>
          <i class="icon-envelope"></i><a href="mailto:support@example.com">support@example.com</a><br>
          <i class="icon-home"></i><a href="#">www.example.com</a>
          
          <div class="row space40"></div>  

          <a href="#" class="social-network sn2 behance"></a>
          <a href="#" class="social-network sn2 facebook"></a>
          <a href="#" class="social-network sn2 pinterest"></a>
          <a href="#" class="social-network sn2 flickr"></a>
          <a href="#" class="social-network sn2 dribbble"></a>
          <a href="#" class="social-network sn2 lastfm"></a>
          <a href="#" class="social-network sn2 forrst"></a>
          <a href="#" class="social-network sn2 xing"></a>      
        </div>
      </div>
      
      <div class="row space50"></div>
      <div class="row">
        <div class="span6">
          <div class="logo-footer">
            Design by <a href="https://www.freshdesignweb.com">freshDesignweb</a>
          </div>                       
        </div>
        <div class="span6 right">
          &copy; 2020. All rights reserved.
        </div>
      </div>

    </div>
  </footer>
  <!-- Footer End -->

  <!-- JavaScripts -->
  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 
  <script type="text/javascript" src="js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="js/functions.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" defer src="js/jquery.flexslider.js"></script>

</body>
</html>
  