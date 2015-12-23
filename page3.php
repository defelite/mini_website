<?php require_once 'inc/traitement_form.php'; ?>
<?php include_once 'inc/header.php'; ?>


<h1 class="text-center">Affichage de la news</h1>

<?php if($displayErr): ?>

	<div class="errorContent">
		<?php echo implode('<br>', $error); ?>
	</div>


<?php elseif($formValid): ?>

	<div class="newsContent">
		<h3><?php echo $post['titre']; ?></h3>

		<p>
			<img src="<?php echo $post['lien']; ?>" class="img-news" alt="">
			<?php echo $post['content']; ?>
		</p>

		<?php if($post['reco'] == 'oui'): ?>
			<p style="color:#FF9900"><strong>Article recommandé par la rédac' !</strong></p>
		<?php endif; ?>
	</div>

<?php endif; ?>





<?php include_once 'inc/footer.php'; ?>
