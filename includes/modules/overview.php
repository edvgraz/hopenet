<?php 	defined( '_HOPEEX' ) or die( 'Restricted access' ); 
		require('includes/classes/html_table.php'); 
?>
<?php 
		

$GUESTS = array( 
    'guest1' => array('Max Mustermann', '--', '--', '--', '--' ), 
    'guest2' => array('Max Mustermann', '--', '--', '--', '--'),
	'guest3' => array('Max Mustermann', '--', '--', '--', '--'),
	'guest4' => array('Max Mustermann', '--', '--', '--', '--'),
    'guest5' => array('Max Mustermann', '--', '--', '--', '--') 
); 

$tbl = new HTML_Table('rounded-corner', 'display', 0, 0, 4); 

$tbl->addRow(); 
    $tbl->addCell('Name', 'first', 'header'); 
    $tbl->addCell('Betreuer', null, 'header'); 
    $tbl->addCell('Therapeut', null, 'header');
    $tbl->addCell('Therapie', null, 'header');
    $tbl->addCell('Status', null, 'header');
     
    foreach($GUESTS as $guest) { 
        list($name, $carer, $therapist, $therapy, $status ) = $guest; 
        $tbl->addRow(); 
            $tbl->addCell($name); 
            $tbl->addCell($carer);
            $tbl->addCell($therapist); 
            $tbl->addCell($therapy);
            $tbl->addCell($status);
    } 
echo $tbl->display(); 
?>		

</div>
</div>
</article>
<article>
<header><p>Anfragen</p></header>

<div id="list-0">	
<div class="list-content">
<?php 
		

$INQUIRIES = array( 
    'inquiry1' => array('Hanna Hoffnung', '--', '--', '--', '--'), 
    'inquiry2' => array('Hanna Hoffnung', '--', '--', '--', '--'), 
    'inquiry3' => array('Hanna Hoffnung', '--', '--', '--', '--'), 
	'inquiry4' => array('Hanna Hoffnung', '--', '--', '--', '--'),
	'inquiry5' => array('Hanna Hoffnung', '--', '--', '--', '--')
); 

$tbl = new HTML_Table('rounded-corner', 'display', 0, 0, 4); 

$tbl->addRow(); 
    $tbl->addCell('Name', 'first', 'header'); 
    $tbl->addCell('Bedarf', null, 'header'); 
    $tbl->addCell('Datum', null, 'header');
    $tbl->addCell('Ort', null, 'header');
    $tbl->addCell('Status', null, 'header');
     
    foreach($INQUIRIES as $inquiry) { 
        list($name, $needs, $date_needs, $location, $status ) = $inquiry; 
        $tbl->addRow(); 
            $tbl->addCell($name); 
            $tbl->addCell($needs); 
            $tbl->addCell('' . date_format($date_needs, 2), 'num' );
            $tbl->addCell($location);
            $tbl->addCell($status);
    } 
echo $tbl->display(); 
?>		