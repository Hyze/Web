<?php
require('connexion.php');
require('utile.php');
$connexion=connexionBd();
    $id=$_GET['id'];
    $requeteID=$connexion->prepare("SELECT * FROM SPECTACLE where id=:id;");
    $requeteID->bindParam(':id', $id, PDO::PARAM_INT);
    $requeteID->execute();
    $tab=$requeteID->fetchAll(PDO::FETCH_ASSOC);
//print_r($tab);

$nomDossier=$tab[0]['nomDossierPhotos'] ;
 $dirPhoto="photos/".$nomDossier ;

?>


<!DOCTYPE html>
<html>
<head>
    <title>Untitled Document</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="wrap">
        
        
        <header>
            <nav>
            <ul>
               <ul>
                       
                </ul>
            </ul>
            </nav>
            <h1><a href="#"><img src="img/logo.png" alt="la coursive la rochelle"></a></h1>
            
        </header>
        
        
        <!--CONTENU -->
        <main>
           <h2><?=$tab[0]['nom']?> de <?=$tab[0]['compagnie']?></h2> 
           
            <section class="lesImages">
            
            <p class="grande"><img src="<?=$dirPhoto?>/<?=$tab[0]['photos']?>" alt=""></p>
            
             <ul class='images'>
              
                 <?php listeImage($dirPhoto)?>
                
                
            </ul>

            </section>
                        
            <p class='description'>Description</p>
          <p><?=$tab[0]['description']?></p>        
                        
                        
                 
           
            
            
            
        </main>
        
        
        
        
        
        
        
        
    </div>



</body>
</html>
