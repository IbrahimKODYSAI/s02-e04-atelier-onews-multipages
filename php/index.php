<?php
        include("inc/articles.php");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>oNews</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
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
        <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
        <h2 class="right__title">Latest News</h2>
        <div class="posts">

          
         <?php 

$nbrearticles=count($pages);
for($numpage=0; $numpage<$nbrearticles; $numpage++)
       
       {
       echo"<article class='post'>";

       echo"<a href='' class='post__category post__category--color-".$pages[$numpage]['type_article']."'>".$pages[$numpage]['type_article']."</a>";

 
;


       echo "<h3>".$pages[$numpage]['titre']."</h3>";
       echo "<div class='post__meta'>";
       echo "<img class='post__author-icon' src='".$pages[$numpage]['image']."' alt=''>";
       echo "<strong class='post__author'>".$pages[$numpage]['auteur']."</strong>";
       echo "<time datetime='2018-03-27'>".$pages[$numpage]['date_parution']."</time>"; 
       echo "</div>";
       echo "<p>".$pages[$numpage]['article'][0]."</p>";
     
       echo "<a href='page.php?numpage=$numpage' class='post__link'>Continue reading</a>";
       echo "</article>";
       }
        ?>      
          
          




        </div>
      </main>
    </div>
</body>
</html>