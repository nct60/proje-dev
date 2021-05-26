<!DOCTYPE html>

<html lang="tr">
<head>
    <meta charset="utf-8" />
    <title>İLETİŞİM</title>
    <link rel="stylesheet" href="styleSheet2.css" />
</head>




<body>
    <div id="social">
        <font>ERBAA </font>
    </div>
    <div id="container">
        <section>
            <nav>
                <ul>
                    <li><a href="ANASAYFA.html">ANASAYFA </a> </li>
                    
                    <li><a href="cv.html">ÖZGEÇMİŞ </a> </li>
                    <li><a href="ERBAATARİH.html">ERBAA TARİHİ </a> </li>
                    <li><a href="erbaa.html">ERBAA </a> </li>
                    <li><a href="erbaayaprak.html">ERBAA YAPRAĞI </a> </li>
                    <li><a href="KEBAB.html">TOKAT KEBABI </a> </li>
                    <li><a href="ERBAASPOR.html">ERBAASPOR </a> </li>
                 
                    <li><a href="iletisim.php">İLETİŞİM</a> </li>
                </ul>




            </nav>



            <main>
                  <form method="POST" action="gonder.php">
                          <table>
                              <tr>
                                  <td>ad:</td>
                                  <td> <input type="text" name="ad"></td>
                              </tr>


                              <tr>
                                  <td>soyad</td>
                                  <td> <input type="text" name="soyad"></td>
                              </tr>



                          </table>
                          <table>
                              MESAJINIZ
                              <br />
                              <tr>
                                  <textarea name="mesaj" id="" cols="30" rows="10"> </textarea>
                              </tr>
                          </table>
                          <br />
                          <input type="radio" name="cinsiyet" value="erkek" checked>Erkek<br>
                          <input type="radio" name="cinsiyet" value="kadin">Kadın
                          <br />
                          <input type="submit" value="GÖNDER">
                          <input type="reset" value="TEMİZLE">

                      


                   </form>
    


       

             </main>

       </section>
        <footer>proje ödevi</footer>
    </div>


</body>



</html>
