<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>oNews</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/contact.css">


</head>
<body>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="left">
        <h1 class="left__title">O'Clock Students News</h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Say a word</strong> contact us</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>

        <?php include("inc/nav.php"); ?>

      </header>
      <main class="right">
        <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
        <h2 class="right__title">Contact</h2>
     



            <form action="traitement_formulaire.php" method="POST">


                          <div id="infos">
    <div id="gauche">
    <input type="radio" name="sexe" value="mme" checked>Mme /
                    <input type="radio" name="sexe" value="mr">M 
    </div>
    <div id="droite">
        <div class="info_droite">
        <input name="prenom"style="width:99%"; class="label" value="Prenom"> 
        </div>
        <div class="info_droite">
                    <input name="nom" style="width:99%; " class="label"  value="Nom">
        </div>
    </div>
</div>


            <!-- <input type="radio" name="sexe" value="mme" checked>Mme /
            <input type="radio" name="sexe" value="mr">M 
            <input name="prenom" class="label" value="Prenom"> 
            <input name="nom" class="label"  value="Nom"> -->

            <p><input type="email" class="label" value="Adresse E-Girl"></p>
            <p>J'ai connu ce site grâce à :
            <select name="connaissance">
                <option> choisir</option>
                <option> Facebook</option>
                <option> Twitter</option>
                <option> Google</option>
                <option > JT de 13h de Jean Pierre Pernault</option>
                <option > Autre</option>
            <select >
            </p>
           <p class="separation"></p>

            Pour laisser un commentaire à propos d'O'Clock, c'est par ici</p>
            <textarea name="comm" rows=10 cols=40 class="label" >Votre message
            </textarea>

           <p class="separation"></p>

            <input type="checkbox" name="valide" value="">Je certifie la véracité de ces informations
            <!-- <hr>  permet de mettre des trait de séparation -->
            <p class="separation"></p>
            Ajouter un fichier : <input type="file" name="fichier" value="Parcourir" >

           <p class="separation"></p>

            <input type="submit" class="envoyer" name="envoyer" value="envoyer"/>

        
            </form>

      </main>
    </div>
</body>
</html>