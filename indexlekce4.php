<!doctype html>
<html lang="en">
  <?php
   session_start() ;
  ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Lekce 4</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/lekce-2/index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/lekce-2/indexlekce3ukoly.php">Úkoly Lekce 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="/lekce-2/indexlekce3.php">Lekce 3</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        


      
 <?php 
  
$handle = fopen("barvy.txt", "r");
   $barvy=[];
        if ($handle) {
          while (!feof($handle)) {
            $barvy[]=fgets($handle);
         } 
        fclose($handle);
        } else {
          echo "Error";
        }
        
    var_dump($barvy);    

     ?>   
         <div class="container">

 
           
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2><?php


     ?></h2>
           
          </div>  </div></div>
   
         <div class="container">
 <div class="row">
     <?php foreach ($barvy as $barva) {
  ?>
          <div class="col-md-4">
             <h2>
<?php
  echo $barva;
  ?>

     </h2>
         </div>
   <?php
   }
  ?>
           </div>    </div>
    
        
        
         <form action="" method="get">
<input type="text" name="cislo1" placeholder="Číslo 1"></input><br/>
<input type="text" name="cislo2" placeholder="Číslo 2"></input><br/>
<input type="submit" name="submit" value="Submit"></input>
</form>
  
 <?php
  if (array_key_exists('cislo1', $_GET)) {
    ?>
  <?php
    require_once 'functions.php';
    ?>
  <h1>
     <?php
 echo vetsi($_GET['cislo1'], $_GET['cislo2']);
  
  ?> 
  </h1>

  <?php
  }
  ?>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
