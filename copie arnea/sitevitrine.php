<!DOCTYPE html>
<html>
<head>
    <title>Achat</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="suivi.css">
    <link rel="icon" href="picture\7.png" type="image/png">
</head>
<body>


    <?php include 'menunavigation.php'?>

    <h1>Site Vitrine</h1>
    
    <div class="description">
    <div>
        <h2><img src="picture/logoweb.png" width="100" class="back">159€</h2>

        <div>Description:<br>
        - 5 pages web a votre image<br>
        - Mise en place de 2 lien de réseaux sociaux<br>
        - Hébergement du site web</div>
                
    </div>

    <div>
        <div class="po">Nous aurons besoin des éléments suivants pour réaliser votre site web:<br>
        - description de votre activité<br>
        - lien d'éventuel réseau social<br>
        </div>
    </div>

    </div>


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
            
            $c = $db->prepare("SELECT id FROM web WHERE id = 5 or id > 5");
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
            $req = $db->prepare("INSERT INTO web(nom, email, commentaire) VALUES(?, ?, ?)");
            $req->execute(array($_POST["nom"], $_POST["email"], $_POST['commentaire']));
            if(isset($_POST['formsend'])){
            header('Location:os.php');
            }
        
        }
        
        }

session_start();

($_SESSION['nom'] = $nom);

($_SESSION['email'] = $email);

    exit();
?>

</body>
</html>