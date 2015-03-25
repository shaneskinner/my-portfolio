<!-- 
    Project:		  Shane Skinner's eResume Homepage
    File Name:		navmenu.php
    Author:		    Shane Skinner
    Date Created:	03-13-2014
    Last Revised:	04-22-2014
    Note:		      This is the Navigation Menu for www.shaneskinner.com
-->

<?php
   session_start();
   echo "<nav class='nav-wrap'>
            <ul class='nav'>
               <li><a href='http://www.shaneskinner.com' title='Home'>Home</a></li>
               <li><a href='portfolio.php' title='View my Portfolio'>Portfolio</a></li>
               <li><a href='freelance.php' title='Freelance and Consulting'>Freelance</a></li>
               <li><a href='education.php' title='Education and Certifications'>Education</a></li>
               <li><a href='contact.php' title='Connect with me'>Contact</a></li>
            </ul>
         </nav>";
?>