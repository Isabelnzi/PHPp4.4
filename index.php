
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>P4ex4</title>
  </head>
  <body>
    <p>
  <?php
    $firstNumber = 10;
   $secondNumber = 32;
function Comparate($number1, $number2) {
  if($number1 > $number2) {
    $message = 'Le premier nombre est plus grand !';
  } elseif ($number1 < $number2) {
    $message = 'Le premier nombre est plus petit !';
  } else {
    $message = 'Les deux nombres sont identiques !';
  }
  return $message;
}
echo Comparate($firstNumber, $secondNumber);
?>
     ?>
   </p>
  </body>
