<?php defined( '_HOPEEX' ) or die( 'Restricted access' ); ?>

<section id="content">

<?php

switch ($_POST['menustate']) {
    case 'hope':
        include 'templates/alpha/tmpl_overview.php';
        break;
    case 'apps':
        echo "Google Apps";
        break;
    case 'inventory':
         include 'templates/alpha/tmpl_inventory.php';
        break;
    case 'booking':
       	include 'templates/alpha/tmpl_booking.php';
       	break;
    case 'transfer':
    	echo "Transfer";
    	break;
    case 'resources':
    	include 'templates/alpha/tmpl_resources.php';
    	break;
    case 'access':
    	echo "Hopenet Administration";
    	break;
    case 'contacts':
    	echo "Kontaktverwaltung";
    	break;
    case 'calendar':
    	echo "Kalenderverwaltung";
    	break;
    case 'docs':
    	echo "Dokumentverwaltung";
    	break;
    case 'mail':
    	echo "Mail Client";
    	break;
    default:
       	echo "Hallllllooo";
       	break;
}
?>
			
	</section>