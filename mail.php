<?php


require 'phpmail/src/Exception.php';
require 'phpmail/src/PHPMailer.php';
require 'phpmail/src/SMTP.php';


$mejl = new PHPMailer\PHPMailer\PHPMailer();
$mejl ->isSMTP();
$mejl->SMTPDebug = 0;
$mejl->Debugoutput='html';

$mejl->Host = 'smtp.gmail.com';
$mejl->Port = 587;
$mejl->SMTPAuth = true;
$mejl->SMTPSecure = 'tls';

$mejl->Username = "restoranLM.rezervacije@gmail.com";
$mejl->Password = "restoranlm1!";

$mejl->setFrom('restoranLM.rezervacije@gmail.com','Restoran LM');
$mejl->addReplyTo('restoranLM.rezervacije@gmail.com','Restoran LM');
$mejl->addAddress('restoranLM.rezervacije@gmail.com','Restoran LM');



$mejl->Subject = "Rezervacija za " . $_POST['ime']  ; 
$mail = 'Email korisnika je: ' .  $_POST['email']  ;
$datum = 'Datum: ' .  $_POST['datum'] ;
$prostor = 'Prostor: ' .  $_POST['prostor'] ;
$napomena = 'Napomena: ' .  $_POST['napomena'] ;


$mejl->Body = $mail . $datum . $prostor . $napomena ;

if(!$mejl->send())  {
	echo "Mejl nije poslat!". $mejl->ErrorInfo;

} else {
	echo "Mejl je uspešno poslat!";

}

?>
