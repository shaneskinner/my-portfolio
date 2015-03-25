function showEM(userName, emServer) {
   userName = stringReverse(userName);
            emServer = stringReverse(emServer);
            var at = "@";
            var emLink = userName + at + emServer;

            document.write("<a href='mailto:" + emLink + "'>");
            document.write(emLink);
            document.write("</a>");
         }