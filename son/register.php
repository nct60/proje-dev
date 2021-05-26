<?php      
    include('connection.php');  

    if (isset($_REQUEST['username'])) {        
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $query    = "insert into 'users' (username, password, email) VALUES ('$username', '" . $password . "', '$email')";
        $result   = mysqli_query($con, $query);

        if ($result) {
            echo "Kayıt Başarılı.";
        } else {
            echo "Kayıt Başarısız.";
        }
    } 
?>  