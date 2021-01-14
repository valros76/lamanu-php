<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $pageTitle ?? "Exercices PHP - La Manu";?></title>
   <link rel="stylesheet" href="public/sources/css/style.css">
</head>
<body>
   <header class="main-head">
      <h1 class="main-head-title">
         <?= $headTitle ?? "PHP";?>
      </h1>
      <nav class="main-nav">
         <ul class="main-menu">
            <li class="main-menu-items">
               <a href="?page=exercice1" class="main-menu-links">
               Exercice 1
               </a>
            </li>
            <li class="main-menu-items">
               <a href="?page=exercice2" class="main-menu-links">
               Exercice 2
               </a>
            </li>
            <li class="main-menu-items">
               <a href="?page=exercice3" class="main-menu-links">
               Exercice 3
               </a>
            </li>
            <li class="main-menu-items">
               <a href="?page=exercice4" class="main-menu-links">
               Exercice 4
               </a>
            </li>
            <li class="main-menu-items">
               <a href="?page=exercice5" class="main-menu-links">
               Exercice 5
               </a>
            </li>
            <li class="main-menu-items">
               <a href="?page=exercice6" class="main-menu-links">
               Exercice 6
               </a>
            </li>
            <li class="main-menu-items">
               <a href="?page=exercice7" class="main-menu-links">
               Exercice 7
               </a>
            </li>
            <li class="main-menu-items">
               <a href="?page=exercice8" class="main-menu-links">
               Exercice 8
               </a>
            </li>
         </ul>
      </nav>
   </header>
   <main class="main-content">
      <?= $mainContent ?? "
         <section class='errors-sections'>
            <h2 class='errors-sections-title'>
               Erreur
            </h2>
            <p class='errors-sections-description'>
               Erreur de chargement du contenu
            </p>
         </section>
      ";?>
   </main>
</body>
</html>