<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Magasin</title>
</head>
<body>
  <?php include "header.php"; ?>
  <h1 class="contacttitle"> CONTACT </h1>
    <div id="pagecontact">
      <h3> Le Magasin </h3>
        <p>Le magasin est ouvert le samedi matin de 10h00 à 12h30 ou sur rendez-vous.</p>
    <div class="contactnom"> Didier Motte </div>
    <a class="contactemail" href="mailto:sarahklewiec@gmail.com" target="_blank">dmotte@skynet.be</a>
    <div class="contactinfo">
      <p>GSM: +32 495.20.59.34</p>
      <p>rue Saint Georges, 35</p>
      <p>1400 Nivelles</p>
      <p>Belgique</p>
      <p>Retrouvez nos mises à jour en vous <a class="contactfacebook" href="https://www.facebook.com/antiquites.decoration" target="_blank">abonnant à notre page Facebook</a></p>
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2532.5890241127404!2d4.324954415736733!3d50.597591579495955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c232d3694f6c59%3A0xe7333aff0bd54fec!2sRue+Saint-Georges+35%2C+1400+Nivelles!5e0!3m2!1sfr!2sbe!4v1521189809088" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  <div class="contactitineraire">
    <form action="magasin.php" method="post">
      Lieu de départ:
      <input type="text" name="contactdepart">
      <input type="submit" name="contactsubmit" value="Itinéraire">
    </form>
  </div>
</div>
<?php include "footer.php"; ?>
</body>
</html>
