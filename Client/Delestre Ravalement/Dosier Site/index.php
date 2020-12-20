<!DOCTYPE html>
<html>
<head>
	<title>Delestre Ravalement</title>
	<meta charset="utf-8">
	<meta name="language" content="french">
	<link rel="stylesheet" type="text/css" href="style/index.css">
    <link rel="icon" href="picture/logo.png" type="image/png">
    <meta property="og:title" content="Delestre Ravalement | rénovation de batiment |Bréal-sous-Montfort" />
	<meta property="og:url" content="lien du site" />
	<meta property="og:description" content="Delestre ravalement est une auto entreprise basé à Bréal-sous-Montfort dans la rénovation et l’isolation d'habitation adapté à vos besoin"/>
	<meta property="language" content="fr">	
</head>
<body>

	<h1 style="text-align: center;">Delestre Ravalement</h1>

	<br>

	<div style="text-align: center;">
	<img src="picture/logo.png" width="500">
	</div>

	<br><hr class="sep"><br>

	<h2 class="intro" style="margin-left: 100px; margin-right: 100px;">Delestre ravalement est une auto entreprise basé à Bréal-sous-Montfort que j’ai créé après 19 ans d’expérience dans le ravalement de façade. Je suis à votre disposition pour vous conseiller et réaliser les travaux de rénovation ou d’isolation de votre habitation adapté à vos besoin. E Delestre</h2>

	<br><hr class="sep"><br>

	<h1 class="prestation">Nos Préstations:</h1>
	<br>
	<h2 class="prestation">- Ravalement de Façade<br>- Lavage de façade et de toiture<br>- Hydrofuge toiture<br>- Isolation des combles<br>- Isolation thermique par l’extérieure<br>- Peinture intérieur<br>- Enduit de muret<br>
	<a href="photoprestation.php" style="text-align: center;">Voir les photos des préstations</a></h2>



	<br><hr class="sep"><br>



	<form method="POST">

		<a href="https://www.facebook.com/delestre.ravalement.9?fref=search&__tn__=%2Cd%2CP-R&eid=ARAhZBdTIeRyDwlcxcJOVBt_yrqgRX-VYQX7eaGqW8a4IyZ_90X-Cn1yD2GSKmDluukqi-yB_pEQGJSK"><img src="img/img_35.jpg" width="50"></a>
		<br>

		<h2>tel: 06 42 89 18 78</h2>
		<h2>mail: delestre.erwan@orange.fr</h2>
		<br>
		<h2>Formulaire de Contact</h2>
	

		<input class="input" type="text" name="name" placeholder="Votre nom"><br>
		<input class="input" type="email" name="email" placeholder="Votre adresse e-mail"><br>
		<input class="input" type="text" name="subject" placeholder="Sujet"><br>
		<textarea class="input" name="motif" cols="" rows="" placeholder="Description de votre projet"></textarea><br>
		<input class="send" type="submit" name="submit" value="Envoyer">
	</form><

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
    $mail->Username   = 'arnea.contact@gmail.com';
    $mail->Password   = 'tupixkdnnylqfuaw';
    $mail->SMTPSecure = 'tls';                               
    $mail->Port       = 587;

    $mail->setFrom('arnea.contact@gmail.com');
    $mail->addAddress('delestre.erwan@orange.fr');

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

	<br><hr class="sep"><br>


<a href="formulaire-creation-avis.php" class="avis">Laissez un avis</a><br><br>

<?php
#_AFFICHAGE DES AVIS CLIENT_#
                $dsn = 'mysql:host=mysql1005.mochahost.com;dbname=arnea17_client;port=3306';
                $user = 'arnea17_user';
                $password = 'fylw0un5';
                try {
                    $db = new PDO($dsn, $user, $password);
                } catch (PDOException $e) {
                    echo 'Connexion échouée : ' . $e->getMessage();
                }

                $c = $db->query("SELECT nom, note, commentaire FROM Delestre ORDER BY id DESC");
                
                while ($donnees = $c->fetch()) {
                	echo "<div class=\"avis\">" .$donnees['nom'] . "   " . $donnees['note']. "/5" . "<br>" . $donnees['commentaire'] . "<br><hr><br></div>" ;
                }; 
?>

<br><hr class="sep"><br>

<div style="text-align: center;">
	<img src="img/img_30.jpg" width="300" height="150">
	<img src="img/img_31.jpg" width="300" height="150">
	<img src="img/img_32.jpg" width="300" height="150"><br>
</div>

<br><br><br>

<div style="text-align: center;">
	<img src="img/img_33.jpg" width="300" height="150">
	<img src="img/img_34.jpg" width="300" height="150">
</div>

</body>
</html>