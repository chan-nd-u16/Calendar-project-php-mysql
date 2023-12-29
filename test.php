<html>
    <body>
        <script>
            var myJavascriptVar = 12345;
           
        </script>
        <script> document.cookie = "myJavascriptVar = " + myJavascriptVar </script>
        <?php
             $myPhpVar= $_COOKIE['myJavascriptVar'];
             echo $myPhpVar;
        ?>
     </body>
</html>