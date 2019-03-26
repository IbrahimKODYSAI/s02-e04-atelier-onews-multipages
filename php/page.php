<?php
if (isset($_GET['numpage']))
{
    $numpage=$_GET['numpage'];    
}else{

header('Location: index.php');
}

include("inc/articles.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>oNews</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style2.css">
</head>
<body>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="left">
        <h1 class="left__title">O'Clock Students News</h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>
        <?php include("inc/nav.php"); ?>
      </header>
      <main class="right">

          <h2 class="right__title"><?= $pages[$numpage]['titre'];?></h2>





          <article class="post">

            <a href="" class="post__category post__category--color-<?= $pages[$numpage]['type_article']; ?>"><?= $pages[$numpage]['type_article']; ?></a>
            
            <div class="post__meta">
              <img class="post__author-icon" src="<?= $pages[$numpage]['image']; ?>" alt="">
              <strong class="post__author"><?= $pages[$numpage]['auteur']; ?></strong>
              <time datetime="2018-03-27">le <?= $pages[$numpage]['date_parution']; ?></time>
            </div>

            <?php
            foreach($pages[$numpage]['article'] as $paragraphes)
            {
            
               echo "<p>".$paragraphes."</p>";
            }
            ?>
          </article>

      </main>
    </div>
</body>
</html>

































