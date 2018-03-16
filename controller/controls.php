<?php

if($page=='acceuil.php'){
  require_once('views/header.php');
  require_once('views/accueil.php');
  require_once('views/footer.php');
}

elseif ($page=='stock.php'){
  require_once('views/header3.php');
  require_once('views/stock2.html');
  require_once('views/footer.html');
}

elseif ($page=='presentation.php'){
  require_once('views/header.php');
  require_once('views/presentation.php');
  require_once('views/footer.phpinfo');
}

elseif ($page=='magasin.php'){
  require_once('views/header.php');
  require_once('views/magasin.php');
  require_once('views/footer.php');
}

else{
  require_once('views/header.php');
  require_once('views/accueil.php');
  require_once('views/footer.php');
}

?>
