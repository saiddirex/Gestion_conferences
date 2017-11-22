

<?php
session_start();
   

	include("functions.php");
   
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

