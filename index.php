<?php
// Déclaration d'une variable month. Array est pour déclarer un tableau
$months=array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>PHP3Ex3</title>
</head>
<body>
  <?php
  // Pour chaque éléments du tableau months on affiche ces élements
  foreach ($months as $element){
    ?>
    <!-- Création d'un paragraphe pour que les mois soient les uns en dessous des autres -->
    <p><?php echo $element; ?></p>
  <?php }; ?>
</body>
</html>
