<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
<?php
   $pageName = 'Home'; 
    ?>
    <title>Template -<?php echo $pageName ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>
<?php
   $projectName = 'IT Programators PHP'; 
    ?>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">    <?php   
          echo $projectName;
           ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
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
        <h1>

          
          <?php
          $text = 'Ahoj';
           $text2 = ' Aleš';
          ?>
            </h1>
       <h1>
         
        
        <?php   
          echo $text;
           ?>
         
           <?php 
          echo $text2;
      ?>
          </h1>
          <?php
           $boolean = false;
             var_dump($boolean);
          $cislo=5;
          $cislo=5+$cislo;
           ?>
       <h2>   
          <?php
          echo $cislo;
           ?>
          </h2>        
       <?php 
        $pole1 = [2,'.','Ahoj'];
         var_dump($pole1);
        $pole2 = ['name' => 'Aleš', 'surname' => 'Růžička'];
        ?>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>
<h1>
  <?php echo $text; ?> <?php echo $pole2["name"]." ".$pole2["surname"]; ?> </h1>
      </h1>
      <?php
        echo 'Programators školení';
?>
     <h1>
       <?php
       $counter = 487;
        echo 'Počítadlo přístupů: '.$counter;
?>
       
   </h1>
    <h1>
    <?php 
        $numbers = [0, 1, 1, 2, 3, 5, 8];
         var_dump($numbers);
    ?>
      <div class="starter-template">
           <?php   
         $pole3 = ['závodníci' => ['Adam', 'Eva' , 'Jakub'], 'pořadí' => [2, 3, 1]];
           ?>
        
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Pořadí</th>
      <th scope="col">Závodník</th>
  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $pole3['závodníci'][2]; ?></td>
    
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><?php echo $pole3['závodníci'][0]; ?></td>
    
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><?php echo $pole3['závodníci'][1]; ?></td>
  
    </tr>
  </tbody>
</table>
 </div>
       
  </h1>
    
    <div class="starter-template">
      <h2>
        Domácí úkol č.2
      </h2>
         <?php
      $a=10;
      $b=5;
      $area=($a*$b);
      
      ?>
      <h1>
        Obdélník o stranách a:<?php echo $a; ?>, b:<?php echo $b; ?> má obsah {<?php echo $area; ?>}. 
      </h1>
   
      
    </div>
    
        <div class="starter-template">
      <h2>
        Domácí úkol č.3
      </h2>
          <?php
      $stranaA=6;
      $stranaB=6;
    
      $uhelBeta=60;
      $uhelAlfa=rad2deg(asin($stranaA*sin(deg2rad($uhelBeta))/$stranaB)) ;
          $uhelGama=180-$uhelAlfa-$uhelBeta;
        $stranaC=$stranaB*sin(deg2rad($uhelGama))/sin(deg2rad($uhelBeta)) ;
          $obvod=$stranaA+$stranaB+$stranaC ;
        $s=($stranaA+$stranaB+$stranaC)/2;
          $obsah=sqrt(($s*($s-$stranaA)*($s-$stranaB)*($s-$stranaC))) ;
      ?>
             <h1>
        Trojúhelník podle věty Ssu. 
      </h1>
          <h2>
  Vstupní parametry:
      </h2>
             
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Vstupní parametr</th>
      <th scope="col">Hodnota</th>
  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">strana a</th>
      <td><?php echo $stranaA; ?></td>
    
    </tr>
    <tr>
      <th scope="row">strana b</th>
      <td><?php echo $stranaA; ?></td>
    
    </tr>
    <tr>
      <th scope="row">úhel Beta</th>
      <td><?php echo $uhelBeta; ?></td>
  
    </tr>
  </tbody>
</table>
        <h2>
  Vlastnosti trojúhelníku:
      </h2> 
  
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Výstupní parametr</th>
      <th scope="col">Hodnota</th>
  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">strana a</th>
      <td><?php echo $stranaA; ?></td>
    
    </tr>
    <tr>
      <th scope="row">strana b</th>
      <td><?php echo $stranaA; ?></td>
    
    </tr>
       <tr>
      <th scope="row">strana c</th>
      <td><?php echo $stranaC; ?></td>
    
    </tr>
    
        <tr>
      <th scope="row">úhel Alfa</th>
      <td><?php echo $uhelAlfa; ?>
          
          </td>
  
    </tr>
    
    <tr>
      <th scope="row">úhel Beta</th>
      <td><?php echo $uhelBeta; ?></td>
  
    </tr>
    
      <tr>
      <th scope="row">úhel Gama</th>
      <td><?php echo $uhelGama; ?></td>
  
    </tr>
    
     <tr>
      <th scope="row">Obvod</th>
      <td><?php echo $obvod; ?></td>
  
    </tr>
    
         <tr>
      <th scope="row">Obsah</th>
      <td><?php echo $obsah; ?></td>
  
    </tr>
  </tbody>
</table>
   
      
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
