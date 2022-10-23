<div class="container-fluid " >
    <div class="row content">
        <div class="col-sm-2 sidenav text-left ">
            <ul class="nav nav-stacked">
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Acceuil <i class="fa fa-chevron-down"></i></a>
                    <ul class="nav nav-stacked collapse in" id="userMenu">
                        <!-- <li class="active"> <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li> -->
                            <li><a  href="">&nbsp;&nbsp;&nbsp;.</a></li>



                    </ul>
                </li>
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2"> Formations <i class="fa fa-chevron-down"></i></a>

                    <ul class="nav   nav-stacked collapse in" id="menu2">
                        <li><a  href=""> &nbsp;&nbsp;</a></li>
                    </ul>
                </li>
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2"> Journal <i class="fa fa-chevron-down"></i></a>

                    <ul class="nav   nav-stacked collapse in" id="menu2">
                        <li><a  href=""> &nbsp;&nbsp;</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-4 pull-right">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-search"></span></span>
                            <input placeholder="Rechereche..." class="form-control" type="text" id="formsearch" /><br>
                        </div>
                    </div>
                </div>
            </div>
            <button class="col-md-12 btn btn-success fa fa-plus" data-toggle="modal" data-target="#modalrequest" ></button><br>
        </div>
        <div class="container col-md-10 col-xs-12">
            <div class="row" id="bodyFormation">

                <?php
             $cnx = new PDO('mysql:host=localhost;dbname=formationdb;charset=utf8', 'root', 'rootroot');
            
                    $req = "select * from formations";
                $requete = $cnx->query($req);
                echo "<br><table class='table'>";   
                echo "<thead><tr>";
                echo "<th>#</th>";
                echo "<th>Titre de formation</th>";
                echo "<th>Option</th>";
                echo "</tr</thead>";
                echo "<tbody>";
                while ($res = $requete->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>".$res['id']."</td>";
                    echo "<td>".$res['titre']."</td>";
                    echo "<td>";
                    echo "<button class='btn btn-danger fa fa-trash'> <a href=admin/delet.php?id=".$res['id']."> DELET<a/></button>&nbsp;&nbsp;";
                    echo "<button class=' btn btn-primary fa fa-pencil'><a href=admin/edit.php?id=".$res['id']."> EDIT<a/> </button>";
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
				
				
				//
				
                ?>
            </div>
        </div>
    </div>
</div>
<!-- Modal de ajoute formation-->
<div id="modalrequest" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title">Ajouter Formation</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="admin/insert.php" method="GET">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                            <input type="text" class="form-control" name="titre" placeholder="Titre"><!-- ghanbedlo id b name -->
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-lock"></span></span>
                            <input type="text" class="form-control" name="pubC" placeholder="Public Cible">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-lock"></span></span>
                            <input type="number" class="form-control" name="NbrPar" placeholder="Nombre totale de participation">
                            <span class="input-group-addon"><span class="fa fa-lock"></span></span>
                            <input type="number" class="form-control" name="nbrS" placeholder="Nombre de sessions">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-lock"></span></span>
                            <input type="number" class="form-control" name="nbrG" placeholder="Nombre de groupes">
                            <span class="input-group-addon"><span class="fa fa-lock"></span></span>
                            <input type="number" class="form-control" name="pubC" placeholder="Durée de formation en jour/session">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-lock"></span></span>
                            <input type="number" class="form-control" name="pubC" placeholder="Durée de la prise en charge en jour/sesion">
                        </div>
                    </div>
                 
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <textarea class="form-control" rows="6" name="obj" placeholder="Objectifs à atteindre"></textarea>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <textarea class="form-control" rows="6" name="obj" placeholder="Contenu"></textarea>
                    </div>
					<div class="form-group">
					 
					

					<div class="modal-footer">
						<button type="reset" class="btn" data-dismiss="modal">Fermer</button>
						<button type="submit" class="btn btn-primary " data-loading-text="Loading..."> ajouter</button>
					</div>
                </form>
                <div id="reponse"></div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


