<?php
    // Yerel DB için 127.0.0.1 veya localhost -> xampp veya wamp server kullanılabilir.
    $host = "localhost";  
    // DB kullanıcı adı
    $user = "root";  
    // DB Password
    $password = '';
    // DB Name
    $db_name = "odev";  
    // DB Bağlantısı
    $con = mysqli_connect($host, $user, $password, $db_name);  
    // Bağlantı Hata Verirse
    if(mysqli_connect_errno()) {  
        die("DB Bağlantı Hatası: ". mysqli_connect_error());  
    }  


    // DB Nasıl Olacak
    /* 
    *  Tablo Adı = users olacak ve tablodakı stunlar aşağıdaki gibi olarak;
    *  username (varchar)
    *  password (varchar)
    *  email    (varchar)
    */


    /*
    DROP TABLE IF EXISTS `users`;
    CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(191) COLLATE utf8_turkish_ci NOT NULL,
    `password` varchar(191) COLLATE utf8_turkish_ci NOT NULL,
    `email` varchar(191) COLLATE utf8_turkish_ci NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
    COMMIT;
    */
?>  