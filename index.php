<?php


session_start();
if(isset($_POST['logout'])){
    $_SESSION['islog'] = FALSE;
    $_SESSION['msg'] = ' ';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekran logowania</title>
</head>
<body>


<?php

if($_SESSION['islog']) { 
    $_SESSION['msg'] = "Witaj ".$_SESSION['username'];
?>
<form action="" method="post">
    <input type="submit" name='logout' value="wyloguj się">
</form>
<?php
     
}
else {
?>
<form action="login.php" method="post">
        <input type="text" name='username' placeholder="username">
        <input type="text" name='password' placeholder="password">
        <input type="submit" name='log' value="zaloguj się">
    
</form>
<?php
}
?>

<p><?=$_SESSION['msg'];?></p>

</body>
</html>