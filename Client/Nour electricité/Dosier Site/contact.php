<!DOCTYPE html>
<html>
<head>
	<title>Contact - Nour Électricité</title>
	<meta charset="utf-8">
	<meta name="language" content="french">
	<link rel="stylesheet" type="text/css" href="style/contact.css">
    <link rel="icon" href="REF" type="image/png">
    <meta name="title" content="Contact - Nour Électricité" />
	<meta name="url" content="nourelctricite.arnea.fr" />
	<meta name="description" content="Nour electicite est une entreprise dans la vente et l'instalation de materiel electrique à Avignon"/>
</head>
<body>

	<?php include'menunav.php' ?>

	<form method="POST">
	<h2>Formulaire de Contact</h2>	
	<input class="input" type="text" name="name" placeholder="Votre nom"><br>
	<input class="input" type="email" name="email" placeholder="Votre adresse e-mail"><br>
	<input class="input" type="text" name="subject" placeholder="Sujet"><br>
	<textarea class="input" name="motif" cols="" rows="" placeholder="Description de votre projet"></textarea><br>
	<input class="send" type="submit" name="submit" value="Envoyer">
	
</form>

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

	<?php include'boutique/footer.php' ?>

</body>
</html>