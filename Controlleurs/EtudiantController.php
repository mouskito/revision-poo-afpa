<?php

/**
 * 
 */

/* J'appelle ma classe Etudiant pour pouvoir INSTANCIER mon Objet **/
require './Modeles/Etudiant.php';


class EtudiantController
{
	/* PREMIERE PARTIE DU CRUD ----- CREATE ---- C **/
	public function ajouter_des_etudiants_base()
	{
		$instancie_etudiant = new Etudiant();

		require './Vues/formulaire_ajout_etudiant.html';

		if (isset($_POST['submit'])) {
			/* Je modifie(set) mon objet avec la nouvelle valeur */
			/* recupérer depuis le formulaire **/

			$prenom = $instancie_etudiant->setPrenom($_POST['prenom']);
			$nom = $instancie_etudiant->setNom($_POST['nom']);
			$email = $instancie_etudiant->setEmail($_POST['email']);

			$instancie_etudiant->creation_etudiant($prenom, $nom, $email);
		}
	}

	/* FIN PREMIERE PARTIE */

	/* DEBUT DEUXIEME PARTIE DU CRUD ------ READ -- R*/
}

?>