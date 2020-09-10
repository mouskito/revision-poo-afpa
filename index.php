<?php
	/*APPEL DU FICHER HEADER.HTML */
	require './Vues/header.html';

	/**CRUD DES ETUDIANTS */

	/* Opération 1 du CRUD ===> CREATE */

	/*APPEL DE LA CLASSE ETUDIANT CONTROLLER */
	require 'Controlleurs/etudiantController.php';

	/* J'instancie min objet etudiant */
	$etudiant = new EtudiantController();


	/* APPEL DE LA FONCTION ajouter_des_etudiants_base() DEPUIS LE CONTROLLEUR */
	$etudiant->ajouter_des_etudiants_base();


?>