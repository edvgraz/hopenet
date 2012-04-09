<?php 	defined( '_HOPEEX' ) or die( 'Restricted access' ); 
		require('includes/classes/html_table.php'); 
?>
<?php 
		

$EMPLOYEES = array( 
    'employee1' => array('Hartmut Hilfsbereit', 'Volunteer', 'Allgemeine', '01012001', 'bereit' ), 
    'employee2' => array('Anna Altruisi', 'Werkvertrag', 'Pflege', '24092003', 'frei'),
	'employee3' => array('Gustav Gutmann', 'Dienstnehmer', 'Therapie', '12041999', 'belegt'),
	'employee4' => array('Max Mustermann', '--', '--', '--', '--'),
    'employee5' => array('Max Mustermann', '--', '--', '--', '--') 
); 

$tbl = new HTML_Table('rounded-corner', 'display', 0, 0, 4); 

$tbl->addRow(); 
    $tbl->addCell('Name', 'first', 'header'); 
    $tbl->addCell('Vertrag', null, 'header'); 
    $tbl->addCell('Gebiet', null, 'header');
    $tbl->addCell('Eintritt', null, 'header');
    $tbl->addCell('Status', null, 'header');
     
    foreach($EMPLOYEES as $employee) { 
        list($name, $contract, $service, $entry, $status ) = $employee; 
        $tbl->addRow(); 
            $tbl->addCell($name); 
            $tbl->addCell($contract);
            $tbl->addCell($service); 
            $tbl->addCell($entry);
            $tbl->addCell($status);
    } 
echo $tbl->display(); 
?>	