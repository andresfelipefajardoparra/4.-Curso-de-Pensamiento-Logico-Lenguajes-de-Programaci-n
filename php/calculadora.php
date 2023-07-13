<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>';
    
    function sum($a,$b){
  return $a+$b;
}
function substract($a,$b){
  return $a-$b;
}
function multiply($a,$b){
  return $a*$b;
}
function divide($a,$b){
  return $a/$b;
}
echo '<p>';
print_r(sum(5,6));
echo '</p>';
echo '<p>';
print_r(substract(5,6));
echo '</p>';
echo '<p>';
print_r(multiply(5,6));
echo '</p>';
echo '<p>';
print_r(divide(5,6));
echo '</p>';
    
<!-- ejemplo clase  -->

echo '<p>';
function suma(){
  $valor1 = 8;
  $valor2 = 6;
  $resultado = $valor1 + $valor2;
  echo "La suma es "; print_r( $resultado);
  echo '<p>';
}
function resta(){
  $valor1 = 8;
  $valor2 = 6;
  $resultado = $valor1 - $valor2;
  echo "La resta es "; print_r( $resultado);
  echo '<p>';
}

function multiplicación(){
  $valor1 = 8;
  $valor2 = 6;
  $resultado = $valor1 * $valor2;
  echo "La multiplicacion es "; print_r( $resultado);
  echo '<p>';
}
function división(){
  $valor1 = 8;
  $valor2 = 6;
  $resultado = $valor1 / $valor2;
  echo "La division es "; print_r( $resultado);
  echo '<p>';
}

suma();
resta();
multiplicación();
división();
    
    ?> 

  <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>


