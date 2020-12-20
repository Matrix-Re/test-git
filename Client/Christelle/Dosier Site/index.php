<!DOCTYPE html>
<html>
<head>
  <title>Christel Wissen Art - photographe professionnelle</title>
  <meta charset="utf-8">
  <meta name="language" content="french">
  <link rel="stylesheet" type="text/css" href="style\index.css">
  <meta property="og:title" content="Photographe Professionnelle à Beziers" />
  <meta property="og:url" content="lien du site" />
  <meta property="og:description" content="Photographe à Beziers, Shootig evenementiel, manucina, bapteme et mariage... sur rendez-vous"/>
  <link rel="icon" href="REF" type="image/png">
</head>
<body>

  <?php include'menunav.php'?>

  <div>
  <img class="mySlides" src="picture/portrait4.png" width="100%">
  <img class="mySlides" src="picture/sport2.png" width="100%">
  <img class="mySlides" src="picture/urbain6.png" width="100%">
</div>





<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script> 

<?php include 'mesphoto/footer.php'; ?>

</body>
</html>