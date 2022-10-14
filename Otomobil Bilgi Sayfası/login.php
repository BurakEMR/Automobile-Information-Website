<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Giriş Yap</title>
	<link rel="stylesheet" type="text/css" href="nstyle.css">
</head>
<body>

	<div class= "login">
		<div class="login-screen">
			<div class="app-title">
				<a href="Otomobil_Bilgi_Sayfası.html"><img src = "img/logo4y.png" alt= "logo" width="275" height="200"></a>
				<h1>LÜTFEN GİRİŞ YAPINIZ</h1>


			</div>
		<form action="islem.php" method="post">
			<div class= "login-form">
				<div class="control-group">
					<input type="text" name="username" class=" login-field" placeholder="Kullanıcı Adı" id="login-name">
					<label class="login-field-icon fui-user" for= login-name></label>

				</div>
				<div class="control-group">
					<input type="password" name="password" class=" login-field" placeholder="Şifre" id="login-pass">
					<label class="login-field-icon fui-user" for= login-pass></label>
					
				</div>
			</div>
				<button href="arabailanları.html" target="_blank" name="giris" class="btn btn-primary btn-large btn-block">Giriş Yap </button>
				
		</form>
		<a href="kayit.php"><button class="btn btn-primary btn-large btn-block">Kayıt Ol </button></a>
		</div>
		
		</form>
	</div>
		
</div>

</body>
</html>