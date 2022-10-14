<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BRKCAR-Otomobil Hakkında Herşey</title>
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
		<h2 style="color: white;" class="sectionHeader"> İLETİŞİM</h2>
	</div>
</section>

<section id= "iresim" class="resim">
	<div id = "anabaşlık" class="başlık">
		

		<div class="">
			<form action="iletisimbaglantı.php" method="POST" class="form-style"
			 method="POST" action="iletisimbaglantı.php">
			 <?php if (isset($_GET['success']) ): ?>
				<div class="alert alert-success"> MESAJINIZ BAŞARIYLA İLETİLDİ </div><br>	

			<?php endif ?>
			
				<ul>
				<li>
					<input type="text" max length="25" name="isim" class="alan-stili bolunmus-alan sola-hiza" placeholder="İsim" required="" />
					<input type="email" name="email" class="alan-stili bolunmus-alan saga-hiza" placeholder="Email" required="" />
 
				</li>
				<li>
					<input type="text" name="telefon" class="alan-stili bolunmus-alan sola-hiza" placeholder="Telefon" />
					<input type="url" name="websitesi" class="alan-stili bolunmus-alan saga-hiza" placeholder="Web Sitesi" />
				</li>
				<li>
				<input type="text" name="konu" class="alan-stili tum-alan " placeholder="Konu" />
				</li>
				<li>
					<textarea name="mesaj" maxlength="500" class="alan-stili" placeholder="Mesaj"></textarea>
				</li>
				<li>
				<input type="submit" value="Gönder" />
				</li>
				</ul>
			</form>
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