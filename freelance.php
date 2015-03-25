<!DOCTYPE html>
<html lang="en">
  <head>
<!-- 
    Project:          Shane Skinner's Freelancer Page
    File Name:        freelance.php
    Author:           Shane Skinner
    Date Created:     03-26-2014
    Last Revised:     04-21-2014
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
                                   new london, hartford, connecticut, providence, westerly, coventry, rhode, island" />
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

    <title>Shane Skinner</title>
  </head>

  <body>
    <header>
      <aside><?php include "php/mypic.php";?></aside>
      <aside><?php include "php/navmenu.php";?></aside>
      <h1>Shane Skinner's eResume</h1>
    </header>

    <section class="main">
      <article class="freelance">
        <h2>I am available for contract work</h2>

        <h2 class="mainheadings">Freelance</h2>
        <p>While I continue searching for the right full-time employment opportunity, I am available for freelance and 
           contract opportunities. I can assist you in the following areas:</p>
        <ul>
          <li>Web Design and Development</li>
          <li>Create/Maintain a WordPress site</li>
          <li>Register and Host your Domain</li>
        </ul>

        <h2 class="mainheadings">Consulting</h2>
        <p>I also have over 15 years of knowledge and experience in the sales and customer service industry and am available to 
           consult in the following areas:</p>
        <ul>
          <li>Sales Training</li>
          <li>Customer Service Training</li>
          <li>Supervisor/Leadership Training</li>
        </ul>
      </article>
      
      <p class="contact">Please contact me at 

        <script type="text/javascript">
          showEM("enahs", "moc.renniksenahs");
        </script>

        to discuss your needs.</p>
    </section>

    <footer>
      <?php include "php/footer.php";?>
    </footer>
  </body>
</html>