<!DOCTYPE html>
<html>
<head>
	<title>Paiement effectué</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/payement.css">
	<link rel="icon" href="picture/dev-black.png" type="image/png">
    <meta name="language" content="french">
    <meta property="og:title" content="Agence Web Nîmes | Payement accepté" />
    <meta property="og:url" content="lien du site" />
    <meta property="og:description" content="Felicitation votre payement a etait accepté nous vous contacterons lorsque votre commande sera traité"/>
</head>
<body>


<h1>Nous vous remercions pour votre commande</h1>
<h3>Votre commande a etait prise en compte et sera traité dans les<br>meilleurs délais.</h3>

<img src="picture/chek.png" width="200" alt="chek ok vert">

<div class="c"><a href="https://arnea.fr/index.php">retourner sur la page d'accueil</a></div>

<?php
session_start();
                // if (!empty($_SESSION['prix'])) {
                //     header('location:http://127.0.0.1:8080/page%20PHP/');
                // }
                

                $prix = $_SESSION['prix'];

                $dsn = 'mysql:host=mysql-testar.alwaysdata.net;dbname=testar_test;port=3306';
                $user = 'testar';
                $password = 'fylw0un5';
                try {
                    $db = new PDO($dsn, $user, $password);
                } catch (PDOException $e) {
                    echo 'Connexion échouée : ' . $e->getMessage();
                }
                $nom = 'nom';
                $email = 'email';
                $des = 'des';
                $plus = 'plus';
                extract($_POST);

                $what = $_SESSION["what"];
                
                //On vérifie que l'utilisateur a bien envoyé le formulaire completé
            if(isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["des"]) && isset($_POST["plus"]) && isset($_SESSION["what"])){
            
            $c = $db->query("SELECT id FROM test WHERE id = 10 or id > 10");


            while ($result = $c->fetch()){
            header('location:commande.php');            
			}

            $c->execute([
                'nom' => $nom,
                'email' => $email,
                'des' => $des,
                'plus' => $plus,
                'what' => $what
            ]);

            $result = $c->rowCount();

            if($result == 0){
            
            //Puis on stock le résultat dans la base de données
            $req = $db->prepare("INSERT INTO test(nom, email, des, plus, what) VALUES(?, ?, ?, ?, ?)");
            $req->execute(array($_POST["nom"], $_POST["email"], $_POST['des'], $_POST['plus'], $_SESSION["what"]));        
        }
        
        }

///////////////////////////////////////////////////////////////////////////////////////stripe payement                                                                        ///////////////////////////////////////////////////////////////////////////////////////


        if ($prix == 0) {
            header("location:commande.php");
        }



	
	$email = $_POST['email'];
	$des = $_POST['des'];
	$plus = $_POST['plus'];
	$nom = $_POST['nom'];

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
    $mail->Subject = "Commande";
    $mail->Body    = "Mon email: " . $email . "<br /><br />" .
    "Mon Nom: " . $nom . "<br /><br />" .
    "Mon plus: " . $plus/1000 . " page" ."<br /><br />" .
    "tarif: " . $prix/100 . " €" ."<br /><br />" .
    "Ma description: " . $des;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



//________________________________________________________________________________

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
    $mail->addAddress($email);

    $mail->isHTML(true);     
    $mail->Subject = "Confirmation de Commande";
    $mail->Body    = "Votre email: " . $email . "<br /><br />" .
    "Votre Nom: " . $nom . "<br /><br />" .
    "Nombre de page suplementaire: " . $plus/1000 . " page" ."<br /><br />" .
    "tarif: " . $prix/100 . " €" ."<br /><br />" .
    "Votre description: " . $des ."<br /><br />" .
    "Nous avons bien reçu votre commande et nous vous remercions pour la confiance que vous nous accordez." ."<br />" . "Malheureusement nous ne pouvons pas encaiser votre commande en ligne, mais nous vous invitons à nous contacter afin de convenir ensemble d'un entretien téléphonique." ."<br />" . "Lors de cet entretien, nous détaillerons vos besoins et les meilleures options que nous pourrons vous proposer." ."<br />" . "A trés bientôt" ."<br /><br />" . "Tel : 0651025147" ."<br />" . "Horaires d'ouverture de l'agence :" ."<br />" . "Mercredi de 15h à 18h" ."<br />" . "Samedi de 10h à 18h," ."<br />" . "Dimanche de 10h à 18h.";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}





?>



</body>
</html>