<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>STOCK</title>
</head>
<body>
  <?php include "header.php";?>
  <div class="stockpage">
  <section class="cardcontainer">
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
  </section>
  <h1 class="stock"> STOCK </h1>
    <h4 class="stock2"> FOUILLER LE STOCK </h4>
      <form class="stockrecherche" action="stock.php" method="post">
        <input type="search" name="recherche" placeholder="Exemple: table">
        <input type="submit" name="submit" value="Recherche">
      </form>
  <div class="stocklist">
  <ul>
    <li>
      <a href="http://localhost/MVC/views/meublevitrinechapelier.php">
        <image src="images/./meublevitrinechapelier.jpg" alt="meuble vitre chapelier" width="250" height="250"/>
          <figcaption>Meuble-vitrine de chapelier</figcaption>
      </a>
    <li>
      <a href="http://localhost/MVC/views/vitrinechromeedemagasin.php" >
        <image src="images/./vitrinechromeedemagasin.jpg" alt="vitrine chromee de magasin" width="250" height="250"/>
          <figcaption>Vitrine chromée de magasin</figcaption>
      </a>
    </li>
    <li>
      <a href="http://localhost/MVC/views/coffrefort.php" >
        <image src="images/./coffrefort.jpg" alt="coffre fort" width="250" height="250"/>
          <figcaption>Coffre fort</figcaption>
      </a>
    </li>
    <li>
      <a href="http://localhost/MVC/views/pigeonnier.php" >
        <image src="images/./pigeonnier.jpg" alt="pigeonnier" width="250" height="250"/>
          <figcaption>Pigeonnier</figcaption>
      </a>
    </li>
    <li>
      <a href="http://localhost/MVC/views/comptoircaissemarbre.php" >
        <image src="images/./comptoircaissemarbre.jpg" alt="comptoir caisse marbre" width="250" height="250"/>
          <figcaption>Comptoir caisse en marbre</figcaption>
      </a>
    </li>
    <li>
      <a href="http://localhost/MVC/views/bibliotheque.php" >
        <image src="images/./bibliotheque.jpg" alt="bibliotheque" width="250" height="250"/>
          <figcaption>Bibliothèque en chêne brut</figcaption>
      </a>
    </li>
    <li>
      <a href="http://localhost/MVC/views/miroirs.php" >
        <image src="images/./miroirs.jpg" alt="bibliotheque" width="250" height="250"/>
          <figcaption>Grands mirois en bois dorés, sculptés</figcaption>
      </a>
    </li>
  </div>
</div>  
</body>
</html>
