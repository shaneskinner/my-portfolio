<!DOCTYPE html>
<html lang="en">
  <head>
<!-- 
    Project:          Shane Skinner's Portfolio
    File Name:        portfolio.php
    Author:           Shane Skinner
    Date Created:     03-26-2014
    Last Revised:     04-01-2015
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
    <link href="css/portfolio_styles.css" rel="stylesheet" type="text/css" />
    <!--[if IE]>
      <link href="css/ie.css" rel="stylesheet" type="text/css" /> 
    <![endif]-->

    <title>Shane Skinner's Portfolio</title>
  </head>

  <body>
    <header>
      <aside><?php include "php/mypic.php";?></aside>
      <aside><?php include "php/navmenu.php";?></aside>
      <h1>Shane Skinner's Portfolio</h1>
    </header>

    <section class="main">
      <h2>Here are some samples of my work:</h2>

      <article>
        <a href="http://www.adaflerphotography.com" title="Amanda Dafler's Photography Website" target="_blank">
          <h3>www.ADaflerPhotography.com</h3></a>
        <blockquote>I created a responsive website for an aspiring photographer. This site utilizes a JQuery slideshow 
                    on the homepage and an open source JQuery plug-in called prettyPhoto for an onclick activated pop-up 
                    box with a larger version of the photo (including a brief description) on the photo gallery page. 
                    I also created large navigation menu links to better accommodate mobile and tablet users. The site is 
                    W3C validated and cross-browser compatibility has been tested.</blockquote>
        <iframe src="http://www.adaflerphotography.com" name="adaflerphotography" height = 600px width = 100%>
                adaflerphotography.com</iframe>
      </article>

      <article>
        <a href="http://www.ShellsCakes.com" title="www.shellscakes.com" target="_blank"><h3>www.shellscakes.com</h3></a>
        <blockquote>I redesigned and developed a website for a small cake-decorating business. The site utilizes a 
                    background created by a graphic designer and several photos of cakes and other products. Cross-browser 
                    compatibility has been tested.</blockquote>
        <div class="portfolioImg" id="shellscakes"></div>
      </article>

      <article>
        <a href="http://www.ClutteredDesk.com" title="www.cluttereddesk.com" target="_blank">
           <h3>www.cluttereddesk.com</h3></a>
        <blockquote>I developed a WordPress blog for a couple of world travelers. They desired a simple site that allows 
                    them to share pictures and articles regarding their adventures and a page to discuss wine and share 
                    their ratings and feedback from their Vivino account.</blockquote>
        <iframe src="http://www.cluttereddesk.com" name="cluttereddesk" height= 600px 
                width= 100%>ClutteredDesk.com</iframe>
      </article>

      <article>
        <a href="http://www.shaneskinner.com" title="www.shaneskinner.com"><h3>www.ShaneSkinner.com</h3></a>
        <blockquote>I created this personal portfolio to serve as an eResume. This is v2.0 which was designed with a 
                    simplistic look and feel while showcasing some of my HTML5 and CSS3 capabilities. The site is 
                    cross browser functional and responsively designed.</blockquote>
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