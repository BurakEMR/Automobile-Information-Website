


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Giriş Yap</title>
	
	<link rel="stylesheet" type="text/css" href="otostyle.css">
	<link rel="stylesheet" type="text/css" href="font-awesome.min.css">
    
	
</head>
<body>
	<div class= "container">
    <div class="navbar">
        <div class="logo">
            <a href="Otomobil_Bilgi_Sayfası.html"><img src = "img/logo4y.png" alt= "logo" width="350" height="200"></a>
        </div>
        <ul>
            <li><a href="Otomobil_Bilgi_Sayfası.html"target="" class="active">ANASAYFA</a>
            <li><a href="haberler.html"target="_self"class="active">HABERLER</a>
            <li><a href="OtomobilMarkaları.html" target="_self">OTOMOBİL MARKALARI</a></li>
            <li><a>VİDEOLAR</a>
                <div class= "sub-menu-1">
                    <ul>
                        <li><a href="testsürüsleri.html">Test Sürüşleri</a></li>
                                            
                    </ul>
                </div>
        
            <li><a href="fotogaleri.html" target="_self">FOTO GALERİ</a></li>
            <li><a href="login.php" target="_self">ARABA İLANLARI</a></li>
            <li><a href="iletisim.php" target="_self">İLETİŞİM</a></li>
        </ul>
        <i class= "fa fa-bars"></i>
    </div>
</div>



 <section id= "features" class="sectionArea">
    <div class="captionTop">
        <h2 style="color: white;" class="sectionHeader"> ARABA İLANI EKLE</h2>
    </div>
</section>

<section id= "iresim" class="resim">
    <div id = "anabaşlık" class="başlık">
        <div class="form-style" >
                <div class="içerik">
                    <form action="kayit2.php"method="post" enctype="multipart/from-data">
                            <h2 style="color: white;">İlan Başlık :</h2> <input type="text" name="baslik"><br />
                            <h2 style="color: white;">Marka :</h2> <input type="text" name="marka"><br />
                            <h2 style="color: white;">Model :</h2> <input type="text" name="model"><br />
                            <h2 style="color: white;">Yıl :</h2><input type="text" name="yıl"><br/> 
                            <h2 style="color: white;">Km: </h2><input type="text" name="km"><br/>
                            <h2 style="color: white;">Fiyat: </h2><input type="text" name="fiyat"><br/>
                            
                            <br>
                            <ul>
                                <li>
                                    <input type="submit"onclick="location='kayit2.php'" value="Ekle" >
                                </li>
                            </ul>
                        </form>
                </div>
        </div>

    </div>
</section>


<hr>
<footer class="sectionArea">
        <div class="container2">
            <div class="col3">
                <div class="footerItem">
                    <h2 style="color: white;">BİZİ TAKİP EDİN</h2>
                    <ul class="socialLinks">
                        <li><a href="#"><i class=" fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class=" fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class=" fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class=" fa fa-youtube"></i></a></li>
                    </ul>
                    <p style="color: white;">2021,BU SİTENİN TÜM HAKLARI SAKLIDIR.</p>
                    
                </div>
                
            </div>

        </div>
        



</footer>
	
    
</body>
</html>

