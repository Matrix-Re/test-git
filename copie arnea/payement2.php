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
            
    $https = $_SESSION['https'];
            
    $google = $_SESSION['google'];

    $lien = $_SESSION['lien'];

    $page = $_SESSION['page'];

	$email = $_SESSION['email'];


$prix = 15900+ $https + $google + $lien + $page;

$token = $_POST['stripeToken'];

if (!empty($token)){


	require('stripe2.php');

	$stripe = new Stripe('sk_test_oBPIbKGTA5bxc6BY4l6nqYRX00NGMVj9IC');
	

	$charge = $stripe->api('charges', [

		'source' => $token,

  		'amount' => $prix,

    	'currency' => 'eur',

  		'customer' => $id,

  		'description' => "vitrine " . $email,

	]);
}

?>



<h3>Paiement effectué</h3>

	

<div class="img"><img src="picture\a.png" width="200"></div>

<h3>Nous vous contacterons lorsque la conception de votre site web sera achevé</h3>

<div class="c"><a href="index.php">retourner sur le site</a></div>


</body>
</html>