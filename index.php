<?php //phpinfo()
//Creare una variabile con un paragrafo di testo.
//Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.

$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
echo strlen($text);
echo str_replace($badword, '***', $text);
$badword = $_GET["changeword"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <p>
    <?php echo $text; ?>
  </p>
  <p>Lunghezza paragrafo: <?php echo strlen($text); ?></p>
  <p><?php $change_text = str_replace($badword, '***', $text);
  echo $change_text?></p>
  <p>Lunghezza paragrafo: <?php echo strlen($change_text); ?></p>
</body>
</html>
