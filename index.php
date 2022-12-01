<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


  <title>PHP Badwords</title>
</head>
<body>
  <div class="container my-5 pb-4">
    <div class="row">
      <div class="col">
        <h1 class="pb-2">Inserisci prima la parola da censurare</h1>
      <form action="./result.php" method="POST">
        <input type="text" name="word" placeholder="da censurare" class="my-2"><br>
        <textarea name="paragrafo" id=""rows="4" placeholder="scrivi qualcosa" type="text"></textarea><br>
        <button type="submit">Invia</button>
      </form>
      </div>
    </div>
  </div>



</body>
</html>