<!DOCTYPE html>
<?php
include "admin/sistem/koneksi.php";

	$query = "SELECT * FROM profil"; // Query untuk menampilkan semua data siswa
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
	<meta name="description" content="ucorpora about us - Free Business Corporate HTML Template">
	<meta name="keywords" content="ucorpora, ucorpora about, theme, template, corporate, clean, modern, bootstrap, creative, design">
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
            <a href="index.php"><marquee><h1><b>SELAMAT DATANG DI WEB ROKET CHIKEN</b></h1></marquee></a>
             </P>            
        </div>

        <div class="span9">
          <div class="row space60"></div>
             <nav id="nav" role="navigation">
               	<a href="#nav" title="Show navigation">Show navigation</a>
	            <a href="#" title="Hide navigation">Hide navigation</a>
	            <ul class="clearfix">
	           	<li><a href="index.php" title="">Home</a></li>
                <li class="active"><a href="profil.php" title="">Profil</a></li>                
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
  </div> 
</header><!-- Header End -->

<!-- Titlebar
================================================== -->
<section id="titlebar">
	<!-- Container -->
	<div class="container">
	
		<div class="eight columns">
			<h3 class="left">Profil</h3>
		</div>
		
		<div class="eight columns">
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>About</li>
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
         
                
          <div  class="slider2 team flexslider">
            <ul class="slides">
              <li>
                <div class="row">
                                  
                  <a href="#">
                    <div class="span3 square-1">
                      <div class="img-container">
                        <img src="img/our-team/1.jpg" alt="">
                        <div class="img-bg-icon"></div>
                      </div>
                      <h4>John Smith</h4>
                        managing director  
                    </div>
                  </a>
                  
                  <a href="#">
                    <div class="span3 square-1">
                      <div class="img-container">
                        <img src="img/our-team/2.jpg" alt="">
                        <div class="img-bg-icon"></div>
                      </div>
                      <h4>Jokey Holid</h4>
                        designer
                    </div>
                  </a>
                  
                  <a href="#">
                    <div class="span3 square-1">
                      <div class="img-container">
                        <img src="img/our-team/3.jpg" alt="">
                        <div class="img-bg-icon"></div>
                      </div>
                      <h4>Graham Bill</h4>
                        project manager 
                    </div>
                  </a>
                  
                  <a href="#">
                    <div class="span3 square-1">
                      <div class="img-container">
                        <img src="img/our-team/4.jpg" alt="">
                        <div class="img-bg-icon"></div>
                      </div>
                      <h4>Kenny Delak </h4>
                        developer
                    </div>
                  </a>
                  
                </div> 
              </li>
              <li>
                <div class="row">
                
                  <a href="#">
                    <div class="span3 square-1">
                      <div class="img-container">
                        <img src="img/our-team/3.jpg" alt="">
                        <div class="img-bg-icon"></div>
                      </div>
                      <h4>Joe Ganesha</h4>
                        founder
                    </div>
                  </a>
                  
                  <a href="#">
                    <div class="span3 square-1">
                      <div class="img-container">
                        <img src="img/our-team/4.jpg" alt="">
                        <div class="img-bg-icon"></div>
                      </div>
                      <h4>Mario Balio</h4>
                        programmer 
                    </div>
                  </a>
                  
                  <a href="#">
                    <div class="span3 square-1">
                      <div class="img-container">
                        <img src="img/our-team/1.jpg" alt="">
                        <div class="img-bg-icon"></div>
                      </div>
                      <h4>Jane Buckler</h4>
                        junior designer
                    </div>
                  </a>
                  
                  <a href="#">
                    <div class="span3 square-1">
                      <div class="img-container">
                        <img src="img/our-team/2.jpg" alt="">
                        <div class="img-bg-icon"></div>
                      </div>
                      <h4>Zeda Junar</h4>
                        analyst
                    </div>
                  </a>
                  
                </div> 
              </li>
            </ul>
          </div>
          <!-- Our Team End -->      
          <h2><b><?php echo $data['judul'];?></b></h2> 
							<center>
							<img src="<?php echo "admin/images/".$data['gambar'];?>" />
							<?php echo $data['isi'];?>
							</center>
							<ul class="last">
							</ul>
          <!-- Typography Row -->
          <div class="row t-row">
            <!-- Line -->
            <div class="span12"><hr></div>
            <div class="span9">
              <h2>We have become the fastest growing</h2>
            </div>
            <div class="span3">
              <!-- Button -->
              <div class="btn btn-blue f-right">
                <!-- Title -->
                <h3><i class="icon-signin hidden-tablet"></i> More Info</h3>
              </div>
            </div>
            <div class="space30 visible-phone"></div>
            <!-- Line -->
            <div class="span12"><hr></div>
          </div>
          <!-- Typography Row End-->

          <div class="row space10"></div>  

          <div class="row">
            <!-- List -->    
            <div class="span4"> 
              <h3>List</h3>
              <ul class="list-a">
                <li>Le Aorem Ipsum ainsi obtenu ne seeng elit.</li>
                <li>Contrairement à Lorem n'est aliquet mollis.</li>
                <li>On sait depuis travailler cotà une opinion.</li>
                <li>Al contrario di quaon enodio, quis fringilla.</li>
                <li>Sopravvissuto non solo velor iaculis.</li>
                <li>Sait depuis longtendue gravida porttitor.</li>
              </ul>   
            </div>
            <!-- List End -->    
            
            <!-- Progress Bar -->    
            <div class="span4">
              <h3>Progress Bar</h3>
              <div class="progress">
                <div class="bar" style="width: 73%;">HTML/CSS 73%</div>
              </div>  
              <div class="progress">
                <div class="bar" style="width: 100%;">Web Design 100%</div>
              </div>  
              <div class="progress">
                <div class="bar" style="width: 78%;">Photography 78%</div>
              </div>  
              <div class="progress">
                <div class="bar" style="width: 80%;">Sound Design 80%</div>
              </div>  
              <div class="progress">
                <div class="bar" style="width: 63%;">Party 63%</div>
              </div>  
            </div>
            <!-- Progress Bar End --> 
  
            <!-- Client Says --> 
            <div class="span4">
              <h3>Client Says</h3> 
              <div class="client-says">            
                “Claritas est etiam processus dynamicus, qui sur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas. Aliquam at erat in purus aliquet mollis. Fusce elementum velit vel dolor iaculis egestas. posuere vel vitae  elementum velit nibh.”
              </div>
              <div class="client-says-2">
                <div class="quotes">
                  <i class="icon-quote-right"></i>John Doe, Everton Inc.
                </div>  
              </div> 
            </div>
            <!-- Client Says End --> 
          </div> 
                                   
          <div class="row space50"></div>  
        </div>
      </div>
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
  