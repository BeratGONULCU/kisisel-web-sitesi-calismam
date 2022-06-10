<!DOCKTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
                <meta name="viewport" content="width-device-width,inital-scale=1.0">

        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>beratGNLC.com</title>
        
        <link rel="stylesheet" href="../css/style.css" > <!--css dosyası dahil edildi-->
        
        <script src="https://kit.fontawesome.com/40252eb807.js" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="../css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">

    </head>
    <body>
        <!--<button onclick="alert('welcome')">click me</button>    üzerine basıldığında alert içindekini ekrana yazdırır. -->
        
        <section id="menu"> 
            <!--site menüsünde bulunan hakkımda anasayfa gibi tıklanabilir kısımları burada yazı tipini ve sırasıyla yazılmış sırasını belirleyeceğiz.-->
           <div id = "logo">  BERAT  GÖNÜLCÜ</div> <!--sitenin solt üst kısmında bulunan kısmına ne yazılacağı-->
            <nav>
                <ul class="menu">
                    <a href="../img/index.html"><i class="fas fa-home ikon"></i>Anasayfa </a> <!--tırnaklar arasında sona yazılan ikon bir classtır ve menü kısmına yazılı olan anasayfa gibi kısımları düzenlememi sağlayacak.-->
                    <a href="../img/hakkımda.html"> <i class="fas fa-info ikon"></i>Hakkımda </a>
                    <a href="../img/fotoğraflar.html"><i class="fa-thin fa-image-polaroid"></i> Galeri</a>
                    <a href="../img/iletisim.html"><i class="fa-solid fa-phone ikon"></i> İletişim</a>
                    <a href="../img/iletisim.html"><i class="fa-solid fa-phone ikon"></i> Diğer</a>
                    <a href="../img/workShop.html"><i class="fa-solid fa-alien-8bit"></i> Eğlence</a>
            <!--<a href="../img/egitim.html"> <i class="fas fa-graduation-cap ikon"></i>eğitim </a>-->
            <!--<a href="../img/hobiler.html"> <i class="fa-solid fa-bicycle ikon"></i>Hobiler </a>-->
            <!--<a href="../img/aileagacı.html"> <i class="fas fa-user-friends ikon"></i>aile ağacı </a>-->
            <!--<a href="../img/sehrim.html"> <i class="fas fa-map-pin ikon"></i>şehrim </a>-->
        </ul>
            

            </nav>
        </section>
        
        <section id ="anasayfa">
        <div id="black">
           
            </div>
        <div id = "içerik">
            <hr2>RESİM HAKKINDA</hr2>
            <hr width = 300 align = left >
            <p>
                bandırma sahil iskele <br>
                3 mart 2022 <br>
            </p>
            </div>
          
        </section>

        <!--bu section kısmında arka planı gri yapmak için html kısmını hallettik.
        sectionlar blok etiket olduğu için varsayılan olarak genişlik olarak tüm ekranı kaplarlar.-->

        <div id="mailbutton">
        
        <button onclick="typeWriter()">tıklayın</button>

        </div>
        <footer>
            <p id="mail">      
            </p>
        </footer>

        <!-- <a href="../php/googlemaps.php">tıkla</a> -->

        <!-- <section id="googlemaps">
        <form method="POST">
            <p>
                <input type="text" name="address" placeholder="Enter address">
            </p>
         
            <input type="submit" name="submit_address">
        </form>
        
        <form method="POST">
            <p>
                <input type="text" name="latitude" placeholder="Enter latitude">
            </p>
         
            <p>
                <input type="text" name="longitude" placeholder="Enter longitude">
            </p>
         
            <input type="submit" name="submit_coordinates">
        </form> -->

</section>

    <div id="buttonsure">
    <button onclick="setTimeout(yazdir,3000)">süre başlat</button>
    </div>

    </body>
    
    <script>
        /*yazı belirli bir sürede geliyor.*/
        var i = 0;
        var txt = 'sitemize üye olmak için ogonulcu@gmail.com mail atmanız yeterlidir.';
        txt = txt.toUpperCase();
        var speed = 100;
        function typeWriter() {
        if (i < txt.length) {
        document.getElementById("mail").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
            }
        }   

        function yazdir(){
            window.alert("süre doldu");
        }
            </script>   

            
            
</html>

<?php
    if (isset($_POST["submit_address"]))
    {
        $address = $_POST["address"];
        $address = str_replace(" ", "+", $address);
        ?>
 
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
 
        <?php
    }


    if (isset($_POST["submit_coordinates"]))
    {
        $latitude = $_POST["latitude"];
        $longitude = $_POST["longitude"];
        ?>
 
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
 
        <?php
    }
?>

<section id="phpform" >
<form method="POST">
    <p>
        <input type="text" name="address" placeholder="Enter address">
    </p>
 
    <input type="submit" name="submit_address">
</form>

<form method="POST">
    <p>
        <input type="text" name="latitude" placeholder="Enter latitude">
    </p>
 
    <p>
        <input type="text" name="longitude" placeholder="Enter longitude">
    </p>
 
    <input type="submit" name="submit_coordinates">
</form>
</section>




