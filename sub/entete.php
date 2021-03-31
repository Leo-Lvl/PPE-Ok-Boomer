<div class="barre-navigation">
	<a href="index.php?page=<?php if($compteConnecte){echo "deconnexion";} else{echo "connexion";} ?>">
        <div id="bouton-navigation">
            <div class="bouton-navigation"><?php if($compteConnecte){echo "Deconnexion";} else{echo "Connexion";} ?></div>
        </div>
    </a>
    <a href="index.php?page=
	<?php 
		if($compteConnecte == true) { 
			echo "compte"; 
		} 
		else { 
			echo "inscription"; 
		} 
	?>
		">
        <div id="bouton-navigation">
            <div class="bouton-navigation">
				<?php 
					if($compteConnecte == true){
						echo "Compte";
					}			
					else{
						echo "Inscription";
					}
				?>
			</div>
        </div>
    </a>
    <a href="index.php?page=offres">
        <div id="bouton-navigation">
            <div class="bouton-navigation">Offres</div>
        </div>
    </a>
	<a href="index.php?page=activites">
		<div id="bouton-navigation">
			<div class="bouton-navigation">Activites</div>
		</div>
    </a>
	<a href="index.php?page=
		<?php 
			if($compteConnecte == true){
				echo "activites";
			} 
			else{
				echo "accueil";
			}
		?>
		">
		<div id="bouton-navigation" style="float:left">
			<div class="bouton-navigation">
				Tenders
			</div>
		</div>
    </a>
</div>