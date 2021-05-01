<?php 
	include('conexion.php');
	include('models/userRegisteredModel.php');
	/**
	 * 
	 */
	class UserRegistered
	{
		
		static public function ctrUserRegistered()
		{
			$userRegistered = principalModelo::mdlRegisterUser();
			return $userRegistered;
		}
	}
?>