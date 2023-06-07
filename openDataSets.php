<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="images/openDataSets/labri.jpg">
  <title>Analyse et Indexation</title>
  <link rel="stylesheet" href="openDatasets.css">
</head>
<body>
      <!-------------***************header*************--------------->
  <header>
    <nav class="navbar">
      <div class="logo"> <h2>Analyse et Indexation Vidéo LaBRI</h2></div>
      <img src="images/openDataSets/menu.png" alt="menu humberger" class="menuHamburger">
      <div class="nav_links">
        <ul class="links">
          <li> <a href="index.php">Accueil</a></li>
          <div class="bv"></div>
          <li><a href="membre.php">Membres</a></li>
          <div class="bv"></div>
          <li><a href="openDataSets.php">OpenDataSets/SW</a></li>
          <div class="bv"></div>
          <li><a href="projet.php">Projets</a></li>
        </ul>
      </div>
      
    </nav>
  </header>
    <!-------------***************main principal*************--------------->
  <main>
    <div class="lienpage"> <a href="openDataSets.php">OpenDataSets/SW</a></div>
      <section class="principale">
      
        <div class="openData">
          <!-- <div class="data"> -->
            <span> <strong>Open Data Sets</strong></span></a>
          <!--</div>-->
        </div>
           
        <section class="block1">

          <div class="detail">
            <div class="titre"><strong>LaBRI-ANR ICOS-HD</strong></div>
            <div class="cadreDetail">
            <a href="https://open-video.org/collection_detail.php?cid=23" target="_blank"><img class="image-font" src="images/openDataSets/pietonpan259.jpg" alt=""></a>
            </div>
          </div>
          
          <div class="mexCulture">
            <div class="titre"><strong>MexCulture 142</strong></div>
            <div class="cadreMex">
            <a href="MexCulturefr.php" target="_blank"><img class="image-font" src="images/openDataSets/7.png" alt=""></a>
            </div>
          </div>
          
          <div class="graspinginthewild">
            <strong>Grasping In The Wild</strong>
            <div class="cadreGras">
            <a href="graspinginthewildfr.php" target="_blank"><img class="image-font" src="images/openDataSets/12.png" alt=""></a> 
            </div>
          </div>
          <div class="labriH264">
            <strong>LaBRI H.264 with NIDN</strong>
            <div class="cadreLabri">
            <a href="https://qualinet.github.io/databases/video/labri_h_264_with_network_impariment/" target="_blank"><img class="image-font" src="images/openDataSets/LaBRI_H_264.png" alt=""></a> 
            </div>
          </div>
        </section>
        <div class="openSource"><span><strong>Open source software</strong></span></div><br>
        <div class="fem">
          <a id="fem" href="https://github.com/labribkb/fem">FEM explaner for CNN image classifiers</a><br><br>
          <a href="https://github.com/labribkb/fem"><img src="images/openDataSets/eleph.jpeg" alt=""></a>  
        </div>
        
        
        
<!---
        debut du background
        <section class="block1">
              <div class="detail">
                <div class="titre"><h4>LaBRI-ANR ICOS-HD</h4></div>
                <div class="cadre1">
                  <a href="https://open-video.org/collection_detail.php?cid=23" target="_blank"><img class="image-font" src="assets/images/imgs/voitureFondTextureFix10095 (1).gif" alt=""></a>
                </div>
              </div>

              <div class="mexCulture">
              <div class="titre"><h4>MexCulture 142</h4></div> 
                <div class="cadre1">
                  <a href="MexCulture.php" target="_blank"><img class="image-font" src="assets/images/imgs/3.jpg" alt=""></a>
              </div>
                
                
              </div>
              <div class="graspinginthewild">
                <div class="titre"><h4>Grasping In The Wild</h4></div>               
                <div class="cadre1">
                 <a href="graspinginthewild.php" target="_blank"><img class="image-font" src="assets/images/imgs/12.png" alt=""></a> 
                </div>        
              </div>
              
              <div class="labriH264">
                <div class="titre"><h4>LaBRI H.264 with Network Impariment <br> Dataset on COST Qualinet</h4></div>  
                
                <div class="cadre1">
                 <a href="https://qualinet.github.io/databases/video/labri_h_264_with_network_impariment/" target="_blank"><img class="image-font" src="assets/images/imgs/LaBRI_H_264.png" alt=""></a> 
                </div>        
              </div>
        </section>-->
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



  