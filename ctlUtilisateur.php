<?php 

include './modele/DbUtilisateur.php';

$action =$_GET['action'];

switch($action){
		
			case 'formConnect':
			 
			 //appel à la vue
			 include './vue/vueNote/v_formulaire.php';
			 
			 break;
			 
            case 'validConnect':

                if (isset($_POST['login'])&& isset($_POST['password']))
                {
                    $login = $_POST['login'];
                    $password = $_POST['password'];
                    $user = DbUtilisateur::getUser($login, $password);
                    if (is_array($user))
                    {
                        $_SESSION['login'] = $login;
                        header('Location: index.php');
                    }

                }
                break;

                
            case 'deConnect':
                session_unset();
                //unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
                //appel à la vue
                
                    
                break;



		}

?>