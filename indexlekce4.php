<!doctype html>
<html lang="en">
 <?php
  require_once 'templates2.php';
  ?>
<?php
 echo navigace('Lekce 32', 'IT Programators', 'Home', 'Úkoly Lekce3', 'Lekce tři', 'Akce', 'sf', '548');
  
  ?> 
    <main role="main" class="container">

      <div class="starter-template">
        

  <?php
   session_start() ;
  $jmena='Petr';
  ?>
      
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
    <?php 
  
$handle = fopen("people.txt", "r");
   $people=[];
        if ($handle) {
          while (!feof($handle)) {
            $people[]=fgets($handle);
         } 
        fclose($handle);
        } else {
          echo "Error";
        }
 
     ?>   
   <h1>
     Doplňující úkol - people.txt
        </h1>       
 <?php
$q=0;
while ($q<5) {
list($user, $gender, $ability) = explode(",", $people[$q]); ?>
        <h2>
          <?php echo $user; ?>
        </h2>
        <div class="container">
<table class="table table-bordered">
  <thead>
  <tr>
    
 
  <td><h3> Pohlaví</h3></td>
    <td><h3>Schopnost programování</h3></td>
       
  </tr>
  </thead>
  <tbody>
    <tr>
  <td> <?php echo $gender; ?></td>
    <td><?php echo $ability; ?></td>
  </tr>
  </tbody>
        </table>
        </div> 
        
        
<?php
  $q=$q+1;
  }
?>
        <p>
          
      
            <h1>
     Doplňující úkol - results.txt
        </h1> 
             <?php 
  
$handle = fopen("results.txt", "r");
   $znamky=[];
        if ($handle) {
          while (!feof($handle)) {
            $znamky[]=fgets($handle);
         } 
        fclose($handle);
        } else {
          echo "Error";
        }
 
     ?> 
      <?php
$w=0;
      
while ($w<20) {
?>

        
        <h2>
          <?php echo $znamky[$w]; ?>
        </h2>
        <div class="container">
<table class="table table-bordered">
  <thead>
  <tr>
    
 
  <td><h3> Předmět</h3></td>
    <td><h3>Známka</h3></td>
       
  </tr>
  </thead>
  <tbody>
  <?php
              
   
    list($predmet, $znamka) = explode(",", $znamky[$w+1]); ?>
    <tr>
  <td> <?php echo $predmet; ?></td>
    <td><?php echo $znamka; ?></td>
  </tr>
      <?php
              
   
    list($predmet, $znamka) = explode(",", $znamky[$w+2]); ?>
    <tr>
  <td> <?php echo $predmet; ?></td>
    <td><?php echo $znamka; ?></td>
  </tr>
      <?php
              
   
    list($predmet, $znamka) = explode(",", $znamky[$w+3]); ?>
    <tr>
  <td> <?php echo $predmet; ?></td>
    <td><?php echo $znamka; ?></td>
  </tr>
    
  </tbody>
        </table>
        </div> 
        
        
<?php

      $w=$w+4;
      

              }
?>
        
          </p>
    <p>
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

  <h1>
  
<?php
  if(isset($_SESSION['count'])){
$count = $_SESSION['count'];
$count++;
$count = $_SESSION['count'] = $count;
} else {
    $count = $_SESSION['count'] = 0;
    echo 'Vítejte poprvé na naší stránce!';
}

  
echo '<br>Počítadlo přístupů:'.$count;

?>
    
     <form action="" method="get">
<input type="text" name="name" placeholder="Zadejte jméno"></input><br/>

<input type="submit" name="submit" value="Submit"></input>
</form>
<h1>
<?php
  $navstevnici=[];
if( $_GET["name"] )
{
echo "Vítejte u nás, ". $_GET['name']. "<br />";

}
else {echo'Není vyplněno jméno!'; }
  

array_push($navstevnici, $_GET["name"]);


  file_put_contents('pocitadlo.txt', $count);
  
file_put_contents('pocitadlo2.txt', $navstevnici);
  var_dump($navstevnici);
  ?>

       </h1> 
   </p>
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
