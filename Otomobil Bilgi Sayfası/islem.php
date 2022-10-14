<?php 

ob_start();
session_start();

require 'baglan.php';

if(isset($_POST['kayit'])){
	$username= $_POST['username'];
	$password= $_POST['password'];
	$password_again= @$_POST['password_again'];

	if(!$username){
		echo "Lütfen kullanıcı adınızı giriniz";
	} elseif (!$password || !$password_again){
		echo "Lütfen şifrenizi giriniz";
	} elseif ($password != $password_again){
		echo "Girdiğiniz şifreler birbiriyle aynı değil";
	} else{
		//veritabanı kayıt işlemi
		$sorgu = $db->prepare('INSERT INTO users SET user_name = ?, user_password = ?');
		$ekle = $sorgu->execute([
				$username, $password
		]);
		
		if ($ekle){
			echo "Kayıt Başarıyla Gerçekleşti";
			header('Refresh:30, index.php');
		} else{
			echo"Bir hata oluştu,Tekrar Kontrol Edin";
		}
	}
}

if (isset($_POST['giris'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (!$username){
		echo "Kullanıcı Adınızı Giriniz";
	} elseif(!$password){
		echo "Şifrenizi Girin";
	} else{
		$kullanici_sor = $db->prepare('SELECT * FROM users WHERE user_name = ? || user_password = ?');
		$kullanici_sor->execute([
			$username , $password 

		]);

		$say = $kullanici_sor->rowCount();
		if ($say==1) {
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
			echo "Başarıyla Giriş Yapıldı";
			header('Refresh:2; index.php');
		} else{
			echo "Bir Hata Oluştu Tekrar Kontorl Ediniz";
		}
	}

}


?>