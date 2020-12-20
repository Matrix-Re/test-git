<!DOCTYPE html>
<html>
<head>
    <title>Creation Avis</title>
    <meta charset="utf-8">
    <meta name="language" content="french">
    <link rel="stylesheet" type="text/css" href="style/creation-avis.css">
    <link rel="icon" href="picture/logo.png" type="image/png">
    <meta property="og:title" content="" />
    <meta property="og:url" content="lien du site" />
    <meta property="og:description" content=""/>
</head>
<body>

<?php
#_ENREGISTREMENT DE L'AVIS DU CLIENT_#
                $dsn = 'mysql:host=mysql-delestre.alwaysdata.net;dbname=delestre_data;port=3306';
                $user = 'delestre';
                $password = 'fylw0un5';
                try {
                    $db = new PDO($dsn, $user, $password);
                } catch (PDOException $e) {
                    echo 'Connexion échouée : ' . $e->getMessage();
                }
                
                $nom = 'nom';
                $note = 'note';
                $commentaire = 'commentaire';
                extract($_POST);
            //On vérifie que l'utilisateur a bien envoyé le formulaire completé
            if(isset($_POST["nom"]) && isset($_POST["note"]) && isset($_POST["commentaire"])){               

                //Puis on stock le résultat dans la base de données
                $req = $db->prepare("INSERT INTO notice(nom, note, commentaire) VALUES(?, ?, ?)");
                $req->execute(array($_POST["nom"], $_POST["note"], $_POST['commentaire']));

                echo "<div>" .$nom . "  " . $note . "/5" . "<br>" . $commentaire . "<br>" ."<a href=\"index.php\">Retourner sur le site</a>" ."</div>";
            }
            else
            {
                echo "<div>error<div>";
            }
?>

</body>
</html>