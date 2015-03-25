<!DOCTYPE html>
<html lang="en">
  <head>
<!-- 
    Project:          Shane Skinner's eResume Homepage
    File Name:        index.php
    Author:           Shane Skinner
    Date Created:     03-13-2014
    Last Revised:     04-22-2014
    Version:          2.0.2
-->

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,400italic' rel='stylesheet' 
      type='text/css'>

<!-- Meta Data -->
    <meta charset="UTF-8" />
    <meta name="author" content="Shane Skinner" />
    <meta name="description" content="Web Developer Shane Skinner's eResume website." />
    <meta name="keywords" content="Web, Developer, Designer, Software, Website, HTML, HTML5, CSS, CSS3, JavaScript, 
                                   JS, JQuery, PHP, WordPress, WP, Domain, Host, eResume, resume, hire, me, job, 
                                   seeker, freelance, freelancer, Ledyard, Gales Ferry, Preston, Montville, Uncasville, 
                                   Norwich, Groton, New London, Hartford, Connecticut, Providence, Westerly, Coventry, 
                                   Warwick, Rhode, Island, Cape, Cod, Hyannis, Barnstable, Fall River, New Bedford, 
                                   Massachusetts, MA, CT, RI" />
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

    <title>Shane Skinner's eResume</title>
  </head>

  <body>
    <header>
        <aside><?php include "php/mypic.php";?></aside>
        <aside><?php include "php/navmenu.php";?></aside>
    	  <h1>Shane Skinner's eResume</h1>
    </header>

    <section class="main">
    	<article>
    		<h2 class="mainheadings">Front-End Web Developer</h2>
    		<p>Front-End Web Developer with experience coding, testing, debugging, and launching responsive websites 
           that include cross-browser functionalities looking for a full-time opportunity within an organization 
           that has a good team-oriented learning environment.</p>
    	</article>
    	<article>
    		<h2 class="mainheadings">Skills and Qualifications</h2>
    		<ul class="slashBullets">
    		  <li>Experience developing with HTML5, XHTML, CSS3, JavaScript, JQuery, and PHP.</li>
    		  <li>Educated in programming languages such as Visual Basic, C++, and Java.</li>
              <li>Experience developing cross-browser functional sites.</li>
    		  <li>Utilize responsive design practices to create a good user experience on varying screen sizes.</li>
    		  <li>Utilize current W3C standards and validation services to ensure code is compliant.</li>
    	    </ul>
    	</article>
    	<article>
    	  <h2 class="mainheadings"><a href="http://www.shaneskinner.com/portfolio.php" 
              title="Shane's Portfolio">View My Portfolio</a></h2>
    	  <p>Check out my portfolio for examples of my work!</p>
    	</article>
    </section>

    <footer>
      <?php include "php/footer.php";?>
    </footer>
  </body>
</html>