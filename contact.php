<!DOCTYPE html>
<html lang="en">
  <head>
<!-- 
    Project:          Shane Skinner's eResume Contact Page
    File Name:        contact.php
    Author:           Shane Skinner
    Date Created:     04-02-2014
    Last Revised:     04-22-2014
    Version:          2.0
-->

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,400italic' rel='stylesheet' 
      type='text/css'>

<!-- Meta Data -->
    <meta charset="UTF-8" />
    <meta name="author" content="Shane Skinner" />
    <meta name="description" content="Web Developer Shane Skinner's eResume website." />
    <meta name="keywords" content="Web, Developer, Designer, Software, Website, HTML, HTML5, CSS, CSS3, JavaScript, JS, 
                                   JQuery, PHP, WordPress, WP, Domain, Host, eResume, resume, hire, me, job, seeker, 
                                   freelance, freelancer, ledyard, preston, montville, uncasville, norwich, groton, 
                                   new london, hartford, connecticut, providence, westerly, coventry, rhode, island, 
                                   education, certification, college, Southern New Hampshire University" />
    <meta name="geo.region" content="US-CT" />
    <meta name="geo.placename" content="Ledyard" />
    <meta name="geo.position" content="41.4794;-72.0432" />
    <meta name="ICBM" content="41.4794, -72.0432" />

<!-- Link to CSS Files -->
    <link href="css/main_styles.css" rel="stylesheet" type="text/css" />
    <!--[if IE]>
      <link href="css/ie.css" rel="stylesheet" type="text/css" /> 
    <![endif]-->

<!-- Link to JavaScript Files -->
    <script src="js/modernizr.js" type="text/javascript"></script>
    <script src="js/stringReverse.js" type="text/javascript"></script>
    <script src="js/showEm.js" type="text/javascript"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

    <script type="text/javascript">
      jQuery(document).ready(function($){

        /* prepend menu icon */
        $('.nav-wrap').prepend('<div id="menu-icon">Menu</div>'); 

        /* toggle nav */
        $("#menu-icon").on("click", function(){
          $(".nav").slideToggle();
          $(this).toggleClass("active");
        });
      });
    </script>

    <title>Contact Shane</title>
  </head>

  <body>
    <header>
    	<aside><?php include "php/mypic.php";?></aside>
      <aside><?php include "php/navmenu.php";?></aside>
    	<h1>Connect with Shane</h1>
    </header>

    <section class="main">
    	<article>
    		<h2 class="mainheadings">E-mail</h2>
          <h4 class="contact">Feel free to write to me at 
            <script type='text/javascript'>
              showEM('enahs', 'moc.renniksenahs');
            </script>
          </h4>
    	</article>
    	<article>
    		<h2 class="mainheadings">Social Media</h2>
        <h4 class="contact">Or connect with me on Social Media</h4>
          <aside class="flex-container">
            <nav class="sm flex-item">
              <a href="http://www.linkedin.com/in/shaneskinner696" target="new"><img src="images/sm/linkedin.jfif" 
                 alt="View my LinkedIn Profile" /></a>
              <a href="http://twitter.com/shaneskinner" target="new"><img src="images/sm/twitter.jfif" 
                 alt="Follow Me on Twitter" /></a>
              <a href="http://www.google.com/+ShaneSkinner696" target="new"><img src="images/sm/googleplus.jfif" 
                 alt="Hangout on Google +" /></a>
            </nav>
          </aside>
    	</article>
    </section>

    <footer>
      <?php include "php/footer.php";?>
    </footer>
  </body>
</html>