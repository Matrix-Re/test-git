<!DOCTYPE html>
<html>
<head>
    <title>Suiv de Site web</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="suivi.css">
    <link rel="icon" href="picture\7.png" type="image/png">
</head>
<body>

    <?php include 'menunavigation.php'?>

    <h1>Suivi web</h1>

    <h2><img src="picture\suivi web.png" width="100">Prix sur de devis</h2>


    <div>Vous possède un site web, et vous voulez apporter<br>
    des modifications, que ce soit une modification d'informations<br>
    générale, l'ajout de quelque page web ou tout simplement changer<br>
    de design, alors commandez dès maintenant notre suivi web.<br>
    Nos développeur vous accompagne dans l'amélioration de votre<br>
    site internet et votre entreprise</div>


        <div class="br">Nous aurons besoin des éléments suivants pour réaliser votre site web:<br>
        - description des modifications</div>


    <form method="POST" class="formulaire">
        <h1>Acheter</h1>
        <input class="Nom"type="varchar" name="nom" id="nom" placeholder="Nom" required><br/>
        <input class="email"type="email" name="email" id="email" placeholder="Email" required><br/>
        <textarea class="commentaire"type="text" name="commentaire" id="commentaire" placeholder="Commentaire" required rows="10"></textarea><br>
        <input type="submit" name="formsend" id="formsend" value="confirmer">
    </form>

<?php include 'footer.php'?>

<?php
                // connexion a la bas de donné
                $dsn = 'mysql:host=mysql-arnea.alwaysdata.net;dbname=arnea_commande_site_web;port=3306';
                $user = 'arnea';
                $password = 'fylw0un5';
                
                try {
                    $db = new PDO($dsn, $user, $password);
                } catch (PDOException $e) {
                    echo 'Connexion échouée : ' . $e->getMessage();
                }
                $nom = 'nom';
                $email = 'email';
                $commentaire = 'commentaire';
                extract($_POST);
                
                //On vérifie que l'utilisateur a bien envoyé le formulaire completé
            if(isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["commentaire"])){
            
            $c = $db->prepare("SELECT id FROM suivi WHERE id = 5 or id > 5");
            if("id = 5" or "id > 5"){
                echo "<script>alert(\"Oups!!! il y a trop de commande revenez plus tard\")</script>";
            }

            $c->execute([
                'nom' => $nom,
                'email' => $email,
                'commentaire' => $commentaire
            ]);

            $result = $c->rowCount();

            if($result == 0){
            
            //Puis on stock le résultat dans la base de données
            $req = $db->prepare("INSERT INTO suivi(nom, email, commentaire) VALUES(?, ?, ?)");
            $req->execute(array($_POST["nom"], $_POST["email"], $_POST['commentaire']));
            if(isset($_POST['formsend'])){
            header('Location:os2.php');
            }
        
        }
        
        }

session_start();

($_SESSION['commentaire'] = $commentaire);

($_SESSION['email'] = $email);

    exit();
?>

</body>
</html>