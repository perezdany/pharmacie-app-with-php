
<?php
	//classe pour les facture
	
	require '../config/database.php';

	class Invoice
	{
		public function add_invoice($id, $mont_facture, $rest_a_pay, $dat_emi, $hr_emi, $id_achat)//ajout
		{
			$query = $bdd->prepare("INSERT INTO facture(id_facture, montant_fact, rest_a_pay, dat_emi, heure_emi, id_achat) VALUES (?, ?, ?, ?, ?, ?)");
			$execute = $query->execute(array($id, $mont_facture, $rest_a_pay, $dat_emi, $hr_emi, $id_achat));
		}
		
		public function display_all_invoice()//tous le monde
		{
			$query = $bdd->query("SELECT * FROM facture");
			return $query;
		}
		
		public function delete_invoice()//tous le monde
		{
			$query = $bdd->query("SELECT * FROM facture");
			return $query;
		}
	}
?>