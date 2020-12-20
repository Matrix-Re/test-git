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
	session_start();
	$_SESSION['lifetime'] = time(10);

	if(time() - $_SESSION['lifetime'] > 10)
	{
		echo "time out";
	}

	#_AFFICHAGE DES AVIS CLIENT_#	
    $dsn = 'mysql:host=mysql-delestre.alwaysdata.net;dbname=delestre_data;port=3306';
    $user = 'delestre';
    $password = 'fylw0un5';
    try {
        $db = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

    $read_database = $db->query("SELECT notice, phone_number, mail_addresse, user, pass FROM presentation");

	while($donnees = $read_database->fetch())
	{
	$notice = $donnees['notice'];
	$phone_number = $donnees['phone_number'];
	$mail_addresse = $donnees['mail_addresse'];
	$user_database = $donnees['user'];
	$pass_database = $donnees['pass'];

	if ($user_database != $_POST["user_portail"] && $pass_database != $_POST["pass_portail"]) {
		header("index.php");
	}
	}
?>

<form method="POST" action="save_changes.php">
	<h3>Numero de téléphone</h3><input type="text" name="phone_number" maxlength="15" placeholder="phone_number" value="<?php echo $phone_number ?>"><br>
	<h3>boite mail</h3><input type="text" name="mail_addresse" placeholder="mail_addresse" maxlength="50" value="<?php echo $mail_addresse ?>"><br>
	<h3>description</h3><textarea class="input" name="notice" cols="" rows="" placeholder="notice"><?php echo $notice ?></textarea><br>
	<input type="submit" name="submit" value="Enregistré">
</form>



</body>
</html>