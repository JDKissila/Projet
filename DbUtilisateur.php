<?php
include 'connectPdo.php';

class DbUtilisateur{
	
	public static function getUser($login, $password)
	{
		$sql = "select login, mdp from personnel WHERE login='$login' AND mdp='$password' ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetch();
		return $result;
	}
}

?>