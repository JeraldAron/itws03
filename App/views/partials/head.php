<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
      // Detect base URL so assets work under both:
      //   http://ws03-main.test/       (vhost doc root = public/)
      //   http://localhost/ws03-main/  (doc root = www/, project in subfolder)
      $scriptDir = dirname($_SERVER['SCRIPT_NAME']); // e.g. "" or "/ws03-main/public"
      $base = rtrim(str_replace('/public', '', $scriptDir), '/');
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= $base ?>/css/style.css" />
    <link rel="stylesheet" href="<?= $base ?>/css/custom.css" />
    <title>Jobseek</title>
  </head>
  <body class="bg-gray-100">