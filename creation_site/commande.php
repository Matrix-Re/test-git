<!DOCTYPE html>
<html>
<head>
    <title>Commande Sécurise</title>
    <link rel="stylesheet" type="text/css" href="style/commande.css">
    <meta charset="utf-8">
    <meta name="language" content="french">
    <meta property="og:title" content="Agence Web Nîmes | Commande" />
    <meta property="og:url" content="lien du site" />
    <meta property="og:description" content="Finalisation de votre commande et note de vos besoin specifique"/>
</head>
<body>


<ul>
        <li>
            <strong>
                <h1>Commande Sécurise</h1>
            </strong>
        </li>


        <li class="contact">
            <h4>Besoin d’aide ?</h4>
            <h4>arnea.contact@gmail.com</h4>
        </li>

    </ul>




<form action="payement.php" class="stripe" id="payement_form" method="POST">

        <h1>Vos coordonnées</h1>

        <input class="input"type="varchar" name="nom" id="nom" placeholder="Votre nom" required><br/>
        <input class="input"type="email" name="email" id="email" placeholder="Votre adresse e-mail" required><br/>

        <h1>Description</h1>

        <textarea class="commentaire"type="text" name="des" id="des" placeholder="Description du projet" required></textarea><br>

        <h2>page suplementaire (10€/page)</h2>
        
        <select name="plus">
            <option value="0">0</option>
            <option value="1000">1</option>
            <option value="2000">2</option>
            <option value="3000">3</option>
            <option value="4000">4</option>
            <option value="5000">5</option>
            <option value="6000">6</option>
            <option value="7000">7</option>
            <option value="8000">8</option>
            <option value="9000">9</option>
            <option value="10000">10</option>
        </select><br>


        <?php session_start();echo $_SESSION['prix']/100 . "€";if ($_SESSION['prix'] == 1){header("location:site-vitrine.php");}?><br/>

        <input  type="submit" class="formsend" name="formsend" id="formsend" value="Validez votre commande">
        
    </form>

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


<!-- <?php


$dsn = 'mysql:host=mysql-testar.alwaysdata.net;dbname=testar_test;port=3306';
                $user = 'testar';
                $password = 'fylw0un5';
                
                try {
                    $db = new PDO($dsn, $user, $password);
                } catch (PDOException $e) {
                    echo 'Connexion échouée : ' . $e->getMessage();
                }
$c = $db->query("SELECT id FROM test WHERE id = 3 or id > 3");


            while ($result = $c->fetch()){
            
            echo "<script>alert(\"Oups!!! il y a trop de commande revenez plus tard\")</script>";
            
            }

?>
 --></body>
</html>