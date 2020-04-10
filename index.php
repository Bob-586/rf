<?php 
require_once 'content.php'; 

function display(array $a, string $start_tag="<p>", string $end_tag="</p>"): string {
  $ret = '';  
  foreach($a as $p) {
      foreach($p as $para) {
          $ret .= "{$start_tag}{$para}{$end_tag}" . PHP_EOL;
      }
  }
  return $ret;
}
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="RF">
    <meta name="description" content="wireless not safe">
    <meta name="author" content="">
    <meta name="language" content="english">
    <meta name="robots" content="NOINDEX, NOFOLLOW">
    <meta name="copyright" content="<?= date('Y') ?>">
    <title><?= $title ?></title>
    <link href="<?= $icon ?>" rel="icon" type="image/x-icon" />
    <style>cite { font-style: italic; }
.ul-links {
  columns: 2;
  -webkit-columns: 2;
  -moz-columns: 2;
}
.todo { color: navy; font-size: 18px; }
</style>
    <script type="text/javascript" src="./assets/js/emf.js"></script>
  </head>
  <body>
      <img style="float: right;" src="./assets/images/posion.webp" />
      <h1 style="color: red;"><?= $title ?></h1>
      
      <?= display($p1) ?>
      
      Links:
      <ul class="ul-links">
         <?php 
            require_once 'links.php';
            foreach($links as $link) {
                foreach($link as $link_name => $link_href) {
                    echo "<li><a href=\"{$link_href}\" target=\"_blank\">{$link_name}</a></li>" . PHP_EOL;
                }
            }
         ?>
      </ul>
      <hr>
      
      <?= display($blockquotes, "<blockquote>", "</blockquote><hr>") ?>
      
      <?= display($p2) ?>

      <div id="emf">
        <button onclick="show_emf_image();">Ukraine EMF Study Results</button>
      </div>
      
      <hr>
      <h3>What you should do:</h3>
      <ul>
        <?= display($todos, "<li class=\"todo\">", "</li><br>") ?>
      </ul>
      <hr>
      <a href="https://github.com/Bob-586/rf" target="_blank">Please clone me from github, so you can put it on your own site or update the links</a>
  </body>
</html>  