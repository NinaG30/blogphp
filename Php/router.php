<?php if(isset($_GET['page'])){
        switch ($_GET['page']) {
            case 'contact':
                include("pages/contact.php");
                break;
            case 'more':
                include("pages/more.php");
                break;
            case 'connexion':
                include("pages/connexion.php");
                break;

            case "contactform":
                include("controllers/contactform.php");
                break;

            case "connexionform":
                    include("controllers/connexionform.php");
                    break;
                    
            default:
                include("pages/404.php");
                break;
        }
        }else {
            include ("pages/accueil.php");
        }
?>