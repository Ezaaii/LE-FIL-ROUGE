
<?php
define ('VIEW','views/');
define ('CONTROLLER','controler/');

require_once (VIEW.'header.php');

$action = isset($_GET['action']) ? htmlentities($_GET['action']):'default';

Switch($action){
case 'accueil': require_once(VIEW.'acceuil.php');
break;
case 'about': require_once(VIEW.'about.php');
break;
case 'gallery': require_once(VIEW.'gallerie.php');
break;
case 'tarifs': require_once(VIEW.'tarif.php');
break;
case 'contact': require_once(VIEW.'contact.php');
break;
default:
require_once(VIEW.'acceuil.php');
break;
}
require_once(VIEW.'footer.php');
