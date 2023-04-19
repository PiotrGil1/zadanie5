<?php

//login: admin
//haslo: test


include('config.php');
session_start();
$_SESSION['msg']='';

if(!isset($_POST['log'])){
    $_SESSION['msg'] = '';     
}
else{
    if(empty($_POST['username']) || empty($_POST['password'])){
        $_SESSION['msg'] = 'brak nazwy użytkownika lub hasła';
        header('location: index.php');
    }
    else{

        $sql = "SELECT username, password FROM users WHERE username = ? AND password = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('ss', $_POST['username'], $_POST['password']);
        $stmt->execute();
        $wynik = $stmt->get_result();
        $znalezione = $wynik->num_rows;
        
        if($znalezione>0){
            
            $_SESSION['islog'] = TRUE;
            $_SESSION['username'] = $_POST['username'];
            header('location: index.php');
                   
        }
        else{
            $_SESSION['msg'] = 'niepoprawna nazwa użytkownika lub hasło ';
            header('location: index.php');
        }

    } 
}

?>

