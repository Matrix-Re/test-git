<!DOCTYPE html>
<html>
<head>
	<title>Arnea - Contact</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/contact.css">
	<link rel="icon" href="creation_site/picture/dev-black.png" type="image/png">
	<meta name="language" content="french">
	<meta name="title" content="Agence Web Nîmes | Contact" />
	<meta name="url" content="arnea.fr" />
	<meta name="description" content="Ne restez pas dans le doute Contactez nous pour plus d'information sur le service client, sur nos prestations, ou sur les payements"/>
</head>
<body>

	<?php include'menunav.php'?>

	<div class="container">
		<img src="picture/box.png" width="1349" alt="">
		<div class="centered"><h1>Vous avez des questions, nous avons les réponses</h1>
		</div>
	</div>

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

require 'creation_site/PHPMailer/PHPMailerAutoload.php';

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


</body>
</html>