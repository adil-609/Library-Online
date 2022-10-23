
   
            











<?php




$cnx = new PDO('mysql:host=localhost;dbname=formationdb;charset=utf8', 'root', 'rootroot');
                $requete = $cnx->query("select * from formations where id = ".$_GET['id']);
                  while($res=$requete->fetch(PDO::FETCH_ASSOC)){
            
                      echo' <form  role="form" action="modifier.php" method="GET">';                                                                                             
  
                   echo'  <div class="form-group">';
                     echo'   <div class="input-group">';
                        echo'     <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>';
                    
				
					
				  echo"	<input type='text' class='form-control' name='titre' value=' ".$res['titre']." '> ";
       
				                                                                                  //'. $res['id'].'
	                     echo'  </div>';
                   echo' </div>';
                   echo' <div class="form-group">';
                        echo'<div class="input-group">';
                          echo' <span class="input-group-addon"><span class="fa fa-lock"></span></span>';
                          echo" <input type='text' class='form-control' name='PublicCible ' value= '".$res['PublicCible']."'    >";
                       echo' </div>';
                   echo' </div>';
                   echo'<div class="form-group">';
                       echo' <div class="input-group">';
                          echo' <span class="input-group-addon"><span class="fa fa-lock"></span></span>';
                          echo'  <input type="number" class="form-control" name="NbrPar" value=" '.$res['nbrpar'].' " placeholder="Nombre totale de participation"    >';
                          echo'  <span class="input-group-addon"><span class="fa fa-lock"></span></span>';
                          echo' <input type="number" class="form-control" name="nbrS" placeholder="Nombre de sessions"  value=" '.$res['nbrs'].' "  >';
                      echo'  </div>';
                   echo' </div>';
                   echo' <div class="form-group">';
                    echo'    <div class="input-group">';
                         echo'   <span class="input-group-addon"><span class="fa fa-lock"></span></span>';
                        echo'    <input type="number" class="form-control" name="nbrG" placeholder="Nombre de groupes"value=" '.$res['nbrg'].' "  >';
                        echo'   <span class="input-group-addon"><span class="fa fa-lock"></span></span>';
                         echo'   <input type="number" class="form-control" name="pubC" placeholder="Durée de formation en jour/session"value=" '.$res['dureform'].' "  >';
                      echo'  </div>';
                  echo'  </div>';
                   echo' <div class="form-group">';
                       echo' <div class="input-group">';
                          echo'  <span class="input-group-addon"><span class="fa fa-lock" ></span></span>';
                          echo'  <input type="number" class="form-control" name="pubC" placeholder="Durée de la prise en charge en jour/sesion" value=" '.$res['dureepris'].' "  >';
                      echo' </div>';
                 echo'   </div>';
                  

                 echo'  <div class="form-group">';
                      echo' <div class="col-md-6">';
                        echo "   <textarea class='form-control' rows='6' name='objectif'  value=' ".$res['objectif']." '  ></textarea>";
                     echo'  </div>';
                 echo'  </div>';
                   
                  echo' <div class="form-group">';
                  echo'      <textarea class="form-control" rows="6" name="obj" placeholder="Contenu" value=" '.$res['contenu'].' "  ></textarea>';
                 echo'   </div>';

					echo'<div class="modal-footer">';
						
				echo'	</div>';
				echo'<input type=hidden name="id" value="'. $res['id'].'" /> ';
					echo'	<button class=" btn btn-primary fa fa-pencil><a href=admin/modifier.php?id="'.$res['id'].'"> EDIT<a/> </button>   ';
             echo'  </form> ';                                                     
}
				

				
		

			 //<a href="modifier.php?id="'.$_GET['id'].'""> modifier  </a>
//$titre = $_POST['titre'];
//$objectif = $_POST['obj'];
//$contenu = $_POST['obj'];
//$public_cible = $_POST['pubC'];
//$nbreTotalPart = $_POST['NbrPar'];
//$nbrSessions = $_POST['nbrS'];
//$nbrGroup = $_POST['nbrG'];
//$DureeForm = $_POST['pubC'];
//$dureePrise = $_POST['pubC'];



?>