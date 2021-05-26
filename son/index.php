<?php
   include('connection.php');
 ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8" />
    <title>GİRİŞ YAP</title>
    <link rel="stylesheet" href="styleSheet2.css" />
</head>
<body>
    <div class="login">
            <div class="app-title">
                <h1>GİRİŞ YAP </h1>
            </div>
            <form action="login.php" method="post">
                <div class="login-form">
                    <div class="control-group">
                        <input type="text" name="username" class="login-field" placeholder="Kullanıcı Adı" id="login-name">
                        <label class="login-field-icon fui user" for="login-name"></label>
                    </div>
                    <br/>
                    <div class="control-group">
                        <input type="password" name="password" class="login-field" placeholder="sifre" id="login-pass">
                        <label class="login-field-icon fui user" for="login-pass"></label>
                    </div>
                    <button href="login.php" class="btn btn-primary btn-large  btn-block">GiRİŞ YAP</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>


