<?php
$cnx = new PDO('mysql:host=localhost;dbname=formationdb;charset=utf8', 'root', 'rootroot'); 
$titre = $_GET['titre'];
$contenu=$_GET['obj'];
$objectif = $_GET['obj'];



$req="INSERT INTO `formations` (`id`, `titre`, `objectif`, `contenu`, `Materiel`, `PublicCible`, `nbreTotalPart`, `nbrSessions`, `nbrGroup`, `DureeForm`, `dureePrise`, `image`, `etablissementFormation`, `nomFormateur`, `domaine`) 
VALUES ('NULL', '".$titre."', '".$objectif."', '".$contenu."', '', 'public_cible', '', '', '', '', '', '', '', '', 'domaine')";
					   
					   
					  
					   $cnx->exec($req);
					   header("location: ../admin.php");
						   
						  
					   
					   
					   
					   
					   
					   
					   					 



?>

