<?php


$cnx = new PDO('mysql:host=localhost;dbname=formationdb;charset=utf8', 'root', 'rootroot');
		
		 
		 $req=" UPDATE formations SET   titre = '".$_GET['titre']."'   WHERE formations . id = '".$_GET['id']."' ";
		 
		 
	$reeq=	" UPDATE `formations` SET `PublicCible` = '".$_GET['PublicCible']."' WHERE `formations`.`id` = '" .$_GET['id']. "' ";//update du public cible

		
		 
		 echo $req;
           $cnx->exec($req);
 
	
 
 
header("location: ../admin.php");
     
	
	 ?>
<?php

 


?>	 
	 