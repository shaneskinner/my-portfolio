<!DOCTYPE html>
<html lang="en">
  <head>
<!-- 
    Project:          Shane Skinner's eResume Education and Certifications Page
    File Name:        education.php
    Author:           Shane Skinner
    Date Created:     04-02-2014
    Last Revised:     04-01-2015
    Version:          2.0
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
                                   seeker, freelance, freelancer, Cape Cod, Cape, Cod, Hyannis, Barnstable, Fall River, 
                                   New Bedford, Massachusetts, MA" />
    <meta name="geo.region" content="US-MA" />
    <meta name="geo.placename" content="Hyannis" />
    <meta name="geo.position" content="41.655011;-70.278398" />
    <meta name="ICBM" content="41.655011, -70.278398" />

<!-- Link to CSS Files -->
    <link href="css/main_styles.css" rel="stylesheet" type="text/css" />
    <!--[if IE]>
      <link href="css/ie.css" rel="stylesheet" type="text/css" /> 
    <![endif]-->

    <title>Shane Skinner's eResume</title>
  </head>

  <body>
    <header>
    	<aside><?php include "php/mypic.php";?></aside>
      <aside><?php include "php/navmenu.php";?></aside>
    	<h1>Shane Skinner's Education</h1>
    </header>

    <section class="main">
    	<article>
    		<h2 class="mainheadings">University</h2>
            <h3 class="eduHeading">Associate's of Science Computer Information Technology Degree</h3>
            <h4 class="eduHeading">Earned Summa Cum Laude highest honors with a <em>3.9 GPA</em></h4>
            <figure class="snhu">
                <a href=http://www.snhu.edu/presidents-list.aspx?utm_source=SNHU&utm_medium=socialmedia&utm_content=A00991&utm_campaign=Badges&snhu_segment=ALL target="_blank">
               <img src="http://www.snhu.edu/images/PresidentsList.jpg" alt="President's List at SNHU" /></a>
               <figcaption>I made the Presidents list every semester at SNHU</figcaption>
            </figure>
            
    		<p id="courses">I earned an A.S. CIT with a focus on Software Development from Southern New Hampshire University in 2013.
           During this time I successfully completed courses in:</p>
                <ul class="eduList">
                  <li>Web Development:</li>
                    <ul class="slashBullets">
                      <li>HTML5</li>
                      <li>XHTML</li>
                      <li>CSS3</li>
                      <li>JavaScript</li>
                    </ul>
                  <li>Programming:</li>
                    <ul class="slashBullets">
                      <li>Java</li>
                      <li>C++</li>
                      <li>Visual Basic</li>
                    </ul>
                </ul>
            <p>In addition to those software courses, I completed several other technology courses.</p>
    	</article>
    	<article>
    		<h2 class="mainheadings">Certifications &amp; Training</h2>
    		<ul class="eduList slashBullets">
    		  <li>HTML5 and CSS3 Fundamentals - <span class = "italics">Microsoft Virtual Academy</span></li>
    		  <li>Developing in HTML5 with JavaScript and CSS3 - <span class = "italics">Microsoft Virtual 
              Academy</span></li>
          <li>Creating Responsive Web Design - <span class = "italics">Udemy</span></li>
          <li>Getting Started with Google Analytics - <span class = "italics">Udemy</span></li>
          <li>Using Chrome Developer Tools - <span class = "italics">Udemy</span></li>
          <li>HTML5: Structure, Syntax, and Semantics - <span class = "italics">Lynda.com</span></li>
          <li>GitHub for Web Designers - <span class = "italics">Lynda.com</span></li>
          <li>JavaScript and JSON - <span class = "italics">Lynda.com</span></li>
          <li>JavaScript and AJAX - <span class = "italics">Lynda.com</span></li>
          <li>Up and Running with AngularJS - <span class = "italics">Lynda.com</span></li>
    	  </ul>
    	</article>
    </section>

    <footer>
      <?php include "php/footer.php";?>
    </footer>

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
  </body>
</html>