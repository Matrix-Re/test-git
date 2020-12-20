<!DOCTYPE html>
<html>
<head>
	<title>Nous contacté</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/contact.css">
	<meta name="language" content="french">
	<meta property="title" content="Voiture d'occasion | pas cher à Nîmes" />
	<meta property="url" content="https://amiri-auto.arnea.fr" />
	<meta property="og:description" content="Vente de voiture d'occasion pas cher a Nîmes. Toute categorie voiture de sport, citatine, 4x4, ou coupé"/>
	<meta name="description" content="Vente de voiture d'occasion pas cher a Nîmes. Toute categorie voiture de sport, citatine, 4x4, ou coupé"/>
</head>
<body>

	<h1 class="title">AmiriAuto</h1>
	<?php include 'navigation.php'?>

	<form method="POST">
	
	<input class="input" type="text" name="name" placeholder="Votre nom"><br>
	<input class="input" type="email" name="email" placeholder="Votre adresse e-mail"><br>
	<input class="input" type="text" name="subject" placeholder="Sujet"><br>
	<textarea class="input" name="motif" cols="" rows="" placeholder="faite nous part de vos besoin"></textarea><br>
	<input class="send" type="submit" name="submit" value="Envoyer">
	
	</form>

<?php include'creation_site/footer.php'?>

<?php

if (isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['email']) && isset($_POST['motif']) && isset($_POST['submit'])) {

	if (!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['motif']) && !empty($_POST['submit'])) {

	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$motif = $_POST['motif'];
	$email = $_POST['email'];

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = false;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
	$mail->SMTPAuth   = true;
    $mail->Username   = 'amirianas330@gmail.com';
    $mail->Password   = 'ppvqoakcqovbcdmq';
    $mail->SMTPSecure = 'tls';                               
    $mail->Port       = 587;

    $mail->setFrom('amirianas330@gmail.com');
    $mail->addAddress('arnea.contact@gmail.com');

    $mail->isHTML(true);     
    $mail->Subject = $subject . " de la part de " . $name;
    $mail->Body    = "Mon email: " . $email . "<br /><br />" . $motif;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script>alert('le Message à etait envoyé')</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
}
?>

	<?php include 'voiture/footer.php'?>

</body>
</html>