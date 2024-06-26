<?php
namespace core;
class Messages {
	private $errors = array ();
	private $num = 0;

	public function addError($message) {
		$this->errors[] = $message;
		$this->num++;
	}

	public function isError() {
		return count ( $this->errors ) > 0;
	}

	public function getErrors() {
		return $this->errors;
	}
	
	public function clear() {
		$this->errors = array ();
		$this->num = 0;
	}
}
?>