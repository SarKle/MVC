MVC

Créer un mini-site de 5 pages en utilisant une architecture MVC
Pour constituer le contenu de ce mini-site, on va reproduire le site de Didier Motte.

Contenu : Nous allons simplement reproduire la page d'acceuil et la card, une page de présentation, une page de contact et une page de stock. Il va donc falloir créer une maquette pour shématiser tout ça.

Réflexion sur l'UX : Nous allons avoir besoin d'une OnePage et d'un multi site. Le OnePage sera composé des informations élémentaire du site (C'est quoi cette entreprise, qui est la patron,... ) avec quelques éléments du stocks. (N'oubliez pas de mettre un boutton pour accéder au site multipage).

Développement du site multipage en utilisant une architecture MVC pour la gestion des pages
  Comprendre le MVC (lire ces slides en pdf),
  Gérer certains éléments répété avec les include PHP,
  Site responsive (framework) et design,
  L'url doit ressembler à (127.0.0.10:3000/index.php?action=contact)

Contient un MVC :
    un dossier controller qui va inclure les bons fichiers en fonction de l'URL
    un dossier views avec toutes les pages visuelles
    un fichier index.php qui inclut le contrôleur
    un dossier images
    un dossier css
