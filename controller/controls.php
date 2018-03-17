<?php

if($page=='accueil'){
   require "views/accueil.php";
}

elseif ($page=='stock'){
  // require_once('header3.php');
  require_once('stock2.php');
  // require_once('footer.php');
}

elseif ($page=='presentation'){
  require_once('header.php');
  require_once('presentation.php');
  require_once('footer.phpinfo');
}

elseif ($page=='magasin'){
  require_once('header.php');
  require_once('magasin.php');
  require_once('footer.php');
}

else{
  require_once('header.php');
  require_once('accueil.php');
  require_once('footer.php');
}

?>
