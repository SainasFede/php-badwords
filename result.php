<?php

  $word = $_POST['word'];
  $paragrafo = $_POST['paragrafo'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stampo</title>
</head>
<body>
  
  <h1>La Parola è <?php echo $word ?></h1>

  <p><?php echo $paragrafo ?></p>
  <h4>Il Paragrafo contiene <?php echo strlen($paragrafo) ?> tra caratteri e spazi</h4>

  <h1>Censuriamo alcune parole</h1>
  <p><?php echo str_replace($word,'***',$paragrafo) ?></p>

</body>
</html>