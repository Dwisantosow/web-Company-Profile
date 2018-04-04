<!DOCTYPE html>
<?php
include "admin/sistem/koneksi.php";

	$query = "SELECT * FROM lokasi"; // Query untuk menampilkan semua data siswa
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
  <title>Ucorpora service</title>
	<meta name="description" content="ucorpora service - Free Business Corporate HTML Template">
	<meta name="keywords" content="ucorpora, ucorpora service, free, template, corporate, clean, modern, bootstrap, creative, design">
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
          <div class="logo">
            <marquee><a href="index.php"><img src="img/logo-header.png" alt=""></a></marquee>
          </div>            
        </div>

        <div class="span9">
          <div class="row space60"></div>
             <nav id="nav" role="navigation">
               	<a href="#nav" title="Show navigation">Show navigation</a>
	            <a href="#" title="Hide navigation">Hide navigation</a>
	            <ul class="clearfix">
	           	<li><a href="index.php" title="">Home</a></li>
                <li><a href="profil.php" title="">Profil</a></li>                
                <li><a href="promo.php" title="">Promo</a></li>
                <li class="active"><a href="lokasi.php" title="">Lokasi</a></li>
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
			<h3 class="left">Service</h3>
		</div>
		
		<div class="eight columns">
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>Service</li>
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
          <h4>Looking business consulting service?</h4>
          <p>Ucorpora provide best free corporate website template ut molestie turpis, elementum tempor metus. Vestibulum non nibh porttitor, eleifend purus eu, pulvinar orci. Quisque a gravida lorem, eu lobortis magna. Nulla auctor urna quis facilisis pretium. Cras facilisis risus sed mauris gravida, id vestibulum erat dictum. Nam in ante massa. Integer ultricies libero lorem, egestas dictum augue aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis.</p>

<p>Elementum tempor metus donec ut molestie turpis. Vestibulum non nibh porttitor, eleifend purus eu, pulvinar orci. Quisque a gravida lorem, eu lobortis magna. Nulla auctor urna quis facilisis pretium. Cras facilisis risus sed mauris gravida, id vestibulum erat dictum. Nam in ante massa. Integer ultricies libero lorem.</p>  

          <h3>We have provide best consulting service</h3>
          <div class="ic-1"></div>
          <img src="img/image01.png" alt="">
          <div class="title-1"><h4>Our Service:</h4></div>
           <!-- List -->
          <div class="text-1"> 
            <ul class="list-b">
              <!-- List Items -->
              <li><i class="icon-ok"></i> Tax Consulting.</li>
              <li><i class="icon-ok"></i> Business Consulting.</li>
              <li><i class="icon-ok"></i> Data analysis methods.</li>
              <li><i class="icon-ok"></i> On demand consulting.</li>
              <li><i class="icon-ok"></i> Private consultant.</li>
            </ul>     
          </div>
          <!-- List End -->
      <!-- List End -->
      <div class="space20"></div>
      <div class="row">
        <div class="span4">
          <div class="ic-1"><i class="icon-lightbulb"></i></div>
          <div class="title-1"><h4>Powerful clean design</h4></div>
          <div class="text-1"> 
            On sait depuis longake apple pie. Gingerbread cotton candy icing ice cream applicake wafetemps nnaire de plus de 200 mots pluskan rlatin
          </div>
        </div>
        <div class="span4">
          <div class="ic-1"><i class="icon-resize-small"></i></div>
          <div class="title-1"><h4>Fully responsive</h4></div>
          <div class="text-1">         
            Iil utilise un dictionnaire de plus de 200 mots kan rlarem as Ipsumtiotins, en combiake apple pie. Gingerbread icing ice cream applicake wafenaison.
          </div>
        </div>
        <div class="span4">
          <div class="ic-1"><i class="icon-eye-open"></i></div>
          <div class="title-1"><h4>Retina Ready</h4></div>
          <div class="text-1">
            Contrairement à une opinion répandue, Lorem as Ipsumtionnaire de plus n'est pas simplake apple pie. Gingerbread cotton  ice cream applicake wafeement.
          </div>
        </div>    
      </div>   
      
      <div class="space30"></div> 
      
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
            <h3><i class="icon-signin hidden-tablet"></i> Accession</h3>
          </div>
        </div>
        <div class="space30 visible-phone"></div>
        <!-- Line -->
        <div class="span12"><hr></div>
      </div>
      <!-- Typography Row End-->

      <div class="row">
        <div class="span6">
          <h3>Accordion</h3>
          <!-- Accordion -->
          <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                  Information #1
                </a>
              </div>
              <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                  Officia deserunt mollit anim id est laborum. Duis aute irure doloicies vehat a ante veere velit aliquet.Pie wafer wypas candy canes toffee. Co adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Dlit ors vestibulum.
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                  Information #2
                </a>
              </div>
              <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                  Pie wafer wypas candy canes toffee. Co adipisicing elit, sed do. Chocolateon candy toffee topping lollipop. Eeiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in repreh adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                  Information #3
                </a>
              </div>
              <div id="collapseThree" class="accordion-body collapse">
                <div class="accordion-inner">
                  Dolore magna aliqua. Duis aute irure dolor in repreh adipisicing elididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptaenderit in voluptaokie icing candy jelly oat cake chupa chups bear claw topping applicake. Cookie danish dessert pie. Marshmallow wypas dessert. Chocolate cake sweet cotton candy .
                </div>
              </div>
            </div>
          </div>
          <!-- Accordion End -->
      
        </div>      
        <div class="span6">
          <h3>New Services</h3>
          <!-- Tabs -->
          <div class="tabbable">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
              <li><a href="#tab2" data-toggle="tab">Section 2</a></li>
              <li><a href="#tab3" data-toggle="tab">Section 3</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab1">
                <h3>I'm in Section 1</h3>
                <p>Ut wisi enim ad minim veniam, quis nostrud exeinim et.Pie wafer wypas candy canes toffee. Co adipisicing elit, lit in voluptah uveere velit aliquet.Pie wafer wypas candy canes toffee. Co adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Integer posuere erat a ante venenatis dapibus posuerci tation ullamcorper susc nostrudexerci tation ullamcoramcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendinim veniam, quis nostrud exerci tation ullamcorper suscipit lobrerit in vul</p>
              </div>
              <div class="tab-pane" id="tab2">
                <h3>I'm in Section 2</h3>
                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcinim veniam, quis nostrud exerci tation ullamcorper t lobortis nisl ut alisequat. Duis autem vel einim veniam, quis nostrud exerinim veniam, quis nostrud exerci tation ullamcorper suscipit lobci tation ullamcorper suscipit lobum iriure dolor in hendruis aute irure dolor in reprehenderit in voluptah ultricies vehat a ante veere velit aliquet.Pie wafer wypas candy canes toffee. Co adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Integer posuere erat a ante venenatis dapibus posuerit in vul</p>
              </div>
              <div class="tab-pane" id="tab3">
                <h3>I'm in Section 3</h3>
                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea coiipit lobmmodo consequat. Duis autem vel eum iriure dolor in hendrerit in vinim veniam, quis nostrud einim veniam, quis nostrud exeruis aute irure dolor in reprehenderit in voluptah ultricies vehat a ante veere velit aliquet.Pie wafer wypas candy canes toffee. Co adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Integer posuere erat a ante venenatis dapibus posuci tation ullamcorper suscipit lobxerci tation ullamcorper suscipit lobul</p>
              </div>
            </div>
          </div>
          <!-- Tabs End -->

        </div>
      </div>  

      <div class="row space30"></div>  

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

      <div class="row space50"></div>  
    </div>
  </div> </div>
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
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" defer src="js/jquery.flexslider.js"></script>

</body>
</html>
  