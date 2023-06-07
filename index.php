<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/Accueil/labri.jpg">
    <title>Analyse et Indexation</title>
    <link rel="stylesheet" href="style.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  </head>
  <body>

    <header>
      <nav class="navbar">
        <div class="logo"> <h2>Analyse et Indexation Vidéo LaBRI</h2></div>
        <img src="images/Accueil/menu.png" alt="menu humberger" class="menuHamburger">
        <div class="nav_links">
          <ul class="links">
            <li class="ac"> <a href="index.php">Accueil</a></li>
            <div class="bv"></div>
            <li class="me "><a href="membre.php">Membres</a></li>
            <div class="bv"></div>
            <li class="op"><a href="openDataSets.php">OpenDataSets/SW</a></li>
            <div class="bv"></div>
            <li class="pr"><a href="projet.php">Projets</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <main class="principale">
      
      <section class="submain">
        <div class="lienpage"> <a href="index.php">Acceuil</a></div>

        <section class="left">
            <h2>Description des Activités de recherche</h2>
            <p>
            Le groupe s'intéresse à l'analyse des contenu visuels en particulier spatio-temporels,comme video ou encore les données multi-modales:signaux de capteurs,images vidéos.
            Ce jour nous developpons les outils de l'IA par apprentissage profond pour l'analyse de ces contenus, l'intérêt particulier est porté aux modèles d'auto-attention dans les reseaux profonds et les transformeurs, leurs evaluations par rapport aux données psychovisuelles.
            Faisant partie de l'axe transverse du labri «IA», nous développons des outils d'explications, de decisions IA dans les problèmes de classification de l'information.
            <div class="cadre1">
              <img src="images/Accueil/2.jpg" alt="groupHome">
            </div>
            Nous sommes impliqués dans les réseaux nationaux de recherche notamment 
            <a href="http://gdr-isis.fr/">GDR-ISIS</a> au sein du 
            <a href="https://www.gdr-isis.fr/index.php/theme-b-image-et-vision/">thème B image et vision.</a> Nous participons en tant que Organisateur de la tâche «analyse de contenus sportifs» de la campagne internationale d'évaluation <a href="https://multimediaeval.github.io/editions/2022/">MédiaEval.</a> 
            </p>
            <p>
            Tandis ce qu'en matière d'estimation du mouvement nous restons dans la gamme 
            classique d'estimateurs, pour les outils de classification des images, 
            vidéos et signaux, les outils d'apprentissage profond sont élaborés. 
            </section>
        <section class="right">
        <h4>Langue</4>
          <div class="langue">
            <a href="index.php"><img class="frensh" src="images/Accueil/french.png" alt="Français" ></a>
            <a href="indexEnglish.php"><img class="english" src="images/Accueil/english.png" alt="Anglais"></a> 
          </div>
          <h4>Contact</h4>
          <div class="images-container">
            <p><a href="jennybenoispineau.php"><h4>Pr Jenny Benois-Pineau</h4></a>
            <div class="cadre2"><img src="images/Accueil/IMG_Jenny.jpeg" alt="image1"></div> 
            LaBRI, Université de Bordeaux 1 <br>
            351 cours de la liberation<br>
            33405 Talence cedx France,<br>
            e-mail : jenny.benois-pineau_at_u-bordeaux.fr
            </p>         
          </div>
          <div class="thematique">
            <a href="index.php"><h4>Accueil</h4></a>
            <a href="membre.php"><h4>Membres</h4></a>
            <a href="openDataSets.php"><h4>OpenDataSets/SW</h4></a>
            <a href="projet.php"><h4>Projets</h4></a>
          </div>
        </section>

      </section>
    </main>
    
  </body>
  <script>
    const menuHamburger=document.querySelector(".menuHamburger")
    const nav_links=document.querySelector(".nav_links")
    menuHamburger.addEventListener('click',()=>{
      nav_links.classList.toggle('mobile_menu')
    })
  </script>
</html>
