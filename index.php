<?php 
//define('PAGE', 'dashboard');
//$PAGE='transaction';
include 'include/function.php';
//allpagecheck_session();
$obj = new Job;
?>

<!DOCTYPE html>

<html class="no-js" lang="en-US">
<head>
<!-- <title>Donate &#8211; Quiz-O-Mania</title>
<meta name='robots' content='noindex,nofollow' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Quiz-O-Mania &raquo; Feed" href="https://quizomania.in/feed/" />
<link rel="alternate" type="application/rss+xml" title="Quiz-O-Mania &raquo; Comments Feed" href="https://quizomania.in/comments/feed/" />
		<script>
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/quizomania.in\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.3.8"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style>
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='https://quizomania.in/wp-includes/css/dist/block-library/style.min.css?ver=5.3.8' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='https://quizomania.in/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.1.7' media='all' />
<link rel='stylesheet' id='twentytwenty-style-css'  href='https://quizomania.in/wp-content/themes/quizomania/style.css?ver=1.0.0' media='all' />
<style id='twentytwenty-style-inline-css'>
.color-accent,.color-accent-hover:hover,.color-accent-hover:focus,:root .has-accent-color,.has-drop-cap:not(:focus):first-letter,.wp-block-button.is-style-outline,a { color: #cd2653; }blockquote,.border-color-accent,.border-color-accent-hover:hover,.border-color-accent-hover:focus { border-color: #cd2653; }button:not(.toggle),.button,.faux-button,.wp-block-button__link,.wp-block-file .wp-block-file__button,input[type="button"],input[type="reset"],input[type="submit"],.bg-accent,.bg-accent-hover:hover,.bg-accent-hover:focus,:root .has-accent-background-color,.comment-reply-link { background-color: #cd2653; }.fill-children-accent,.fill-children-accent * { fill: #cd2653; }body,.entry-title a,:root .has-primary-color { color: #000000; }:root .has-primary-background-color { background-color: #000000; }cite,figcaption,.wp-caption-text,.post-meta,.entry-content .wp-block-archives li,.entry-content .wp-block-categories li,.entry-content .wp-block-latest-posts li,.wp-block-latest-comments__comment-date,.wp-block-latest-posts__post-date,.wp-block-embed figcaption,.wp-block-image figcaption,.wp-block-pullquote cite,.comment-metadata,.comment-respond .comment-notes,.comment-respond .logged-in-as,.pagination .dots,.entry-content hr:not(.has-background),hr.styled-separator,:root .has-secondary-color { color: #6d6d6d; }:root .has-secondary-background-color { background-color: #6d6d6d; }pre,fieldset,input,textarea,table,table *,hr { border-color: #dcd7ca; }caption,code,code,kbd,samp,.wp-block-table.is-style-stripes tbody tr:nth-child(odd),:root .has-subtle-background-background-color { background-color: #dcd7ca; }.wp-block-table.is-style-stripes { border-bottom-color: #dcd7ca; }.wp-block-latest-posts.is-grid li { border-top-color: #dcd7ca; }:root .has-subtle-background-color { color: #dcd7ca; }body:not(.overlay-header) .primary-menu > li > a,body:not(.overlay-header) .primary-menu > li > .icon,.modal-menu a,.footer-menu a, .footer-widgets a,#site-footer .wp-block-button.is-style-outline,.wp-block-pullquote:before,.singular:not(.overlay-header) .entry-header a,.archive-header a,.header-footer-group .color-accent,.header-footer-group .color-accent-hover:hover { color: #cd2653; }.social-icons a,#site-footer button:not(.toggle),#site-footer .button,#site-footer .faux-button,#site-footer .wp-block-button__link,#site-footer .wp-block-file__button,#site-footer input[type="button"],#site-footer input[type="reset"],#site-footer input[type="submit"] { background-color: #cd2653; }.header-footer-group,body:not(.overlay-header) #site-header .toggle,.menu-modal .toggle { color: #000000; }body:not(.overlay-header) .primary-menu ul { background-color: #000000; }body:not(.overlay-header) .primary-menu > li > ul:after { border-bottom-color: #000000; }body:not(.overlay-header) .primary-menu ul ul:after { border-left-color: #000000; }.site-description,body:not(.overlay-header) .toggle-inner .toggle-text,.widget .post-date,.widget .rss-date,.widget_archive li,.widget_categories li,.widget cite,.widget_pages li,.widget_meta li,.widget_nav_menu li,.powered-by-wordpress,.to-the-top,.singular .entry-header .post-meta,.singular:not(.overlay-header) .entry-header .post-meta a { color: #6d6d6d; }.header-footer-group pre,.header-footer-group fieldset,.header-footer-group input,.header-footer-group textarea,.header-footer-group table,.header-footer-group table *,.footer-nav-widgets-wrapper,#site-footer,.menu-modal nav *,.footer-widgets-outer-wrapper,.footer-top { border-color: #dcd7ca; }.header-footer-group table caption,body:not(.overlay-header) .header-inner .toggle-wrapper::before { background-color: #dcd7ca; }
</style>
<link rel='stylesheet' id='twentytwenty-print-style-css'  href='https://quizomania.in/wp-content/themes/quizomania/print.css?ver=1.0.0' media='print' />
<!--n2css--><script src='https://quizomania.in/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
<script src='https://quizomania.in/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script src='https://quizomania.in/wp-content/themes/quizomania/assets/js/index.js?ver=1.0.0' async></script>
<link rel='https://api.w.org/' href='https://quizomania.in/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://quizomania.in/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://quizomania.in/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.3.8" />
<link rel="canonical" href="https://quizomania.in/donate/" />
<link rel='shortlink' href='https://quizomania.in/?p=14' />
<link rel="alternate" type="application/json+oembed" href="https://quizomania.in/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fquizomania.in%2Fdonate%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://quizomania.in/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fquizomania.in%2Fdonate%2F&#038;format=xml" />
<script data-ad-client="ca-pub-3903601018215277" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>	<script>document.documentElement.className = document.documentElement.className.replace( 'no-js', 'js' );</script>
	<style>.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style> -->
<meta charset="utf-8">
  <title>Quiz-O-Mania</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="https://quizomania.in/wp-content/themes/quizomania/img/favicon.png" rel="icon">
  <link href="https://quizomania.in/wp-content/themes/quizomania/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="https://quizomania.in/wp-content/themes/quizomania/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="https://quizomania.in/wp-content/themes/quizomania/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://quizomania.in/wp-content/themes/quizomania/lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="https://quizomania.in/wp-content/themes/quizomania/css/style.css" rel="stylesheet">

   <!-- Toastr-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

	<body>

	  <!--==========================
	  Header
	  ============================-->
	  <header id="header">
	    <div class="container">

	      <div id="logo" class="pull-left">
	        <a href="https://quizomania.in/home/"><img src="https://quizomania.in/wp-content/themes/quizomania/img/logo.png" alt="" title="" /></img></a>
	        <!-- Uncomment below if you prefer to use a text logo -->
	        <!--<h1><a href="#hero">Regna</a></h1>-->
	      </div>

	      <nav id="nav-menu-container">
	        <ul class="nav-menu">
	          <li class="menu-active"><a href="https://quizomania.in/home/">Home</a></li>
	          <li><a href="#about">About Us</a></li>
	          <li><a href="#services">Services</a></li>
	          <li><a href="#portfolio">Social Welfare</a></li>
	          <li><a href="#team">Team</a></li>
	          <li><a href="#contact">Contact Us</a></li>
              <li><a href="login.php">Login Page</a></li>
	        </ul>
	      </nav><!-- #nav-menu-container -->
	    </div>
	  </header><!-- #header -->

	 

<body>

   <section id="hero">
    <div class="hero-container">
      <h1>Donate us to make the world better</h1>
      <h2>"No one has ever become poor by giving."-Anne Frank</h2>
      <a href="#about" class="btn-get-started">Donate Now</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
     Donate
    ============================-->
	
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Donate us to make the world better</h2>
            <p>
              Sacn QR code through any UPI App(e.g - BHIM,Phone Pay,Google pay,Pay Zaap and Any other UPI)
            </p>

              <div class="icon-box wow fadeInUp" >
              <div class="icon"><i class="fa fa-inr"></i></div>
              <h4 class="title"><a href="">Bank Transfer</a></h4>
              <p class="description">Name : KOLMIJORE QUIZ O MANIA | A/C Number : 0188010637930|Ifsc code UTBI0DAS295 |Bank - United Bank of India|Branch Dasspur</p>
            </div>
			
			<div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-inr"></i></div>
              <h4 class="title"><a href="">UPI</a></h4>
              <p class="description">Sacn QR code through any UPI App(e.g - BHIM,Phone Pay,Google pay,Pay Zaap and Any other UPI)</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-inr"></i></div>
              <h4 class="title"><a href="">Wallet</a></h4>
              <p class="description">Paytm,Freecharge,Mobiwik</p>
            </div>

            <div style="padding-left: 150px; padding-top:50px;">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Request For Receipt
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">QUIZ O MANIA - Donation Receipt</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="add_new_transaction_form">
      <div class="modal-body">

              <!-- <//?php 
                  $idquery=$obj->select_all('transaction ORDER BY transaction_id  desc LIMIT 1');
                  foreach($idquery as $idvalue){
                        $transaction_id=$idvalue['transaction_id'];
                  }
                  
                  $month=date('M');
                  if(empty($transaction_id)){
                      $number="QOM/".$month."/0001";
                  }else{
                      $idd = str_replace("QOM/".$month."?","","$transaction_id");
                      $id = str_pad($idd+1,4,0,STR_PAD_LEFT);
                      $number = "QOM/".$month."/".$id;
                  }
                  
                  ?>-->
                 <!-- <input type="hidden" id="transaction_invoice" class="form-control" placeholder="Enter Invoice Number" name="transaction_invoice" value="<//?php echo $number; ?>" required>-->
               <div class="form-group">
                
                <label for="eventInput6">Person Name<span style="color:red; font-size:20px;">*</span></label>
                <input type="text" id="eventInput6" class="form-control" name="receipt_person_name" placeholder="Enter Person Name" required>
                  </div>
                  <div class="form-group">
                      <label for="eventInput7">Person Email</label>
                      <input type="email" id="eventInput7" class="form-control" name="receipt_person_email" placeholder="Enter Person Email">
                  </div>

                  <div class="form-group">
                      <label for="eventInput2">Phone No<span style="color:red; font-size:20px;">*</span></label>
                      <input type="text" id="eventInput2" class="form-control" placeholder="Enter Phone No" name="person_phno" pattern="[6789][0-9]{9}" required>
                  </div>

                  <div class="form-group">
                      <label for="eventInput3">Amount<span style="color:red; font-size:20px;">*</span></label>
                      <input type="text" id="eventInput3" class="form-control" placeholder="Enter Amount" name="person_amount"  required>
                  </div>

                  
                  <div class="form-group">
                      <label for="eventInput4">Transaction Id</label>
                      <input type="text" id="eventInput4" class="form-control" placeholder="Enter Transaction ID" name="transaction_id">
                  </div>

                  <div class="form-group">
                      <label for="eventInput9">Transaction Date<span style="color:red; font-size:20px;">*</span> </label>
                      <input type="date" id="eventInput9" class="form-control" name="transaction_date" placeholder="Enter date"  required>
                  </div>
                  <div class="form-group">
                    <label for="eventInput12">Payment Mode</label><br><br>
                        <fieldset>
                            <input type="radio" name="transaction_payment_type" id="input-radio-1" value="Cash">
                            <label for="input-radio-1">Cash</label>
                        </fieldset>
                        <div id="range" style="display: none;">
                                                            
                                                            <input type="text" id="eventInput19" class="form-control" name="transaction_To_Whom" placeholder="To Whom"></br>
                                                            </div>
                        <fieldset>
                            <input type="radio" name="transaction_payment_type" id="input-radio-2" value="Cheque">
                            <label for="input-radio-2">Cheque</label>
                        </fieldset>
                        <fieldset>
                            <input type="radio" name="transaction_payment_type" id="input-radio-3" value="Bank Transfer">
                            <label for="input-radio-3">Bank Transfer</label>
                        </fieldset>
                        <fieldset>
                            <input type="radio" 
                            name="transaction_payment_type"
                            id="input-radio-4" value="Online Transfer">
                            <label for="input-radio-4">Online Transfer</label>
                        </fieldset>
                        <fieldset>
                            <input type="radio" 
                            name="transaction_payment_type"
                            id="input-radio-5" value="Other">
                            <label for="input-radio-5">Other</label>
                        </fieldset>
                    </div>

                    <div class="form-group">
                    <label for="eventInput13">Membership Status</label><br><br>
                        <fieldset>
                            <input type="radio" name="membership_status" id="input-radio-1" value="Yes">
                            <label for="input-radio-1">Yes</label>
                        </fieldset>
                        <fieldset>
                            <input type="radio" name="membership_status" id="input-radio-2" value="No">
                            <label for="input-radio-2">No</label>
                        </fieldset>
                        <fieldset>
                            <input type="radio" name="membership_status" id="input-radio-3" value="Already Memeber">
                            <label for="input-radio-3">Already Memeber</label>
                        </fieldset>
                        <fieldset>
                            <input type="radio" 
                            name="membership_status"
                            id="input-radio-4" value="Later">
                            <label for="input-radio-4">Later</label>
                        </fieldset>
                        
                    </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="Submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
            </div>
			
			
			

          </div>

           <img src="https://quizomania.in/wp-content/themes/quizomania/img/upi.jpg" alt="">
        </div>

      </div>
    </section><!-- #about -->

    
  </main>

 
			<!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Quiz-O-Mania</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Designed by <a href="https://bootstrapmade.com/">Sandip Dey</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://quizomania.in/wp-content/themes/quizomania/lib/jquery/jquery.min.js"></script>
  <script src="https://quizomania.in/wp-content/themes/quizomania/lib/jquery/jquery-migrate.min.js"></script>
  <script src="https://quizomania.in/wp-content/themes/quizomania/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://quizomania.in/wp-content/themes/quizomania/lib/easing/easing.min.js"></script>
  <script src="https://quizomania.in/wp-content/themes/quizomania/lib/wow/wow.min.js"></script>
  <script src="https://quizomania.in/wp-content/themes/quizomania/lib/waypoints/waypoints.min.js"></script>
  <script src="https://quizomania.in/wp-content/themes/quizomania/lib/counterup/counterup.min.js"></script>
  <script src="https://quizomania.in/wp-content/themes/quizomania/lib/superfish/hoverIntent.js"></script>
  <script src="https://quizomania.in/wp-content/themes/quizomania/lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="https://quizomania.in/wp-content/themes/quizomania/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="https://quizomania.in/wp-content/themes/quizomania/js/main.js"></script>

   <!-- Include Js -->
   <script type="text/javascript" src="include/core.js"></script>
     <!-- Toastr Js-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
     <script>
         $(document).ready(function(){
         //var selectedValue=document.getElementById("input-radio-1").value;
         //console.log(selectedValue);
        // if(selectedValue=="Cash"){
            $("#input-radio-1").on("click",function(){
             console.log("Hello");
             const range=document.getElementById('range');
             range.style.display = "block";

         });
         $("#input-radio-2").on("click",function(){
             console.log("Hello2");
             const range=document.getElementById('range');
             range.style.display = "none";

         });
         $("#input-radio-3").on("click",function(){
             console.log("Hello3");
             const range=document.getElementById('range');
             range.style.display = "none";

         });
         $("#input-radio-4").on("click",function(){
             console.log("Hello4");
             const range=document.getElementById('range');
             range.style.display = "none";

         });
         $("#input-radio-5").on("click",function(){
             console.log("Hello5");
             const range=document.getElementById('range');
             range.style.display = "none";

         });

         //}else{

         //}
        
        });

    </script>
</body>
</html>
