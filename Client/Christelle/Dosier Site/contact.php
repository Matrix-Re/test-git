<!DOCTYPE html>
<html>
<head>
    <title>Christel Wissen Art - Contact</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/contact.css">
    <meta property="og:title" content="Photographe à Beziers | Contact" />
    <meta property="og:url" content="lien du site" />
    <meta property="og:description" content="Contactez nous, et parlez-nous de vos besoin, nous vous trouveron une solution"/>
    <link rel="icon" href="REF" type="image/png">
</head>
<body>

<?php include'menunav.php' ?>

<div class="contact"><img src="picture\christel.png" width="260"></div>

<div class="contact">
<form method="POST">
    <input type="text" name="name" placeholder="Nom"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="text" name="subject" placeholder="Objet"><br>
    <textarea name="motif" cols="" rows="" placeholder="Parlez-nous de vos projets"></textarea><br>
    <input type="submit" name="submit" value="Envoyer" >
<h3 class="tell">tel: 07 83 49 03 55<br>mail: christelleart.w@gmail.com</h3>
</form>

<a href="https://www.facebook.com/christelwissen"><img src="picture\facebook.png" width="30"></a>
<a href="https://www.instagram.com/christelwissen/"><img src="picture\instagram.png" width="30"></a>

</div>



<?php

include 'mesphoto/footer.php';

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