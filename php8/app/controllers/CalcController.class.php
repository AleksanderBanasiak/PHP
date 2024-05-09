<?php

namespace app\controllers;
use PDOException;

use app\forms\CalcForm;
use app\transfer\CalcResult;


 class CalcController{

	private $form;   
	private $result;


    public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}


    
public function getParams(){
	$this->form->amount = getFromRequest('amount'); 
	$this->form->years = getFromRequest('years'); 
	$this->form->interest = getFromRequest('interest'); 
}



public function validate(){
	if ( ! (isset($this->form->amount) && isset($this->form->years) && isset($this->form->interest))) return false;
	
	if ($this->form->amount == "") getMessages()->addError('Nie podano kwoty');
	
	if ($this->form->years == "") getMessages()->addError('Nie podano na ile lat chcesz wziąć kredyt');
	
	if ($this->form->interest == "") getMessages()->addError('Nie podano oprocentowania');

	if (getMessages()->isError()) return false; 
	
	if (! is_numeric( $this->form->amount )) getMessages()->addError('Kwota nie jest liczbą całkowitą');

	if ( $this->form->amount < 0 ) getMessages()->addError('Kwota jest ujemna');
	
	if (! is_numeric( $this->form->years )) getMessages()->addError('Lata kredytu nie są liczbą całkowitą');

	if (getMessages()->isError()) return false; 

	if ( $this->form->years <= 0 ) getMessages()->addError('Lata są mniejsze od zera');
		
	if (! is_numeric( $this->form->interest )) getMessages()->addError('Oprocentowanie nie jest liczbą całkowitą');

	if ( $this->form->interest <= 0 ) getMessages()->addError('Oprocentowanie jest ujemne');
	
	if (getMessages()->isError()) return false; 

	 return true;
}

public function action_calc(){

    $this->getParams();
		
    if ($this->validate()) {

	$this->form->amount = intval($this->form->amount);
	$this->form->years = intval($this->form->years);
	$this->form->interest = intval($this->form->interest);

	global $role;

	if ($this->form->interest < 20 &&  $role != 'admin'){
		getMessages()->addError('Tylko administrator może dostać oprocentowanie mniejsze niż 20%');
	} else {
		$this->result->result = round($this->form->amount/ (12* $this->form->years) + (($this->form->amount* ($this->form->interest/100) )/12 ));
	}

	try {
			
			getDB()->insert("calc", [
				"amount" => $this->form->amount,
				"years" => $this->form->years,
				"interest" => $this->form->interes,
				"result" => $this->result->result
			]);
	
		getMessages()->addInfo('Pomyślnie zapisano rekord');

	} catch (\PDOException $e){
		getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
		if (getConf()->debug) getMessages()->addError($e->getMessage());			
	}
	
}
	
	$this->generateSmarty();
	
}

public function action_calcShow(){
	$this->generateSmarty();
}



public function generateSmarty(){
    getSmarty()->assign('page_title','Zadanie 6b Routing');
	getSmarty()->assign('page_header','Wykonał Alekasnder Banasiak');

    getSmarty()->assign('form',$this->form);
 
    getSmarty()->assign('result',$this->result);
 
    getSmarty()->display('calc.html');

}
}
?>