<?php
    if(!isset($_POST['ok'])){   
    ?>
        <form action="index.php?page=inscription" method="post">
		<fieldset>
		<legend>Inscription</legend>
            Prénom:<input type="text" name="prenom" required minlength="2"/><br/>
            Nom:<input type="text" name="nom" required minlength="2"/><br/>
            Pseudonyme:<input type="text" name="pseudo" required minlength="2"/><br/> 
            Date d'anniversaire:<input type="text" name="jour" required minlength="2"/>/<input type="text" name="mois" required minlength="2"/><br/>
            Année de naissance:<input type="text" name="annee" required minlength="2"/><br/>
            E-mail:<input type="text" name="mail" required minlength="2"/><br/>
            Mot de passe:<input type="password" name="mdp" required minlength="2"/><br/>
			</fieldset>
            <input type="submit" name="ok" value="S'inscire"/>
        </form>    
    <?php
    }
?>

<?php
    if(isset($_POST['ok'])){
		try {
            $connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,$PARAM_utilisateur,$PARAM_mot_passe);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(Exception $e) {
			echo 'Erreur';
		}
		if($connexion){
			$requeteInscription = 'insert into Membre(prénom, nom, pseudonyme, jourNaissance, moisNaissance, anneeNaissance, email, mdp) 
            values('.$_POST["prenom"].', '.$_POST["nom"].', '.$_POST["pseudo"].', '.$_POST["jour"].', '.$_POST["mois"].', '.$_POST["annee"].', '.$_POST["mail"].', '.$_POST["mdp"].';';
            $connexion->query($requeteInscription);
		}
        ?> 
            <div>Bienvenue 
            <?php echo $prenom ?>!
            <br/>Vous pouvez maintenant vous connecter !<br/>
            <a href="index.php?page=connexion"><div>Se connecter</div></a>
        <?php
    }
?>