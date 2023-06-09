<?php
setcookie("test_cookie","test", time() + 3600);?>
    <html>
    <body>
    <?php
    if(count($_COOKIE) >0) {echo"Cookies are enabled.";
    }else{ echo"Cookies are disabled."; }?>
    </body>
    </html>
<?php
echo '<h3 style="background: #c8bbc9"> Chapter 13 Slide 16 </h3>';

// Starting session
session_start();
// Removing session data
if(isset($_SESSION["lastname"])){
    unset($_SESSION["lastname"]);
}
