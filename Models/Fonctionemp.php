<?php
	//classe fonction
	

	class EmpFunction
	{
		public function add_fct($des)//ajout
		{
			require $_SERVER ['DOCUMENT_ROOT'].'/PHARMACIE/config/database.php';
			$adquery = $bdd->prepare("INSERT INTO fonction(id_fonction, desig_fonction) VALUES (NULL, ?)");
			$execute = $adquery->execute(array($des));
		}

		public function display_all_functions()
		{
			require $_SERVER ['DOCUMENT_ROOT'].'/PHARMACIE/config/database.php';
			$query = $bdd->query("SELECT * FROM fonction");
			return $query;
		}

		public function delete_fonct($id)
		{
			require $_SERVER ['DOCUMENT_ROOT'].'/PHARMACIE/config/database.php';
			$dquery = $bdd->prepare("DELETE FROM fonction WHERE id_fonction=?");
			$execute = $dquery->execute(array($id));
		}
	}
		
?>