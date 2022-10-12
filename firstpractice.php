<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPFILE</title>
</head>
<body>


<?php  
$colors = ["browen", "white", "skyblue", "voilet"];

foreach ($colors as $value) {
  echo "  <li>$value</li> ";
}
?>



<?php
for ($x = 0; $x <= 100; $x++) {
  if($x%2 === 0){
    echo "The number is: $x <br>";
  }
}
?>
</body>
</html>
