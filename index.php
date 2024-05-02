<?php 

require_once __DIR__ . '/Model/Movie.php';

$spiderman = new Movie('Spiderman No Way Home', 'Il sequel segue le disavventure che capitano a Peter Parker dopo che Mysterio ha svelato la sua identità segreta di Spider-Man nel film precedente. La vita di Peter è in subbuglio così chiede aiuto a Doctor Strange per far dimenticare a tutti che Peter Parker è Spider-Man.');

$db = new Movie('Dragon Ball Super Broly', 'La conclusione del Torneo del potere ha lasciato Goku con la consapevolezza di quanti potenti guerrieri esistono tra gli universi, spingendolo ad allenarsi ancora più di prima per diventare più forte. Ben presto, tuttavia, una nuova minaccia compare all/orizzonte: Broly, un saiyan sopravvissuto alla distruzione del pianeta Vegeta ed in possesso di una potenza incredibile. Tra passato e presente, il film approfondirà la storia della razza dei saiyan ed il passato di Goku, Vegeta e Broly, coinvolgendo anche Freezer, Beerus e Whis nello scontro tra i tre grandi saiyan.');

var_dump($spiderman);
var_dump($db);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <div class="container text-center">
    <h1>MOVIE OOP</h1>
  </div>


<script src="js/script.js"></script>
</body>
</html>