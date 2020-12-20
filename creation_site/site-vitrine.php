<!DOCTYPE html>
<html>
<head>
	<title>Arnea - creation de site vitrine</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/site-vitrine.css">
	<meta name="language" content="french">
	<link rel="icon" href="REF" type="image/png">
	<meta name="language" content="french">
    <meta property="og:title" content="Agence Web Nîmes | Site Vitrine" />
    <meta property="og:url" content="lien du site" />
    <meta property="og:description" content="Avec un site vitrine vous pouvez faire connaitre votre activité sans utilisé des compagnes publicitaires"/>
</head>
<body>

	<h1 class="title">Création de site vitrine</h1>

	<img src="picture/programation.png" alt="language de programation" width="1349">


	<h1 class="valeur">Quelle valeur cela ajoutera à votre entreprise ?</h1>
	<h2 class="valeur">Ce site opportera de la visibilité à votre entreprise, une nouvelle clientèle, et une augmentation de votre chiffre d'affaire, de plus votre site vitrine est accessible à n'importe quel moment de la journée et sur n'importe quel type d'écran (smartphone, tablette ordinateur). Quelle que soit votre activité, un site vitrine vous aidera à la développer.</h2>

<div class="produit">
	<h1 class="caracteristique"><br><br>Caractéristiques de l'offre</h1>
	<h2 class="caracteristique">- 10 pages web qui vous resemble<hr>- text et image ilimité<hr>- indexation du site<hr>- un formulaire de contact offert<hr>- <a href="article_referencement.php">réferencement naturel</a><hr>- <a href="article_hebergement.php">hébergement offert</a><hr>- <a href="article_nom_de_domaine.php">un sous-domaine gratuit</a><hr>- <a href="article_nom_de_domaine.php">
nom de domaine NON FOURNI</a><hr>259€</h2>
	<form method="POST">
		<input class="caracteristique" type="submit" name="submit" value="Commandez">
	</form>
</div>

<?php include'footer.php'?>

<?php
if (isset($_POST['submit'])) {
session_start();
$_SESSION['prix'] = 25900;
$_SESSION['what'] = 'Site vitrine';
header('location:commande.php');
}
?>


	
</body>
</html>