<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'../auth/set.php';

$amount = null;
$years = null;
$interest = null;
$result = null;
$messages = array();


function getParams(&$amount,&$years,&$interest){
	$amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
	$years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
	$interest = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
}

function validate(&$amount,&$years,&$interest,&$messages){
	if ( ! (isset($amount) && isset($years) && isset($interest))) return false;
	
	if ( $amount == "") $messages [] = 'Nie podano kwoty';
	
	if ( $years == "") $messages [] = 'Nie podano na ile lat chcesz wziąć kredyt';
	
	if ( $interest == "") $messages [] = 'Nie podano oprocentowania';
	
	if (count ( $messages ) != 0) return false;
	
	if (! is_numeric( $amount )) $messages [] = 'Kwota nie jest liczbą całkowitą';

	if ( $amount < 0 ) $messages [] = 'Kwota jest ujemna';
	
	if (! is_numeric( $years )) $messages [] = 'Lata kredytu nie są liczbą całkowitą';

	if ( $years < 0 ) $messages [] = 'Lata są mniejsze od zera';
		
	if (! is_numeric( $interest )) $messages [] = 'Oprocentowanie nie jest liczbą całkowitą';

	if ( $interest < 0 ) $messages [] = 'Oprocentowanie jest ujemne';
	
	if (count ( $messages ) != 0) return false;

	else return true;
}

function calculate(&$amount,&$years,&$interest,&$result,&$messages){

	$amount = intval($amount);
	$years = intval($years);
	$interest = intval($interest);

	
	global $role;

	if ($interest < 20 &&  $role != 'admin'){
		$messages [] = 'Tylko administrator może dostać oprocentowanie mniejsze niż 20%';
	} else {
		$result = round($amount/ (12* $years) + (($amount* ($interest/100) )/12 ));
	}
	
	
}


getParams($x,$y,$operation);
if (validate($x,$y,$operation,$messages) ) { 
	calculate($x,$y,$operation,$result,$messages);
}


include 'calc_view.php';
?>