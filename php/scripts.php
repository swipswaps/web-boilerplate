<!-- respond.js per IE8 -->
<!--[if lt IE 9]>
  <script src="js/lib/respond.min.js"></script>
<![endif]-->
<script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<?php 
  $path = $_SERVER['REQUEST_URI'];

  if (strlen(str_replace('/', '', $path)) == 0 || strpos($path, 'home') !== false) : ?>
    <script async defer src="home.js"></script>
<?php endif; ?>
