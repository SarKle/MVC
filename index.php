<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="views/css/style.css">
  <title>Didier Motte</title>
</head>
<body>
  <?php
    $page=isset($_GET['page'])?$_GET['page']:'accueil';
      require ('controller/controls.php');
  ?>
</body>
</html>
