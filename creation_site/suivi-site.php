<!DOCTYPE html>
<html>
<head>
	<title>Arnea - Suivi de site</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/site-vitrine.css">
	<meta name="language" content="french">
	<link rel="icon" href="picture/dev-black.png" type="image/png">
	<meta name="language" content="french">
    <meta property="og:title" content="Agence Web Nîmes | Suivi Site" />
    <meta property="og:url" content="lien du site" />
    <meta property="og:description" content="vous possedé un site crée par nos soin et vous voulez apportez des modification"/>
</head>
<body>

	<h1 class="title">Suivi de site</h1>

	<img src="picture/programation.png" alt="language de programation" width="1349">


	<h1 class="valeur">Pourquoi avoir un suivi ?</h1>
	<h2 class="valeur">il est très important de maintenir son site internert, tout d'abbord pour une sécurité optimale si vos visiteurs voient que l'accès à votre site est sécurisé il se sentira plus en confiance, améliore la qualité du contenu pour une meilleure expérience de lecture, réparé les failles de sécurité pour un meilleur référencement</h2>

<div class="produit">
	<h1 class="caracteristique"><br><br>Caractéristiques de l'offre</h1>
	<h2 class="caracteristique">- 3 pages suplementaire<hr>- rajout de text et image<hr>- <a href="article-referencement.php">réferencement naturel</a><hr>- 20 produits suplementaires pour les sites e-commerce<hr>49€</h2>
	<form method="POST">
		<input class="caracteristique" type="submit" name="submit" value="Commandez">
	</form>
</div>

<?php include'footer.php'?>

<?php
if (isset($_POST['submit'])) {
session_start();
$_SESSION['prix'] = 4900;
$_SESSION['what'] = 'Suivi site';
header('location:commande.php');
}
?>


	
</body>
</html>