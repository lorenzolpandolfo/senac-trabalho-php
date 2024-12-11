<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
  <title>Techio | Software sob Medida</title>
</head>
<body>
  <?php
    include 'elements/header.php';
  ?>
  <main class="center-container">
    <?php
      include 'pages/home.php';
      include 'pages/about.php';
      include 'pages/services.php';
      include 'pages/projects.php';
      include 'pages/contact.php';
    ?>
  </main>
  <?php
    include 'elements/footer.php';
  ?>
</body>
</html>