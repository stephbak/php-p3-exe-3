<?php
$number1 = 100;
$number2 = 2;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie3</title>
</head>
<body>
  <?php while($number1 > 10){ ?>
    <p><?= $number1 * $number2 ?><!--je multiplie number1 par number2 et ensuite je décrémente number1--></p>
    <?php
    $number1-- ;
  }
  ?>
</body>
</html>
