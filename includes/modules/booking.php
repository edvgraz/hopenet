<?php 	defined( '_HOPEEX' ) or die( 'Restricted access' ); 
		require('includes/classes/html_table.php');
		require('includes/classes/html_form.php');
?>
<?php

// array for select list example
$rank_ar = array('Totally lame', 'Minimally useful', 'Pretty good', 'I realy like it', 'Fabulous');

// create form instance for this example
$frm = new HTML_Form();

// start the form
$frmStr = $frm->startForm('#', 'post', 'myForm',
		// optional attributes for the form
		array('class'=>'myFormClass', 'onsubmit'=>'return checkBeforeSubmit(this)') ) .
		 
		// label for the text box
'<p>' . $frm->addLabelFor('firstName', 'First Name: ') .
 
// text box with extra attributes
$frm->addInput('text', 'firstName', 'Sharon', array('id'=>'firstName', 'size'=>16, 'maxlength'=>50) ) . '</p>' .
 
'<p>' . $frm->addLabelFor('pref', 'I like brownies ') .
 
// checkbox added using addInput
$frm->addInput('checkbox', 'pref', 1, array('id'=>'pref') ) . '</p>' .
 
'<p>' . $frm->addLabelFor('gender', 'Your gender: ') .
 
// radio buttons added using addInput
$frm->addInput('radio', 'gender', 'male', array('id'=>'gender') ) . ' male ' .
$frm->addInput('radio', 'gender', 'female') . ' female</p>' .
 
// adding a text area
'<p>' . $frm->addTextArea('area', 6, 40, '[Your comments]', array('onclick'=>'clearContents(this)') )  . '</p>' .
 
// adding a select list from parallel arrays
'<p>' . $frm->addSelectListArrays('month', range(1, 12), HTML_Form::$MONTHS_LONG, '', ' - Month - ') . '</p>' .
 
'<p>' . $frm->addLabelFor('rank', 'How would you rank this code? ') .
 
// adding a select list
$frm->addSelectList('rank', $rank_ar, true, 'Pretty good', null, array('id'=>'rank') ) . '</p>' .
 
// adding a submit button
'<p>' . $frm->addInput('submit', 'submitMyForm', 'Submit') . '</p>' .
 
// end the form
$frm->endForm();
?>



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