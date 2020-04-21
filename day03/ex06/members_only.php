<?php
    // header ("Content-Type: text/plain");
    // header ("Content-Type: image/png");

    if ($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == 'jaimelespetitsponeys') 
    {
        $str = file_get_contents('img/42.png');
        $str = base64_encode($str);
?>
        <html><body>
        Hello Zaz<br />
        <img src='data:image/png;base64,<?php echo '$str'; ?>'>
        </body></html>
<?php 
    }
    else
    {
        header("WWW-Authenticate: Basic realm=''Member area''");
        header("HTTP/1.0 401 Unauthorized");
?>
<html><body>That area is accessible for members only</body></html>
<?php
    }
?>
