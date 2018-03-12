<!DOCTYPE html>
<html>
  <head>
    <title>Disquaire</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-nav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-head.css">
    <link rel="stylesheet" type="text/css" href="assets/css/stylePresentation.css">
    <link rel="stylesheet" type="text/css" href="assets/css/article.css">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  </head>
  <body>
    <div class="grid-nav">
      <div class="nav">
        <?php include("nav.php"); ?>
      </div>
    </div>
     <div class="grid-header">
      <div class="header">
        <?php include("head.php"); ?>
      </div>
    </div>
    <div class="grid">
        <?php include('presentation.php');?>
    </div>
    <div class="grid">
      <div class="article">
        <?php include('article.php'); ?> 
      </div>
    </div>
    <div class="grid">
      <div class="contact">
        <?php include('contact.php');?>
      </div>
    </div>
    <div class="grid-footer">
      <div class="footer">
<<<<<<< HEAD
        <?php include('footer.php'); ?>
=======
        <?php include('footer.php'); ?> 
>>>>>>> 2839661b366a8e6b26d7707338c8cdaf3fd94c33
      </div>
    </div>
    <script type="text/javascript" src="assets/js/script-nav.js"></script>
  </body>
</html>