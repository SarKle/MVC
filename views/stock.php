<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>STOCK</title>
</head>
<body id="stockpage">
  <div class="stockpart">
    <div class="stocktitle">
  <h1> LE STOCK </h1>
    <h4> FOUILLER LE STOCK </h4>
  </div>
      <form class="stockrecherche" action="stock.php" method="post">
        <input type="search" name="recherche" placeholder="Exemple: table">
        <input class="recherche" type="submit" name="submit" value="Recherche">
      </form>
  <div class="stocklist">
  <ul>
    <li>
      <a href="meublevitrinechapelier.php">
        <image src="images/meublevitrinechapelier.jpg" alt="meuble vitre chapelier" width="250" height="250"/>
          <figcaption>Meuble-vitrine de chapelier</figcaption>
      </a>
    <li>
      <a href="vitrinechromeemagasin.php" >
        <image src="images/vitrinechromeedemagasin.jpg" alt="vitrine chromee de magasin" width="250" height="250"/>
          <figcaption>Vitrine chromée de magasin</figcaption>
      </a>
    </li>
    <li>
      <a href="coffrefort.php" >
        <image src="images/coffrefort.jpg" alt="coffre fort" width="250" height="250"/>
          <figcaption>Coffre fort</figcaption>
      </a>
    </li>
    <li>
      <a href="pigeonnier.php" >
        <image src="images/pigeonnier.jpg" alt="pigeonnier" width="250" height="250"/>
          <figcaption>Pigeonnier</figcaption>
      </a>
    </li>
    <li>
      <a href="comptoircaissemarbre.php" >
        <image src="images/comptoircaissemarbre.jpg" alt="comptoir caisse marbre" width="250" height="250"/>
          <figcaption>Comptoir caisse en marbre</figcaption>
      </a>
    </li>
    <li>
      <a href="miroirs.php" >
        <image src="images/miroirs.jpg" alt="bibliotheque" width="250" height="250"/>
          <figcaption>Grands mirois en bois dorés, sculptés</figcaption>
      </a>
    </li>
  </div>
</div>
</body>
</html>
