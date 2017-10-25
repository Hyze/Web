<?php 
	function tronquer_texte($texte, $longeur_max = 100)
	{
	    if (strlen($texte) > $longeur_max)
	    {
			$texte = substr($texte, 0, $longeur_max);
			$texte .= "...";
	    }
	    return $texte;
	}



    function listeImage($DIR)
    {
				$liste_rep = scandir($DIR);
				//print_r($liste_rep);
				$num = count($liste_rep);
        
                //echo $num;
                $i=0;
				while($i<$num){
					$element=$liste_rep[$i];
						
							//echo $element;
                            
                            if(($element != ".") && ($element != ".."))
							{
								$chemin=$DIR."/".$element;
                                //echo $chemin;
                                echo "<li><img  src='".$chemin."' alt=''></li>";
								
							}
						
                        $i++;
                }
    }
        
        
        
        
        
        
        
			