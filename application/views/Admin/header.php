<!DOCTYPE html>
<html>
<head>
<title>Article List</title>

<?= link_tag("Assets/css/bootstrap.min.css") ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<style>
  .btn-logout {
  width: 100%;
  padding: 3px 20px !important;
  text-align: left !important;
}
</style>

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?php
if($this->session->userdata('id')){
  include('adminMenu.php');
}
   ?>

</nav>
