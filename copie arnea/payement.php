<!DOCTYPE html>
<html>
<head>
	<title>Paiement effectué</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="payemen.css">
	<link rel="icon" href="picture\7.png" type="image/png">
</head>
<body>

<?php

session_start();
$email = $_SESSION['email'];

$https = $_SESSION['https'];
$lien = $_SESSION['lien'];
$google = $_SESSION['google'];
$page = $_SESSION['page'];
$produit = $_SESSION['produit'];

$prix = 49900 + $https + $lien + $google + $page + $produit;

$_SESSION['prix'] = $prix;

$token = $_POST['stripeToken'];

if (!empty($token)){


	require('stripe2.php');

	$stripe = new Stripe('sk_test_oBPIbKGTA5bxc6BY4l6nqYRX00NGMVj9IC');
	

	$charge = $stripe->api('charges', [

		'source' => $token,

  		'amount' => $prix,

    	'currency' => 'eur',

  		'customer' => $id,

  		'description' => $email,
	]);

}
?>



<h3>Paiement effectué</h3>

	

<div class="img"><img src="picture\a.png" width="200"></div>

<h3>Nous vous contacterons lorsque la conception de votre logo sera achevé</h3>

<div class="c"><a href="index.php">retourner sur le site</a></div>


</body>
</html>