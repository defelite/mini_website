<?php

// On instancie nos variables qu'on utilisera plus tard
$post = array();
$error = array();
$displayErr = false;
$formValid = false;

// On vérifie que notre formulaire n'est pas vide
if(!empty($_POST)){
	//on recrée le tableaux
	foreach($_POST as $key => $value){
		$post[$key] = trim(strip_tags($value));
	}

	if(empty($post['titre'])){
		$error[] = 'Vous devez compléter le titre de la news';
	}

	if(empty($post['lien'])){
		$error[] = 'Vous devez entrez le lien d\'une image';
	}

	if(empty($post['content'])){
		$error[] = 'Vous devez saisir une news, sinon personne ne pourra la lire :-)';
	}

	if(empty($post['reco'])){
		$error[] = 'Renseignez si cet article est recommandé ou non';
	}

	if(count($error) > 0){
		$displayErr = true;
	}
	else {
		$formValid = true;
	}

}