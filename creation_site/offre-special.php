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

	<h1 class="title">OFFRE SPECIAL</h1>

	<img src="picture/programation.png" alt="language de programation" width="1349">


	<h1 class="valeur">Offre Special place limité</h1>
	<h2 class="valeur">Bénéficier d'un essai d'un mois gratuit pour nos Site Vitrine, avec un sous domaine et hebergement offert</h2>

<div class="produit">
	<h1 class="caracteristique"><br><br>Caractéristiques de l'offre</h1>
	<h2 class="caracteristique">- 10 pages web qui vous resemble<hr>- text et image ilimité<hr>- indexation du site<hr>- un formulaire de contact offert<hr>- <a href="article_referencement.php">réferencement naturel</a><hr>- <a href="article_hebergement.php">hébergement offert</a><hr>- <a href="article_nom_de_domaine.php">un sous-domaine gratuit</a><hr>- <a href="article_nom_de_domaine.php">
nom de domaine NON FOURNI</a><hr>- durée de l'offre 30j<hr>GRATUIT</h2>
	<form method="POST">
		<input class="caracteristique" type="submit" name="submit" value="Commandez">
	</form>
</div>

<?php include'footer.php'?>

<?php
if (isset($_POST['submit'])) {
session_start();
$_SESSION['prix'] = 0;
$_SESSION['what'] = 'Site vitrine gratuit';
header('location:commande.php');
}
?>

</body>
</html>