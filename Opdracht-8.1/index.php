<?php
 
 
require_once "vendor/autoload.php";
require_once "src/functions.php";
 
use Smarty\Smarty ;
 
$smarty = new Smarty();
 
?>
 
 <?php
 
 
 
 $page = isset($_GET['page']) ? $_GET['page'] : 'home';
 
 switch ($page) {
     case 'home':
        
        $smarty->assign('page',"Welkom op de Homepagina");
        $smarty->assign('text', "Dit is de startpagina van de website.");
        $smarty -> display (template: "templates/layout.tpl");
        break;
        
    case 'form':
        $smarty->assign('page',"Dit is het formulier");
        $smarty->assign('text', "Dit is de startpagina van de website.");
        $smarty -> display (template: "templates/form.tpl");
        break;
            
    case 'result':
        foreach( $_POST as $key => $value ){
            $_SESSION[$key] = sanitize_input($value) ;
        }
        var_dump( $_SESSION );
        $smarty->assign('BLA', $_SESSION);
        $smarty->display(template: "templates/result.tpl");

       
        break;
        
    default:
        
        echo "<h1>404 Pagina niet gevonden</h1>";
        echo "<p>De opgevraagde pagina bestaat niet.</p>";
        $smarty -> display (template: "templates/layout.tpl");
        break;
    }
    
    ?>