<?php include_once 'inc/header.php'; ?>



<h1 class="text-center">Proposer une news</h1>


<form method="POST" action="page3.php">
	<label for="titre">Titre de la news</label>
	<input type="text" id="titre" name="titre" placeholder="Votre titre ici..">

	<br>
	<label for="lien">Lien</label>
	<input type="text" id="lien" name="lien" placeholder="http://example.org/monimage.jpg">

	<br>
	<label for="content">Contenu</label>
	<br>
	<textarea name="content" cols="40" rows="5"></textarea>

	<br>
	<label for="reco">Article recommandé</label>
	<input type="radio" name="reco" value="oui"> Oui
	<input type="radio" name="reco" value="non"> Non

	<br>
	<input type="submit" value="Envoyer">
</form>

<?php include_once 'inc/footer.php'; ?>
