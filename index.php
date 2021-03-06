<!DOCTYPE html>
<html>
  <head>
    <title>Disquaire</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-nav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-head.css">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Cherry+Cream+Soda|Faster+One|Frijole|Poller+One|Salsa|Sonsie+One|Titan+One|Zilla+Slab+Highlight" rel="stylesheet">
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
        <?php include('footer.php'); ?>
      </div>
    </div>
    <script type="text/javascript" src="assets/js/script-nav.js"></script>
  </body>
</html>