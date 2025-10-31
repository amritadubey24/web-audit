<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>My Web Audit</title>
  <link rel="shortcut icon" href="assets/images/fav.svg" />
  <link rel="stylesheet" href="assets/css/theame.min.css">
</head>

<body>
  <?php include 'header.php'; ?>

    <main class="web_main--wrapper">
      <?php
        // This variable will be passed from index.php
        echo $content;
      ?>
    </main>

  <?php include 'footer.php'; ?>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/theame.js"></script>

</body>

</html>