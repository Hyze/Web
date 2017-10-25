<?php

require('connexion.php');
require('utile.php');
$connexion=connexionBd();


$requeteType="SELECT idSpec,type FROM TYPESPECTACLE;";
$tmp=$connexion->query($requeteType);
$TabType=$tmp->fetchAll(PDO::FETCH_ASSOC);


if(!empty($_GET['type']))
{

       $type=$_GET['type'];
       $requeteId=$connexion->prepare("SELECT compagnie,date,description,id,nom,nomDossierPhotos,photos,plusieursDate,T.type FROM SPECTACLE S, TYPESPECTACLE T where T.idSpec=S.type AND  S.type=:type");
    $requeteId->bindParam(':type', $type, PDO::PARAM_INT);
    $requeteId->execute();
    $tab=$requeteId->fetchAll(PDO::FETCH_ASSOC);
       
}
   else{
        $requete="SELECT compagnie,date,description,id,nom,nomDossierPhotos,photos,plusieursDate,T.type FROM SPECTACLE S, TYPESPECTACLE T where T.idSpec=S.type";
$objet=$connexion->query($requete);
$tab=$objet->fetchAll(PDO::FETCH_ASSOC);
       
   }
$requeteType="SELECT idSpec,type FROM TYPESPECTACLE;";
$tmp=$connexion->query($requeteType);
$TabType=$tmp->fetchAll(PDO::FETCH_ASSOC);


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
                        <?php foreach($TabType as $key => $val):?>
                        <li><a href="index.php?type=<?=$val['idSpec'];?>"> <?=$val['type'] ;?></a></li>
                        <?php endforeach;?>
                    </ul>
                </nav>
                <h1><a href="index.php"><img src="img/logo.png" alt="la coursive la rochelle"></a></h1>

            </header>

            <main>

                <h2>La saison</h2>



                <ul>
                   <?php foreach($tab as $key => $val): ?>
                    <li>
                        <?php if($val['plusieursDate']==1) :?>
                        <p>a partir de  <?=$val['date']?></p>
                        <?php else :?>
                        <p><?=$val['date'];?></p>
                        <?php endif ;?>
                        <?php $nomDossier=$val['nomDossierPhotos'] ;?>
                        <?php $dirPhoto="photos/".$nomDossier ?>
                       <p><img src="<?=$dirPhoto?>/<?=$val['photos']?>" alt=""></p>
                        <h3><?=$val['nom']?> <?=$val['compagnie']?></h3>
                        <h4><?=$val['type'] ?></h4>
                        <p><?=tronquer_texte($val['description'])?></p>
                        <p><a href="spectacle.php?id=<?=$val['id']?>"><img src="img/plus.png" alt="plus"></a> </p>
                    
                    </li>
                        <?php endforeach ;?>
                

                </ul>



            </main>








        </div>



    </body>
</html>
