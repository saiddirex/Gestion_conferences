

<?php
function connect($id, $pwd)

	{
		$xml=simplexml_load_file("../db/users.xml") or die("Error: Cannot create object");
		foreach($xml->children() as $user)
		{
			if($user->login == $id && $user->pwd == $pwd)
			{  
               
				return true;
            }
           
		}
		return false;
    }

	// Checks if a user has admin rights or not
	function isUserAdmin($login,$pwd)
	{
		$xml=simplexml_load_file("../db/users.xml") or die("Error: Cannot create object");
		foreach($xml->children() as $user)
		{
			if($user->login == $login && $user->pwd == $pwd )
			{
			    if($user->admin=="true") return true ;
			}
			
		}
		return false;
    }   


   
    if(isset($_POST['submit'])){
                    $tmp = connect(htmlspecialchars($_POST['login']),htmlspecialchars($_POST['password']));
                    if ($tmp) {
                        $isAdmin=isUserAdmin(htmlspecialchars($_POST['login']),htmlspecialchars($_POST['password'])); 
                        
                        if($isAdmin){
                               
                           header('Location: ../pages/administration.php');
                         }else{
                           header('Location: ../pages/home.php');
                           
                         }   
                    }
                    else{
                        header('Location: ../pages/login.php');
                        
                    }
              }
              
        
   
 ?>

