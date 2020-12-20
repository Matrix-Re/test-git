<!DOCTYPE html>
<html>
<head>
  <title>Option Supplémentaire</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="os.css">
  <link rel="icon" href="picture\7.png" type="image/png">
</head>
<body>

<form method="post">
   <div class="info-lib"><h2><img src="picture\5.jpg" width="30">Option Supplémentaire</h2></div>
   <div class="info-value">
    <p>Sucurité https (+10€)
    <input type="radio" name="https[]" value="0">Non
    <input type="radio" name="https[]" value="1000">Oui
    </p>
   </div>
   <br></br>

<div class="info-value">
    <p>Mise en place de Google Analytics (+10€)
    <input type="radio" name="google[]" value="0">Non
    <input type="radio" name="google[]" value="1000">Oui
    </p>
   </div>
   <br></br>

   <div class="info-value">
    <p>page suplementaire (+10€/page)
    <input type="radio" name="page[]" value="0">0
    <input type="radio" name="page[]" value="1000">1
    <input type="radio" name="page[]" value="2000">2
    <input type="radio" name="page[]" value="3000">3
    <input type="radio" name="page[]" value="4000">4
    <input type="radio" name="page[]" value="5000">5
    <input type="radio" name="page[]" value="6000">6
    <input type="radio" name="page[]" value="7000">7
    <input type="radio" name="page[]" value="8000">8
    <input type="radio" name="page[]" value="9000">9
    <input type="radio" name="page[]" value="10000">10
    </p>
   </div>
   <br></br>

   <div class="info-value">
    <p>produit suplementaire (+10€/produit)
    <input type="radio" name="produit[]" value="0">0
    <input type="radio" name="produit[]" value="1000">1
    <input type="radio" name="produit[]" value="2000">2
    <input type="radio" name="produit[]" value="3000">3
    <input type="radio" name="produit[]" value="4000">4
    <input type="radio" name="produit[]" value="5000">5
    <input type="radio" name="produit[]" value="6000">6
    <input type="radio" name="produit[]" value="7000">7
    <input type="radio" name="produit[]" value="8000">8
    <input type="radio" name="produit[]" value="9000">9
    <input type="radio" name="produit[]" value="10000">10
    </p>
   </div>
   <br></br>

   <div class="info-value">
    <p>lien suplementaire (+5€/lien)
    <input type="radio" name="lien[]" value="0">0
    <input type="radio" name="lien[]" value="500">1
    <input type="radio" name="lien[]" value="1000">2
    <input type="radio" name="lien[]" value="1500">3
    <input type="radio" name="lien[]" value="2000">4
    <input type="radio" name="lien[]" value="2500">5
    </p>
   </div>
   <br></br>

   <input type="submit" value="Confirmer" name="submit" id="submit">
</form>


<?php

session_start();
$nom = $_SESSION['nom'];

    if(is_null($nom)){header('Location:index.php');}

$commentaire = $_SESSION['commentaire'];

    if(is_null($commentaire)){header('Location:index.php');}

// connexion a la bas de donné
                $dsn = 'mysql:host=mysql-arnea.alwaysdata.net;dbname=arnea_commande_site_web;port=3306';
                $user = 'arnea';
                $password = 'fylw0un5';
                
                try {
                    $db = new PDO($dsn, $user, $password);
                } catch (PDOException $e) {
                    echo 'Connexion échouée : ' . $e->getMessage();
                }
extract($_POST);

$https = 'https';
$google = 'google';
$page = 'page';
$lien = 'lien';
$produit = 'produit';



if(isset($_POST['insert'])){
foreach ((array)$lien as $key => $value)
foreach ((array)$page as $key => $value)
foreach ((array)$https as $key => $value)
foreach ((array)$google as $key => $value)
foreach ((array)$produit as $key => $value)
    echo('vous devez selectionez un casse');
}
if (!empty($_POST['lien']) && !empty($_POST['page']) && !empty($_POST['google']) && !empty($_POST['https'])  && !empty($_POST['produit'])) {   
   $complet = implode(';', $_POST['lien']);
   $complet2 = implode(';', $_POST['page']);
   $complet3 = implode(';', $_POST['https']);
   $complet4 = implode(';', $_POST['google']);
   $complet5 = implode(';', $_POST['produit']);
   header('location:phasedepayement.php');
   $req = $db->prepare("INSERT INTO osecom(lien, page, google, https, produit) VALUES(?, ?, ?, ?, ?)");
   $req->execute(array($complet, $complet2, $complet3, $complet4, $complet5));


echo($complet);

session_start();


$https = $complet3;
($_SESSION['https'] = $https);


$google = $complet4;
($_SESSION['google'] = $google);

$produit = $complet5;
($_SESSION['produit'] = $produit);

$page = $complet2;
($_SESSION['page'] = $page);


$lien = $complet;
($_SESSION['lien'] = $lien);
}    
exit();


?>

</body>
</html>