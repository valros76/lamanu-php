<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $pageTitle ?? "Exercices PHP - La Manu"; ?></title>
   <link rel="stylesheet" href="public/sources/css/style.css">
   <?= $cdns ?? ""; ?>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
</head>

<body>
   <header class="main-head">
      <h1 class="main-head-title">
         <?= $headTitle ?? "PHP"; ?>
      </h1>
      <nav class="main-nav">
         <?php require $root . "/public/templates/parts/menu/main-menu.html"; ?>
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
      "; ?>
   </main>
   <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
   <?= $scripts ?? ""; ?>
</body>

</html>