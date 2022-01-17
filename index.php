<?php
$frase = "PHP (acronimo ricorsivo di PHP: Hypertext Preprocessor, preprocessore di ipertesti; originariamente acronimo di Personal Home Page) è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche. L'interprete PHP è un software libero distribuito sotto la PHP License.";
$fraseCensurata = str_replace($_GET['parola'], '***', $frase);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BadWords</title>
</head>

<body>
    <h2>Paragrafo Originale</h2>
    <p><?php echo $frase; ?></p>
    <p>Totale caratteri: <?php echo strlen($frase); ?></p>

    <hr>

    <h2>Paragrafo Censurato</h2>
    <p><?php echo $fraseCensurata; ?></p>
    <p>Totale caratteri: <?php echo strlen($fraseCensurata); ?></p>
</body>

</html>