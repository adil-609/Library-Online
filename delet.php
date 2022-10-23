<?php
     $cnx = new PDO('mysql:host=localhost;dbname=formationdb;charset=utf8', 'root', 'rootroot');
	              $res['id']=$_GET['id'];
			      $req = "DELETE FROM formations WHERE id = '" .$_GET['id']."'" ;
                  
                $cnx->exec($req);
				
				header("location: ../admin.php");
				
              
                          
				  
?>