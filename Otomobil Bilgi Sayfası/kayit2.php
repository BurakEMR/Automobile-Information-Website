<?php 

require_once 'ayar.php';

if(isset($_POST)){
	$baslik= $_POST['baslik'];
	$marka= $_POST['marka'];
	$model= $_POST['model'];
	$yıl= $_POST['yıl'];
	$km= $_POST['km'];
	$fiyat= $_POST['fiyat'];

	if(!$baslik || !$marka || !$model || !$yıl || !$km || !$fiyat ){
		echo "Bu Alanlar Boş Bırakılamaz";
	} else{
		$sorgu = $db->prepare('INSERT INTO ilanlar SET
			baslik = ?,
			marka = ?,
			model = ?,
			yıl = ?,
			km = ?,
			fiyat = ?');

		$ekle = $sorgu->execute([
				$baslik,
			    $marka ,
			    $model ,
			    $yıl ,
			    $km,
			    $fiyat
				]);
		

		if($ekle){
			echo 'İlan Başarıyla eklendi';
			header('Refresh:1, index.php');
		}else{
			echo 'Bir Sorun Oluştu. Kontrol Ediniz!';
		}
	}
}
