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

    <title>Lekce 3</title>

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
        
        <h1> Podmínka příklad: 
<?php
  $name = 'Aleš';
if ($name == 'Aleš') {
  echo 'Čau '.$name;

} else {
  echo 'Dobrý den '.$name;
}

?>
        </h1>
         <h1>
        Cyklus příklad:
        <?php
        $a=null;
        
While ($a < 10) {
  $a = $a + 1;
  echo $a;
}

Do {
  echo $a;
  $a = $a + 1;
} while ($a < 10);
        
        ?>
           
                   <?php
        $number=5;
           $soucet=0;
           $soucin=1;
           $iterator=1;
        
While ($number > 0) {
  $soucet=$soucet+$number;
  $soucin=$soucin*$number;
  $number = $number - 1;
 
}
 
        

        
        ?>
                              <?php
        $number1=5;
           $soucet1=0;
           $soucin1=1;
           $iterator1=1;
        
While ($iterator <= $number) {
  $soucet1=$soucet1+$iterator;
  $soucin1=$soucin1*$iterator;
  $iterator = $iterator +1;
  
  echo $soucet1;
  echo $soucin1;
 
}
 
      ?>
        </h1>
       <h1>
         
         Cyklus úkol:
             <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Součet</th>
      <th scope="col">Součin</th>
  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $soucet; ?></th>
      <td scope="row"><?php echo $soucin; ?></td>
    
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
    
    </tr>
 
  </tbody>
</table>
        </h1>
       <h1>
        Foreach-Tabulka:
            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Předměty</th>
      <th scope="col">Známky</th>
  
    </tr>
  </thead>
  <tbody>
         <tr>
        
         <td scope="row">
           <?php 
         $skola = ['Matematika'=> 2, 'Čeština' => 3 , 'Fyzika' => 1 ,'Chemie' => 4 ,'Bilologie' => 5, 'Angličtina' => 1, 'Dějepis' => 2];
       
           
        
foreach ($skola as $predmety => $znamky) {
   
           ?>
  <tr>
           
      <th scope="row"><?php echo $predmety ?></th>
       <td scope="row"><?php  echo $znamky  ?></td>

 
       
           </tr>
           <?php
             }
           ?>
         

 
  </tbody>
</table>
        </h1>
         <?php
       
        
        if (array_key_exists('accessed',$_SESSION)) {
          if (array_key_exists('jmeno', $_GET)) {
        echo 'Cau';
        } else {
          echo 'Ahoj' ;
          $_SESSION['accessed']=1;
          }
        }
          
         ?>
        
        <form action="/indexlekce3.php" method="GET">
          <input type="text">
        <button type="submit" class="btn btn-success">Submit</button>  
     
 
</form>
 <?php 
    echo 'Ahoj' ; 
     ?>   
        
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>

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
