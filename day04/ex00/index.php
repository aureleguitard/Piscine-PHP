<?php 
    session_start();
    
    if (isset($_GET['submit']))
    {
        if ($_GET['submit'] == 'OK')
        {
            // setcookie($_GET['login'], hash($_GET['passwd']));
            $_SESSION['login'] = $_GET['login'];
            $_SESSION['passwd'] = $_GET['passwd'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
    <form action="index.php" method="GET">
        Username: <input type="text" placeholder="Enter Username" name="login" value="<?php echo $_SESSION['login'];?>">
        <br>
        Password: <input type="password" placeholder="Enter Password" name="passwd" value="<?php echo $_SESSION['passwd']; ?>">
        <br>
        <input type="submit" value="OK" name='submit'>
    </form>
</body>
</html>