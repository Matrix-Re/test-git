<!DOCTYPE html>
<html>
<head>
	<title>Delestre Ravalement</title>
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
	#_AFFICHAGE DES AVIS CLIENT_#
	
    $dsn = 'mysql:host=mysql-delestre.alwaysdata.net;dbname=delestre_data;port=3306';
    $user = 'delestre';
    $password = 'fylw0un5';
    try {
        $db = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    $phone_number = $_POST["phone_number"];
    $mail_addresse = $_POST["mail_addresse"];
    $notice = $_POST["notice"];    
    if(isset($_POST["phone_number"]) && isset($_POST["mail_addresse"]) && isset($_POST["notice"])){
    $req = $db->prepare("UPDATE presentation SET notice= '".$notice."',phone_number= '".$phone_number."',mail_addresse= '".$mail_addresse."' WHERE id = 1");
    $req->execute(array($_POST["notice"],$_POST["phone_number"],$_POST["mail_addresse"]));
    echo "<div>" . "telephone : " .$phone_number . "<br>" . "Mail : " . $mail_addresse . "<br>" . $notice . "<br>" ."<a href=\"index.php\">Retourner sur le site</a>" ."</div>";
    
    }
?>



</body>
</html>