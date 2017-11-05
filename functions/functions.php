<?php 
	// Checks if a user's credentials are correct
	function isUser($id, $pwd)
	{
		$res = json_decode(file_get_contents("users.json"));
		foreach($res->{'users'} as $user)
		{
			if($user->{'id'} == $id && $user->{'pwd'} == $pwd)
			{
				return true;
			}
		}
		return false;
	}
	
	// Checks if a user has admin rights or not
	function isUserAdmin($id)
	{
		$res = json_decode(file_get_contents("users.json"));
		foreach($res->{'users'} as $user)
		{
			if($user->{'id'} == $id)
			{
				return $user->{'admin'};
			}
		}
		return false;
	}
?>