<!DOCTYPE html>
<html>
<head>
	<title>Achat</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="suivi.css">
	<link rel="icon" type="image/png" href="picture/7.png">
</head>
<body>

	<?php include "menunavigation.php"; ?>

	<h1>Site E-commerce</h1>

	<!-- <div class="description"> -->
    
        <h2><img src="picture/logo e-commerce.png" width="100" class="back">499€</h2>

        <div>Description:<br>
        - 5 pages web a votre image<br>
        - mise en place de 3 produits dans la page boutique<br>
        - Mise en place de 3 lien de réseaux sociaux<br>
        - Hébergement du site web</div>
                
    
        <div class="po">Nous aurons besoin des éléments suivants pour réaliser votre site web:<br>
        - description de votre activité<br>
        - description des différents produits<br>
        - lien d'éventuel réseau social<br>
        </div>
    

    <!-- </div> -->

    <form method="POST" class="formulaire">
        <h1>Acheter</h1>
        <input class="Nom"type="varchar" name="nom" id="nom" placeholder="Nom" required><br/>
        <input class="email"type="email" name="email" id="email" placeholder="Email" required><br/>
        <textarea class="commentaire"type="text" name="des" id="des" placeholder="des" required rows="10"></textarea><br>
        <input type="submit" name="formsend" id="formsend" value="confirmer">
    </form>

    <?php include 'footer.php'?>


<?php
                // connexion a la bas de donné
                $dsn = 'mysql:host=127.0.0.1;dbname=siteweb;port=3306';
                $user = 'root';
                $password = '';
                
                try {
                    $db = new PDO($dsn, $user, $password);
                } catch (PDOException $e) {
                    echo 'Connexion échouée : ' . $e->getMessage();
                }
                $nom = 'nom';
                $email = 'email';
                $des = 'des';
                extract($_POST);
                
                //On vérifie que l'utilisateur a bien envoyé le formulaire completé
            if(isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["des"])){
            
            $c = $db->prepare("SELECT id FROM test WHERE id = 5 or id > 5");
            if("id = 5" or "id > 5"){
                echo "<script>alert(\"Oups!!! il y a trop de commande revenez plus tard\")</script>";
            }

            $c->execute([
                'nom' => $nom,
                'email' => $email,
                'des' => $des
            ]);

            $result = $c->rowCount();

            if($result == 0){
            
            //Puis on stock le résultat dans la base de données
            $req = $db->prepare("INSERT INTO test(nom, email, des) VALUES(?, ?, ?)");
            $req->execute(array($_POST["nom"], $_POST["email"], $_POST['des']));
            if(isset($_POST['formsend'])){
            header('Location:os-e-commerce.php');
            }
        
        }
        
        }

session_start();

($_SESSION['nom'] = $nom);

($_SESSION['commentaire'] = $commentaire);

    exit();


?>


</body>
</html>