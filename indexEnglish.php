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
            <li class="ac"> <a href="index.php">Welcome</a></li>
            <div class="bv"></div>
            <li class="me "><a href="membre.php">Members</a></li>
            <div class="bv"></div>
            <li class="op"><a href="openDataSets.php"> OpenDataSets/SW</a></li>
            <div class="bv"></div>
            <li class="pr"><a href="projet.php">Projects</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <main class="principale">
      
      <section class="submain">
        <div class="lienpage"> <a href="index.php">Welcome</a></div>

        <section class="left">
            <h2>Description of Research Activities</h2>
            <p>
            The group is interested in the analysis of visual content, in particular spatio-temporal, such as video or even multi-modal data: sensor signals, video, images.
            Today we develop deep learning AI tools for the analysis of these contents, the particular interest is given to self-attention models in deep networks and transformers, their evaluations in relation to psychovisual data.
            As part of the transverse axis "AI" of LABRI, we develop tools for explanations of AI decisions in information classification problems.
            <div class="cadre1">
              <img src="images/Accueil/2.jpg" alt="groupHome">
            </div> 
            We are involved in national research networks, in particular 
            <a href="http://gdr-isis.fr/">GDR-ISIS</a> in the framework of
            <a href="https://www.gdr-isis.fr/index.php/theme-b-image-et-vision/">thème B image et vision.</a> 
            We participate, as organizers in the task "Analysis of Sport video"
            of the international evaluation campain 
            <a href="https://multimediaeval.github.io/editions/2022/">MediaEval.</a>
            </p>
            <p>
            In motion estimation we use classical approaches by optical flow.
            In classification we found our research on machine learning -Deep Learning with NNs.
          
            </p>  
        </section>
        
        <section class="right">
        <h4>Language</h4>
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
            <a href="index.php"><h4>Welcome</h4></a>
            <a href="membre.php"><h4>Members</h4></a>
            <a href="openDataSets.php"><h4>OpenDataSets/SW</h4></a>
            <a href="projet.php"><h4>Projects</h4></a>
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
