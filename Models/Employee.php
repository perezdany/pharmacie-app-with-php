<?php
	//les employés


	/**
	 * 
	 */
	class Employee
	{
		/*
		function __construct(argument)
		{
			// code...
		}
		*/
		public function add_emp($id, $title, $name, $lname, $login, $pswd, $fct) //ajout
		{
			require $_SERVER ['DOCUMENT_ROOT'].'/PHARMACIE/config/database.php';
			$query = $bdd->prepare('INSERT INTO employe(id_emp, title, nom_emp, pnom_emp, login_emp , mdp_emp, id_fonction) VALUES (?, ?, ?, ?, ?, ?, ?)');
			$execute =  $query->execute(array($id, $title, $name, $lname, $login, $pswd, $fct));
		}

		public function display_all_emp()
		{
			require $_SERVER ['DOCUMENT_ROOT'].'/PHARMACIE/config/database.php';
			//affichage de tous les employés
			$query = $bdd->query("SELECT * FROM employe e, fonction f WHERE e.id_fonction=f.id_fonction");
			return $query;
		}

		public function display_busy_nurse()
		{
			require $_SERVER ['DOCUMENT_ROOT'].'/PHARMACIE/config/database.php';
			$h = date('H:i:s');
			$d = date ('Y-m-d');
			//affiachage des medecin consultant dispo
			$v = $bdd->query("SELECT * FROM employe e, consultation c WHERE c.id_emp=e.id_emp AND dat_cons='".$d."' AND '".$h."' BETWEEN c.heure_cons AND c.fin_consult ");
			return $v;
		}

		public function delete_emp($id)
		{
			require $_SERVER ['DOCUMENT_ROOT'].'/PHARMACIE/config/database.php';
			$qdel = $bdd->prepare('DELETE FROM employe WHERE id_emp=?');
			$qdel->execute(array($id));
		}

		
	}
?>