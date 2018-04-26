   <?php 
function vetsi($cislo1, $cislo2) {
  
  
  if ($cislo1 > $cislo2) {
    return $cislo1;
  } 
  if ($cislo1 < $cislo2) {
    return $cislo2;
  }
  else 
{
    return 'Čísla jsou stejná';
  }
}
        ?>
