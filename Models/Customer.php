<?php
	//class qui va gérer les clients
	
	//require $_SERVER ['DOCUMENT_ROOT'].'/PHARMACIE/config/database.php';

	/**
	 * 
	 */
	class Customer
	{
		
		/*function __construct(argument)
		{
			// code...
		}
		*/
		public function add_customer($id, $name, $lname, $tel)//ajout
		{
			require  $_SERVER ['DOCUMENT_ROOT'].'/PHARMACIE/config/database.php';
			$adquery = $bdd->prepare('INSERT INTO patient(id_patient, nom_patient, pnom_patient, tel_patient) VALUES ("'.$id.'", "'.$name.'", "'.$lname.'", "'.$tel.'")');
			$execute = $adquery->execute(array($id, $name, $lname, $tel));
		}
		
		public function delete_customer($id)//suppression
		{
			require  $_SERVER ['DOCUMENT_ROOT'].'/PHARMACIE/config/database.php';
			$dquery = $bdd->prepare('DELETE FROM patient WHERE id_patient=?');
			$execute = $dquery->execute(array($id));
		}
		
		public function display_all_customer()//affichage
		{
			require  $_SERVER ['DOCUMENT_ROOT'].'/PHARMACIE/config/database.php';
			$query = $bdd->query('SELECT * FROM patient');
			return $query;
		}

		public function search_customer($firstname, $lastname, $tel)//affichage
		{
			require  $_SERVER ['DOCUMENT_ROOT'].'/PHARMACIE/config/database.php';

			$query = $bdd->query("SELECT * FROM patient WHERE nom_patient='".$firstname."' AND pnom_patient='".$lastname."' AND tel_patient='".$tel."' ");
			return $query;

		}
	}
?>