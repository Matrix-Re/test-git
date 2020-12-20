<?php

session_start();

$https = $_SESSION['https'];
$lien = $_SESSION['lien'];
$google = $_SESSION['google'];
$page = $_SESSION['page'];
$produit = $_SESSION['produit'];

$prix = 49900 + $https + $lien + $google + $page + $produit;

$_SESSION['prix'] = $prix;

?>






<!DOCTYPE html>
<html>
<head>
    <title>Commande Sécurisée</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="metodpayement.css">
    <link rel="icon" href="picture\7.png" type="image/png">
</head>
<body>

<h2><img src="picture\cadenat.jpg" width="20">Bon de commande sécurisé</h2>

    <form action="payement.php" class="stripe" id="payement_form" method="POST">

        <input class="codecarte"type="text" name="codecarte"id="codecarte" placeholder="Numéro de carte" data-stripe="number"required maxlength="16" onkeypress="isInputNumber(event)"><br/>

        <input class="MM"type="text" name="MM"id="MM" placeholder="Mois" data-stripe="exp_month"required maxlength="2" onkeypress="isInputNumber(event)"><br/>

        <input class="YY"type="text" name="YY"id="YY" placeholder="Année" data-stripe="exp_year"required maxlength="2" onkeypress="isInputNumber(event)"><br/>

        <input class="CVC"type="text" name="CVC"id="CVC" placeholder="CVC" data-stripe="cvc"required maxlength="3" onkeypress="isInputNumber(event)"><br/>

        <?php echo $prix/100; echo "€";?><br><br>

        <input class="formsend" type="submit" name="formsend" id="formsend" value="Commandez Maintenant">
        
    </form>

<img src="picture\p1.jpg" width="40" class="typedepayement"><img src="picture\p2.png" width="40" class="typedepayement">

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
        Stripe.setPublishableKey('pk_test_HNzszTPU8mHX4SWGuD2M78qd00ODyoW1Tj')

        var $form = $('#payement_form')

        $form.submit(function (e) {

            e.preventDefault()

            $form.find('.button').attr('disabled', true)

            Stripe.card.createToken($form, function (status, response) {

                if (response.error) {

                    $form.find('.message').remove() ;

                    $form.prepend('<div class="ui negative message"><p>' + response.error.message + '</p></div>');

                } else {

                    var token = response.id

                    $form.append($('<input type="hidden" name="stripeToken">').val(token))

                    $form.get(0).submit()

                }
            })
        })

    </script>
    

    <script type="text/javascript">
        function isInputNumber(evt) {
            var ch = String.fromCharCode(evt.which);
                if(!(/[0-9]/.test(ch))){
                    evt.preventDefault();
                }
                if(!value(/[0-4]/.test(ch))){
                    evt.preventDefault();
                }
            }
    </script>

</body>
</html>