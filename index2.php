<?php //phpinfo()
//Creare una variabile con un paragrafo di testo.
//Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.

$text = 'Una vita da mediano
a recuperar palloni
nato senza i piedi buoni
lavorare sui polmoni
una vita da mediano
con dei compiti precisi
a coprire certe zone
a giocare generosi

Lì
sempre lì
lì nel mezzo
finché ce n’hai stai lì

Una vita da mediano
da chi segna sempre poco
che il pallone devi darlo
a chi finalizza il gioco
Una vita da mediano
che natura non ti ha dato
né lo spunto della punta
né del 10 che peccato

Lì
sempre lì
lì nel mezzo
finché ce n’hai stai lì
stai lì
sempre lì
lì nel mezzo
finché ce n’hai
finche ce n’hai
stai lì

Una vita da mediano
da uno che si brucia presto
perché quando hai dato troppo
devi andare e fare posto
Una vita da mediano
lavorando come Oriali
anni di fatica e botte e
vinci casomai i mondiali
lì
sempre lì
lì nel mezzo
finché ce n’hai stai lì
stai lì
sempre lì
lì nel mezzo
finché ce n’hai
finché ce n’hai
stai lì';

//echo strlen($text);
//echo str_replace($wordchange, '***', $text);
$wordchange = $_GET["worduser"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Esercizio Bad Word - 2</title>
</head>
<body>
  <h1>UNA VITA DA MEDIANO - ORIGINAL</h1>
  <p>
  <?php echo $text; ?>
  </p>
  <p>Il testo è lungo: <?php echo strlen($text).''?> parole</p>
  <h1>UNA VITA DA MEDIANO - MODIFIED</h1>
  <p>
  <?php $modified_text = str_replace($wordchange, 'HO CAMBIATO LA PAROLA', $text);
  echo $modified_text; ?>
  </p>
  <p>Il testo è lungo: <?php echo strlen($modified_text).''?> parole</p>
</body>
</html>
