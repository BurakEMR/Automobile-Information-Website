<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	require 'baglan.php';

	if($_POST)
	{
		$isim = $_POST['isim'];
		$email = $_POST['email'];
		$telefon = $_POST['telefon'];
		$websitesi = $_POST['websitesi'];
		$konu = $_POST['konu'];
		$mesaj = $_POST['mesaj'];
	
		header("Location:iletisim.php?success=1");
		header('Refresh:5; iletisim.php');

		$sorgu = $db->prepare('INSERT INTO iletişim SET isim = ?, email = ?, telefon = ?, websitesi =?, konu =?, mesaj=?');
		$ekle = $sorgu->execute([
			$isim,
			$email,
			$telefon,
			$websitesi,
			$konu,
			$mesaj
			]);

		

		
		require 'PHPMailer/src/Exception.php';
		require 'PHPMailer/src/PHPMailer.php';
		require 'PHPMailer/src/SMTP.php';

		$mail = new PHPMailer(true);

		try {
    	
	    	$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
	   		$mail->isSMTP();                                            
	    	$mail->Host       = 'smtp.localhost';    

	    	$mail->SMTPAuth   = true;                                   
	    	$mail->Username   = 'projedeneme22@localhost';                    
	   		$mail->Password   = '123456';                               
	    	$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 

	    	$mail->Port       = 587;                                   

	    	$mail->SMTPOptions = array(
				'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
				)
			);
	    	
	    	$mail->setFrom('projedeneme22@localhost.com', 'İletisim-Formu');
	    	$mail->addAddress('projedeneme2022@gmail.com', 'projedeneme');    

	    	
	 
	    	
	    	$mail->isHTML(true);   
	    	$mail->CharSet = "UTF-8";                            
	    	$mail->Subject = 'Sitenizden İletişim Formu Gönderildi';
	    	$mail->Body    = 'İletişim formu gönderildi.';
	    	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    	$mail->send();
	    	echo 'Message has been sent';
		} 
		catch (Exception $e) {
    	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
		
	}	

?>