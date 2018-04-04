<!DOCTYPE html>
<?php
include "admin/sistem/koneksi.php";

	$query = "SELECT * FROM beranda"; // Query untuk menampilkan semua data siswa
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
	<meta name="description" content="ucorpora demo - Free Business Corporate HTML Template">
	<meta name="keywords" content="ucorpora, ucorpora demo, free, template, corporate, clean, modern, bootstrap, creative, design">
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
            <a href="index.php"><marquee><b>SELAMAT DATANG DI WEB ROKET CHIKEN</b></marquee></a>
             </P>      
        </div>

        <div class="span9">
          <div class="row space60"></div>
             <nav id="nav" role="navigation">
               	<a href="#nav" title="Show navigation">Show navigation</a>
	            <a href="#" title="Hide navigation">Hide navigation</a>
	            <ul class="clearfix">
	           	<li class="active"><a href="index.php" title="">Home</a></li>
                <li><a href="profil.php" title="">Profil</a></li>                
                <li><a href="promo.php" title="">Promo</a></li>
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
          <div class="slider1 flexslider">  <!-- Slider -->
            <ul class="slides">
              <li>
    	    	    <img src="img/slider/11.jpg" alt="">
    	    		</li>
    	    		<li>
    	    	    <img src="img/slider/22.jpg" alt="">
    	    		</li>
    	    		<li>
    	    	    <img src="img/slider/33.jpg" alt="">
    	    		</li>
                    <li>
    	    	    <img src="img/slider/44.jpg" alt="">
    	    		</li>
					<li>
    	    	    <img src="img/slider/55.jpg" alt="">
    	    		</li>
            </ul>
          </div>  <!-- Slider End -->
  </div> 
</header>
  <!-- Header End -->
  <!-- Content -->
  <div id="content">
    <div class="container">
       <div class="f-center">
              <h2>why choose us ?</h2>
              <div class="head-info">
                Magna in pulvinar tempor montes pulvinar habitasse parturient? Elementum facilisis sit et, dolor placerat, turpis auctor. Lundium ultricies augue urna arcu aliquet velit?
            </div>  
       </div>
       <div class="f-hr"></div>
      <div class="row space40"></div>
      <div class="row">
	 
        <div class="span12">
          <div class="row">
            <!-- Service Container --> 
            <div class="section">
							<h2><b><?php echo $data['judul'];?></b></h2> 
							<center>
							<img src="<?php echo "admin/images/".$data['gambar'];?>" />
							<?php echo $data['isi'];?>
							</center>
							<ul class="last">
							</ul>
			</div>
          <!-- List End -->
        </div>
               
      </div>

      <div class="space40"></div>  
              
      <!-- Our Clients -->
      <div class="row">
        <div class="span12">
          <h3>Our Clients</h3>
        </div>
      </div> 
    
      <div id="our-clients" class="slider2 flexslider">
        <ul class="slides">
          <li>
            <div class="row">
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/1.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/2.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/3.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/4.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/5.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/6.png" alt="">
                </a>
              </div>
            </div>  
          </li>
          <li>
            <div class="row">
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/4.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/3.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/1.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/2.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/5.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/6.png" alt="">
                </a>
              </div>
            </div>  
          </li>
        </ul>
      </div> 
      <!-- Our Clients End -->
      
      <div class="space50"></div> 
       
    </div>
  </div>
  <!-- Content End -->
  
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
  <script type="text/javascript" defer src="js/jquery.flexslider.js"></script>

</body>
</html>
  