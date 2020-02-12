<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title><?= isset($title) ? $title : 'Toko Daring'?> </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/navbar-fixed/">

    <!-- Bootstrap core CSS -->
    <link href="/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/app.css">

   <!-- font awesome -->
   <link rel="stylesheet" href="/assets/libs/fontawesome/css/all.min.css">
  </head>

    <body>
        

        <!-- Navbar -->
        <?php $this->load->view('layouts/_navbar');?>
        <!-- ENdNavbar -->


        <!-- Content -->

            <?php

            $this->load->view($page);

            ?>


        <!-- End of Content -->
        <script src="/assets/libs/jquery/jquery-3.4.1.min.js"></script>
        <script src="/assets/libs/bootstrap/js/bootstrap.bundle.js"></script>
        <script src="/assets/js/app.js"></script>

    </body>
</html>
