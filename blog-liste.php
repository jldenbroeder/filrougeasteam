<?php 
include ('admin/connexionDB.php');
if (isset($_POST['categorie'])){
  $categorie = $_POST['categorie'];
  echo $categorie."<br>";
  if ($categorie == "ALL"){
    $req = $bdd->prepare ('SELECT * FROM articles ORDER BY date DESC');
    $req->execute(array());
  }
  else{
    $req = $bdd->prepare ('SELECT * FROM articles WHERE (categorie1 = '.$categorie.' || categorie2 = '.$categorie.' || categorie3 = '.$categorie.') ORDER BY date DESC');
    $req->execute(array());
  }
}
else {
  $categorie = "ALL";
  $req = $bdd->prepare ('SELECT * FROM articles ORDER BY date DESC');
  $req->execute(array());
}

$reqcat = $bdd->prepare ('SELECT * FROM categories');
$reqcat->execute(array());
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
        <form action="" method="POST"><br><br>
          <select id="categorie" name="categorie" onchange='this.form.submit()'>
            <option value="ALL" <?php if ($categorie == "ALL") { echo " selected"; } ?>>Toutes les catégories</option> 
            <?php
            while ($datacat = $reqcat->fetch())
            {
            ?>	
            <option value="<?php echo $datacat['id_categorie']; ?>" <?php if ($categorie == $datacat['id_categorie']) { echo " selected"; } ?>><?php echo $datacat['titre']; ?></option> 
            <?php
            }
            ?>
          </select>
          <noscript><input type="submit" value="Submit"></noscript><br><br>
        </form>
        <table>
          <tr>
            <th>Titre</th>
            <th>Article</th>
            <th>Date</th>
          </tr>
          <?php
          while ($data = $req->fetch())
          {
          ?>	
          <tr>
            <td><a href="blog-article.php?id=<?php echo $data['id_article']; ?>"><?php echo $data['titre']; ?></a></td>
            <td><?php if ( strlen($data['paragraphe']) > 50 ) {
            echo substr($data['paragraphe'], 0, 50)."...";
          }
            else {echo $data['paragraphe']; } ?></td>
            <td><?php echo $data['date']; ?></td>
          </tr>
          <?php
          }
          ?>
        </table>   
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