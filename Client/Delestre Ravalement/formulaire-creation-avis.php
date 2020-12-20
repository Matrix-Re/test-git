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

<form method="POST" action="creation-avis.php">
	<input type="text" name="nom" placeholder="Nom"><br>
	<input type="number"name="note"maxlength="1"max="5" min="0" placeholder="Note sur 5"><br>
	<textarea class="input" name="commentaire" cols="" rows="" placeholder="commentaire"></textarea><br>
	<input type="submit" name="submit">
</form>

</body>
</html>