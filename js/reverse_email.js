/*
   stringReverse Function originally created by: New Perspectives on HTML and CSS
   Used to reverse the order of characters in a text string
*/

function stringReverse(textString) {
   if (!textString) return '';
   var revString='';
   for (i = textString.length-1; i>=0; i--)
       revString+=textString.charAt(i)
   return revString;
}


/*
   showEM function helps prevent spam by allowing an email address to be typed in the web page source code backwards but rendered correctly on the page.

   In addition to adding this script onto the site, call the function with two parameters (email name, domain) typed backwards.
   For example:
               <script type="text/javascript">
                  showEM("enahs", "moc.renniksenahs");
               </script>
*/

      <script type="text/javascript"> 
         function showEM(userName, emServer) {
            userName = stringReverse(userName);
            emServer = stringReverse(emServer);
            var at = "@";
            var emLink = userName + at + emServer;

            document.write("<a href='mailto:" + emLink + "'>");
            document.write(emLink);
            document.write("</a>");
         }
      </script>