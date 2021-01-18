<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/public/sources/css/style.css">
   <title>User</title>
</head>

<body>
   <header class="main-head">
      <h1>Page User.php</h1>
      <nav class="main-nav">
         <ul class="main-menu">
            <li class="main-menu-items">
               <a href="/?part=partie6&page=exercice2" class="main-menu-items">
                  Retour à l'exercice
               </a>
            </li>
         </ul>
      </nav>
   </header>
   <main class="main-content">
      <section class="main-sections">
         <p class="main-sections-description">
            <?= 'POST - firstname : ' . $_POST["firstname"] . ', lastname : ' . $_POST["lastname"]; ?>
         </p>
      </section>
   </main>
</body>

</html>