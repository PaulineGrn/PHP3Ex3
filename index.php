<?php
// Déclaration d'une variable month. Array est pour déclarer un tableau
$month=array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>PHP3Ex3</title>
  </head>
  <body>
    <?php
    // Déclaratioon d'un boucle "for" pour un tableau.
    // Numéro de 0 à 12 pour le nombre de mois dans l'année
    // numéro++ pour la boucle
for ($numero = 0; $numero < 12; $numero++)
{
  // Affichage de la variable month et entre crochet la variable numero ainsi que des br pour les retours a la ligne
  echo$month[$numero]. '<br/>';
}
?>
  </body>
</html>
