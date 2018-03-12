<?php 
include ('admin/connexionDB.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $req = $bdd->prepare ('SELECT * FROM articles WHERE id_article = '.$id);
  $req->execute(array());
  $data= $req->fetch();
}
else{
  header('Location: blog-article.php');
}

//$reqcat = $bdd->prepare ('SELECT * FROM categories');
//$reqcat->execute(array());
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Disquaire</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-nav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-blog.css">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  </head>
  <body>
    <div class="grid-nav">
      <div class="nav">
        <?php include("nav.php"); ?>
      </div>
    </div>
    <div class="grid-blog">
      <div class="blog">
        <div class="blog-titre">
          <?php 
          echo $data['titre'];
          ?>  
        </div>
        <div class="blog-article">
          <?php 
          echo $data['paragraphe'];
          ?>  
        </div>
        <div class="blog-date">
          <?php 
          echo $data['date']."<br>";
          ?>
        </div>
      </div>
    </div>
    <div class="grid-footer">
      <div class="footer">
        <?php include('footer.php'); ?>
      </div>
    </div>
    <script type="text/javascript" src="assets/js/script-nav.js"></script>
  </body>
</html>