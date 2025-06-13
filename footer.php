<footer>
    <p><?php 
$jour = date('d'); 
$mois = date('m'); 
$annee = date('Y'); 
$heure = date('H'); 
$minute = date('i'); 
echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . ' et il est ' . $heure. ' h ' . 
$minute; 
?> *La Ferme du Bon Élevage*</p>
</footer>
