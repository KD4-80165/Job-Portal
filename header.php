<?php
   include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    

    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style= "position: fixed;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
    Welcome <?php echo $login_session; ?>
    <a href = "logout.php">Sign Out</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
  </div>
</nav>
<div class="sidebar">
  <a class="active" href="index.php">Jobs</a>
  <a href="jobs.php">Candidates Applied</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>