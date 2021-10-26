<?php
	session_start();
	
	require_once '../config/database.php';

	//code de connexion de l'utilisateur
	if (isset($_POST['go']))
	{
		
		$login = htmlspecialchars($_POST['login']);
		$pass = htmlspecialchars($_POST['pass']);
	
		
		$query = $bdd->query("SELECT login_emp, mdp_emp FROM employe WHERE login_emp='".$login."' AND mdp_emp='".$pass."'");
		$ver= $query->fetchAll();
        $nb =  count($ver);
		echo $nb;
		if($nb == 0)
		{
			echo'<!DOCTYPE html>
				 <html>
				 <head>
				   <meta charset="utf-8">
				   <title></title>
				 </head>
				 <body>';
			echo"<font color='red'><h1>Désolé utilisateur non existant <br></h1</font><br>";
			echo"<a href='../index.php'><font color='grey'><h3>RETOUR<h3></font></a>";
			echo'

				 </body>
				 </html>';
			
		}
		else
		{
				$_SESSION['login'] = $login;
			header("location:../views/pages/welcome.php");
		}
		
	}
	else
	{
		echo 'oups...';
	}
?>