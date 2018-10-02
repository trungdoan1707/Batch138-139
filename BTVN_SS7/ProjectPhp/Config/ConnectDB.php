<?php
	class ConnectBD{
	public $con;
	public function ConnectBD(){
		$this->con = new mysqli('localhost', 'root', '', 'batch138_139');
		return $this->con;
	}
	public function __construct(){
		$this->ConnectBD();
	}
	
}
?>