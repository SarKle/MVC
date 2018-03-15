<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>ACCUEIL</title>
</head>
  <?php include "header2.php"; ?>
<body id="accueilpage">
  <div class="cardcontainer">
    <div class="cardtop">
    <div class="cardlogo">
      <image class="cardlogo2" src="../views/images/vcard.jpg" style="width:110px"alt="logo didier motte"/>
    </div>
    <div class="cardprenom">
      DIDIER
    </div>
    <div class="cardnom">
    MOTTE
    </div>
  </div>
  <div class="cardbottom">
    <div class="carddomaines">
      Antiquités • Décoration • Aménagements d'intérieur
    </div>
    <div class="cardgsm">
      <image src="images/tel.png" width="16"> +32 495/20.59.34
    </div>
    <div class="cardmenu">
      <a class="cardlinks" href="presentation.php?action=presentation">PRÉSENTATION</a>
      <a class="cardlinks" href="stock.php?action=stock">STOCK</a>
      <a class="cardlinks" href="magasin.php?action=magasin">MAGASIN</a>
    </div>
  </div>
</div>
  <?php include "stock.php"; ?>
  <div class="cite">
  <cite> <p> <div class="citation">"L'ennui naquit un jour de l'uniformité"</div> </cite></p>
  <p><div class="auteur"> – Antoine Houdar de la Motte</div></p>
</div>

</body>
</html>
