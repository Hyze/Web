<?php

$appareilPhoto=array(
                     array(1,"Compact Canon PowerShot G7X Mark II",599),
                     array(2,"Appareil photo compact Canon PowerShot G5X",729),
                     array(3,"Compact Panasonic Lumix DMC-TZ101",610)
);

print_r($appareilPhoto);
$somme=0;
$cpt=0;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Untitled Document</title>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
    </head>
    <body>
        <!--Affichage -->
  <fieldset>
        
  <table>        
        <tr>
           
                <?php foreach($appareilPhoto as $keys => $value): ?>
                <?php $cpt++; ?>
                <?php $somme =$somme+$value[2] ?>
                <?php foreach($value as $valeur):?>
                <td><?= $valeur?></td>
                 <?php endforeach ?>   
    </tr>
       <?php endforeach ?>
        <!--Prix moyen -->    
        </table>
      <p><?=$somme/$cpt?></p>
 </fieldset>
        
    </body>
</html>
