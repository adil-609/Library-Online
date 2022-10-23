<?php
$cnx = new PDO('mysql:host=localhost;dbname=formationdb;charset=utf8', 'root', 'rootroot');
if(isset($_GET['action'])) {
    switch ($_GET['action']){
        case 'ver': {
            $req = "select * from employe where matricule = '" . $_GET['mat'] . "' and `password` = '" . $_GET['pwd'] . "'"; 
           $requete = $cnx->query($req);
            $res = $requete->fetch(PDO::FETCH_ASSOC); 
            $idEmploye = $res['id'];
            $idFormation = $_GET['idForm'];
            if ($requete->rowCount() ==1) {
                $requete2 = $cnx->query("select * from inscription where id_formation='" . $idFormation . "' and id_employe='" . $idEmploye . "'");
                if ($requete2->rowCount() == 1) {
                    echo "Vous etes deja inscrit Dans cet formation";
                } else {
                    $requete = $cnx->exec("insert into inscription values ('','" . $idEmploye . "','" . $idFormation . "')");
                    echo "Vous etes inscrit maintenant";
                }

            } else {
                echo "Le matricule ou le mot de passe est incorrect";
            }
        }break;
        case 'form':{
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $obj =  $_POST['obj'] ;
            $msg =  $_POST['msg'] ;
            $dateMsg = time();
            $requete = $cnx->exec("insert into contacts values ('','".$nom."','".$email."','".$obj."','".$msg."','".$dateMsg."')");
            echo "Merci pour votre message";
        }break;
        case 'searchJournal':{
            $srch =  $_POST['srch'] ;
            $requete = $cnx->query("select * from journal where titre like '%$srch%' or apercu like '%$srch%'");//requet asynchrone

            while($res = $requete->fetch(PDO::FETCH_ASSOC)){
                echo "<div class=\"row\"><div class=\"col-sm-3\"><div class=\"well\">";
                echo "<img src=\"assets/img/for.jpg\" style=\"width: 100%; height: 150px\"></div></div>";
                echo "<div class=\"col-sm-9 paraJ\"><div style=\"padding: 10px; height: 150px\" class=\"panel panel-default text-left\">";
                echo "<h4>".$res['titre']."</h4>";
                echo "<p>".$res['apercu']."... <a>Lire plus</a></p>";
                echo "</div></div></div>";
 
            }
        }break;
        case 'searchFormation':{
            $srch = addslashes($_POST['srch']);
            $requete = $cnx->query("select * from formations where titre like '%$srch%' or contenu like '%$srch%' or nomFormateur like '%$srch%'");
            echo "<br>";
            while ($res = $requete->fetch(PDO::FETCH_ASSOC)) {
                echo "<div class='col-md-3 panelForm' onclick='afficheFormation(" . $res['id'] . ")'> <div class=''>";
                echo "<div class=''><strong>" . $res['titre'] . "</strong></div><br>";
                echo "<div class=\"\"><img class='img-thumbnail' style = \"height: 25%; width: 100%;\" src=\"assets/img/img_formation/".$res['image']."\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>";
                echo "<div class=''><br>" . substr($res['contenu'], 0, 60) . " ...<br> <a href='#'>Lire plus</a></div> </div></div>";
            }
        }break;
    }

   exit();
}

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

include 'inc/header.html.php';
include 'pages/' . $page . '.inc.php';
include 'inc/footer.html.php';
