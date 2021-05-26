<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
    //SQL injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
      
    //SQL Sorgusu 
    $sql = "select * from users where username = '$username' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
          
    if($count == 1){  
        //Session başlatır.
        session_start();

        echo "<h1> Giriş Yapıldı. </h1>";  
    }  
    else{  
        echo "<h1> Kullanıcı adı veya şifre hatalı. </h1>";  
    }     
?>  