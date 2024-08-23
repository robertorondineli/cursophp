<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
      <h1>Antecessor e Sucessor do seu número</h1>
    </header>
    <?php 
      $numero = $_GET['numero'];
      echo "Antecessor: ". $numero - 1;     
    ?>
    <br>
    <?php 
      echo "Sucessor: ". $numero + 1;
    ?>
    <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
</body>
</html>