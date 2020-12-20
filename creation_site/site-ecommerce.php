<!DOCTYPE html>
<html>
<head>
	<title>Arnea - creation de site E-commerce</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/site-vitrine.css">
	<meta name="language" content="french">
	<link rel="icon" href="picture/dev-black.png" type="image/png">
	<meta name="language" content="french">
    <meta property="og:title" content="Agence Web Nîmes | Site E-commerce" />
    <meta property="og:url" content="lien du site" />
    <meta property="og:description" content="plus besoin de locaux avec un site E-commerce vous pouvez vendre partous dans le monde sans aucune limite"/>
</head>
<body>

	<h1 class="title">Création de site E-commerce</h1>

	<img src="picture/programation.png" alt="language de programation" width="1349">


	<h1 class="valeur">Quelle valeur cela ajoutera à votre entreprise ?</h1>
	<h2 class="valeur">Plus besoin de louer des locaux avec un site e-commerce vous pouvez vendre partous dans le monde sans limite avec seulement une boutique en ligne, un site e-commerce peut être un levier pour votre entreprise car se dernier pourat augmente votre chiffre d'affaires, parce qu'une entreprise qui n'a pas de site internet et une entreprise qui n'existe pas.</h2>

<div class="produit">
	<h1 class="caracteristique"><br><br>Caractéristiques de l'offre</h1>
	<h2 class="caracteristique">- 10 pages web qui vous resemble<hr>- 50 produits<hr>- répertoire client<hr>- text et image ilimité<hr>- <a href="article_referencement.php">réferencement naturel</a><hr>- un formulaire de contact offert<hr>- <a href="article_hebergement.php">hébergement offert</a><hr>- <a href="article_nom_de_domaine.php">un sous-domaine gratuit</a><hr>- <a href="article_nom_de_domaine.php">nom de domaine NON FOURNI</a><hr>599€</h2>
	<form method="POST">
		<input class="caracteristique" type="submit" name="submit" value="Commandez">
	</form>
</div>

<?php include'footer.php'?>
	
<?php
if (isset($_POST['submit'])) {
session_start();
$_SESSION['prix'] = 59900;
$_SESSION['what'] = 'Site E-commerce';
header('location:commande.php');
}
?>
	

</body>
</html>