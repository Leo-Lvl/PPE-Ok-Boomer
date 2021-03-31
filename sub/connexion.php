
<form method="post" action="index.php?page=connexion">
<fieldset>
<legend>Connexion</legend>
adresse e-mail:	<input type="mail" required name="mail"/></input><br>
mot de passe:	<input type="password" required name="pwd"/></input><br>
<input type="submit" name="valider" value="Se connecter"/><br/>
</fieldset>
<a href="index.php?page=inscription">Pas encore inscrit ?</a>
</form>

<?php
if(isset($_POST['valider'])){
	$valider=$_POST['valider'];
	try {
        $connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,$PARAM_utilisateur,$PARAM_mot_passe);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $e) {
		echo 'Erreur';
	}
	if($connexion){
		try{
			$requete="select ".$_POST['mail']."from Membre;";
			$resultat=$connexion->exec($requete);
			$resultat->setFetchMode(PDO::FETCH_OBJ);
			$ligne=$resultat->fetch();
			
			while($ligne){
				$email=$mail;
			}
		$resultat->closeCursor();
		
		}
	}
}
?>
  