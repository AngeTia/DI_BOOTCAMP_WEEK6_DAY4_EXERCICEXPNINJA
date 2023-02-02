<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exerciceNinja</title>
</head>
<body>
<?php
function array_union($x, $y)
   { 
    //ici on a fusionner les deux tableaux avec la fonction array_merge()
      $aunion=  array_merge(
        // ici on   Calcule l'intersection des deux tableaux avec la fonction array_intersect()
            array_intersect($x, $y),
            // ici on   Calcule la difference des deux tableaux avec la fonction array_did()
            array_diff($x, $y),     
            array_diff($y, $x)      
        );
        return $aunion;
   }
$tab1 = array(1, 2, 3, 4,5);
$tab2 = array(2, 3, 4, 5, 6,7,8);
//resulltat de la fusion des deux tableaux
print_r(array_union($tab1, $tab));
?>

    
</body>
</html>