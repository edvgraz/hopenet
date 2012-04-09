<?php 	defined( '_HOPEEX' ) or die( 'Restricted access' ); 
		require('includes/classes/html_table.php'); 
?>
<?php 
$ITEMS = array( 
    'item0' => array('Inventar 0', '--', '--', '--', '--', '--', '--'), 
    'item1' => array('Inventar 1', '--', '--', '--', '--', '--', '--'),
	'item2' => array('Inventar 2', '--', '--', '--', '--', '--', '--'),
	'item3' => array('Inventar 3', '--', '--', '--', '--', '--', '--'),
    'item4' => array('Inventar 4', '--', '--', '--', '--', '--', '--'),
	'item4' => array('Inventar 4', '--', '--', '--', '--', '--', '--')
); 

$tbl = new HTML_Table('rounded-corner', 'display', 0, 0, 4); 

$tbl->addRow(); 
    $tbl->addCell('Bezeichnung', 'first', 'header');
    $tbl->addCell('Beschreibung', null , 'header');
    $tbl->addCell('Lagerort', null, 'header'); 
    $tbl->addCell('Anzahl', null, 'header');
    $tbl->addCell('Alter', null, 'header');
    $tbl->addCell('Verfügbarkeit', null, 'header');
    $tbl->addCell('Status', null , 'header');
     
    foreach($ITEMS as $item) { 
        list($item_name, $item_desc, $item_location, $item_count, $item_age, $item_availability, $item_status) = $item; 
        $tbl->addRow(); 
            $tbl->addCell($item_name); 
            $tbl->addCell($item_desc);
            $tbl->addCell($item_location); 
            $tbl->addCell($item_count);
            $tbl->addCell($item_age);
            $tbl->addCell($item_availability);
            $tbl->addCell($item_status);
    } 
echo $tbl->display(); 
?>		