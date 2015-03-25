<!-- 
    Project:        Shane Skinner's eResume Homepage
    File Name:		footer.php
    Author:		    Shane Skinner
    Date Created:	03-13-2014
    Last Revised:	04-22-2014
    Note:           This is the Footer for www.shaneskinner.com
-->

<?php
   session_start();
   echo "<aside>I am available for full-time employment and contract opportunities.</aside>
         <br />

         <aside>Please email me at 
            <script type='text/javascript'>
              showEM('enahs', 'moc.renniksenahs');
            </script>
        to discuss your needs.</aside>
        <br />

        <aside class='webLogo'>
          <a href='http://www.w3.org/html/logo/'>
            <img src='http://www.w3.org/html/logo/badge/html5-badge-h-css3-semantics.png' width='165' height='64' 
             alt='HTML5 Powered with CSS3 / Styling, and Semantics' 
             title='HTML5 Powered with CSS3 / Styling, and Semantics'></a>
          <a href='http://jigsaw.w3.org/css-validator/check/referer'><img style='border:0;width:88px;height:31px' 
             src='http://jigsaw.w3.org/css-validator/images/vcss-blue' alt='Valid CSS!' /></a></aside>";
?>

    <!-- Google Analytics -->
    <?php include_once("analyticstracking.php") ?>
