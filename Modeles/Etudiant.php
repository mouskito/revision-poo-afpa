<?php

	/**
	 * 
	 */
	class Etudiant
	{
		private $id;
		private $prenom;
		private $nom;
		private $email;

		public function getId()
		{
			return $this->id;
		}

		public function getPrenom()
		{
			return $this->prenom;
		}

		public function setPrenom($prenom)
		{
			return $this->prenom = $prenom;
		}

		public function getNom()
		{
			return $this->nom;
		}

		public function setNom($Nom)
		{
			return $this->nom = $Nom;
		}

		public function getEmail()
		{
			return $this->email;
		}

		public function setEmail($email)
		{
			return $this->email = $email;
		}

		public function connection_a_la_base_de_donnee()
		{
			try {
				$db = new PDO('mysql:host=localhost;dbname=ecole_afpa',"root","");
				
			} catch (Exception $e) {
				die('Erreur lors de la connection à la base de donnée ');
			}

			return $db;
		}

		public function creation_etudiant($prenom, $nom, $email)
		{
			$connection =$this->connection_a_la_base_de_donnee();

			$sql = $connection->prepare("INSERT INTO etudiant (prenom, nom, email) VALUES ('$prenom', '$nom','$email')");

			if(!$sql->execute()){
				die("Il ne se passe pas bien, Revoir la requete ou la connection à la base de donnée");
			}

			header("Location: index.php");
		}

	}	
?>