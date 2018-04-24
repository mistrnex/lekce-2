<!doctype html>
<html lang="en">
  <?php
   session_start() ;
  $name='Petr';
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
  
  </tbody>
</table>
    
    <form action="#" method="get">
<input type="text" name="name" placeholder="Your Name"></input><br/>
<input type="text" name="email" placeholder="Your Email"></input><br/>
<input type="text" name="contact" placeholder="Your Mobile"></input><br/>
<input type="submit" name="submit" value="Submit"></input>
</form>

<?php
if( $_GET["name"] || $_GET["email"] || $_GET["contact"])
{
echo "Welcome: ". $_GET['name']. "<br />";
echo "Your Email is: ". $_GET["email"]. "<br />";
echo "Your Mobile No. is: ". $_GET["contact"];
}
else {echo'Něco chybí';
     }
?>
    
    
        </h1>
         <?php
       
        

  
          if (array_key_exists('accessed', $_SESSION)) {
            if (array_key_exists('jmeno', $_POST)) {
              echo 'Čau ' . $_POST['jmeno'];
            } else {
              echo 'Čau, řekni mi své jméno!';
            }
            
          } else {
            echo 'Čau Neznámý!';
            $_SESSION['accessed'] = 1;
          }
          
         ?>
        
        <form action="/indexlekce3.php" method="POST">
          <input type="text">
        <button type="submit" class="btn btn-success">Submit</button>  
     
 
</form>

        
           <h1>Domácí úkol - Fibonacciho posloupnost</h1>
        <p>
        
                <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Pořadí</th>
      <th scope="col">Fibonacciho číslo</th>
  
    </tr>
  </thead>
  <tbody>

        <?php
        $maxFibonacci=200;
        $prvni=0;
        $druhy=1;
        $Fibonacci=0;
        $poradi=1;
        
        
       While ($Fibonacci <= $maxFibonacci) {
         
       
         ?>
           
            <tr>
           
      <th scope="row"><?php echo $poradi ?></th>
       <td scope="row"><?php  echo $Fibonacci  ?></td>

 
       
           </tr>
        
         <?php 
                $prvni=$druhy;
         $druhy=$Fibonacci; 
         $poradi=$poradi+1;
          $Fibonacci=$prvni+$druhy;
          
          
   }
     ?> 
                  </tbody>
        </table>
        
        </p>
      
       <h1>Domácí úkol - Jména žáků a pořadí</h1>
      
       <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Pořadí žáka</th>
      <th scope="col">Jméno žáka</th>
  
    </tr>
  </thead>
  <tbody>
      
      <?php
      
      $zaci = ['Petr', 'Aleš' , 'Petra' ,'Jakub','Johana', 'Jana', 'Anežka'];
    foreach ($zaci as $jmeno ) {  
      
      ?>
               
  <tr>
           
      <th scope="row">1</th>
       <td scope="row"><?php  echo $jmeno  ?></td>
    </tr>
           <?php
             }
           ?>
         

 
  </tbody>
</table>
       <h1>Domácí úkol - Prospěch žáků</h1>
      
           <?php
      $prospech=['Jakub' => ['Matematika' => 1, 'Fyzika' =>1, 'Chemie'=>2, 'Angličtina' =>3, 'Tělocvik' =>5],
                'Aleš' => ['Matematika' => 2, 'Fyzika' =>4, 'Chemie'=>1, 'Angličtina' =>3, 'Tělocvik' =>1],
                'Petra' => ['Matematika' => 3, 'Fyzika' =>3, 'Chemie'=>2, 'Angličtina' =>4, 'Tělocvik' =>2],
                'Jana' => ['Matematika' => 4, 'Fyzika' =>2, 'Chemie'=>3, 'Angličtina' =>1, 'Tělocvik' =>2],
                'Miroslav' => ['Matematika' => 5, 'Fyzika' =>1, 'Chemie'=>2, 'Angličtina' =>2, 'Tělocvik' =>1]
                ];
      
      foreach($prospech as $jmeno => $vysledky){
        ?>
          <h1> <?php echo $jmeno ?></h1>
  
  
  <?php
  foreach($vysledky as $predmet => $znamka){
    ?>
  

  
   <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Předmět</th>
      <th scope="col">Známka</th>
  
    </tr>
  </thead>
  <tbody>
        
  <tr>
           
      <th scope="row"><?php  echo $predmet  ?></th>
       <td scope="row"><?php  echo $znamka  ?></td>
    </tr>
       

 
  </tbody>
</table>
 
  
  <?php
    }
        }
  ?>
      
        <h1>Domácí úkol - Malá násobilka</h1>
       <?php
      $nasobilka1=[1, 2, 3, 4, 5, 6, 7, 8, 9];
      $nasobilka2=[1, 2, 3, 4, 5, 6, 7, 8, 9];
  
  $z=0;
  $x=0;
  
  while ($z<10) {
    echo $nasobilka1[$z]*$nasobilka2[$x];
    
    $z=$z+1;
    while ($x<10) {
      
      echo $nasobilka1[$z]*$nasobilka2[$x];
      $x=$x+1;
      
    }
    
  }
           ?>
  
  <?php
// Multidimensional array
$superheroes = array(
    "spider-man" => array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    "super-man" => array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    "iron-man" => array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);
 
// Printing all the keys and values one by one
$keys = array_keys($superheroes);
for($i = 0; $i < count($superheroes); $i++) {
    echo $keys[$i] . "{<br>";
    foreach($superheroes[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "}<br>";
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
if (fmod($count, 2)==0) {
  echo 'Vítejte zpět při sudém návratu!';
  
}
else { echo 'Vítejte zpět při lichém návratu!';
          }
  
echo '<br>Počítadlo přístupů:'. $count;

?>
       </h1> 

<form action="#" method="POST">
            <input type="text" name="jmeno">
            <input type="submit" value="odeslat">
</form>
<?php
echo $name;
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
