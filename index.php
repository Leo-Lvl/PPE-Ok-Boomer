<<<<<<< HEAD
<doctype html>
    <html>
        <head>
            <link rel="stylesheet" href="style.css"/>
            <title>OK BOOMER!</title>
        </head>
		<header>
			<?php 
				$PARAM_hote='localhost';
				$PARAM_port='3306';
				$PARAM_nom_bd='okBoomer';
				$PARAM_utilisateur='root';
				$PARAM_mot_passe='';
				if(isset($_POST['prenom'])){
					$prenom = $_POST['prenom'];					
				}
				$compteConnecte = false;
				include("sub/entete.php");
			?>
		</header>
        <body>
			<div id="page">
				<?php
					if (isset($_GET['page'])) {
						$page = $_GET['page'];
					}
					else  {
						$page = "accueil"; 
					}
					switch($page){
						case "accueil":
							include ("sub/accueil.php");
							break;
						case "activites":
							include("sub/activites.php");
							break;
						case "compte":
							include("sub/compte.php");
							break;
						case "inscription":
							include("sub/inscription.php");
							break;
							case "connexion":
							include("sub/connexion.php");
							break;
						case "offres":
							include("sub/offres.php");
							break;
					}
				?>
			</div>
        </body>

=======
<doctype html>
    <html>
        <head>
            <link rel="stylesheet" href="style.css"/>
            <title>OK BOOMER!</title>
        </head>
		<header>
			<?php 
				$PARAM_hote='localhost';
				$PARAM_port='3306';
				$PARAM_nom_bd='okBoomer';
				$PARAM_utilisateur='root';
				$PARAM_mot_passe='';
				if(isset($_POST['prenom'])){
					$prenom = $_POST['prenom'];					
				}
				$compteConnecte = false;
				include("sub/entete.php");
			?>
		</header>
        <body>
			<div id="page">
				<?php
					if (isset($_GET['page'])) {
						$page = $_GET['page'];
					}
					else  {
						$page = "accueil"; 
					}
					switch($page){
						case "accueil":
							include ("sub/accueil.php");
							break;
						case "activites":
							include("sub/activites.php");
							break;
						case "compte":
							include("sub/compte.php");
							break;
						case "inscription":
							include("sub/inscription.php");
							break;
							case "connexion":
							include("sub/connexion.php");
							break;
						case "offres":
							include("sub/offres.php");
							break;
					}
				?>
			</div>
        </body>

>>>>>>> e7bcf90e2e8c4adda2d386b3a3e76bde97cff407
    </html>