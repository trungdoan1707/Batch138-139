<?php
include 'Model/Model.php';

class Controller
{
	
	public function checkRequest(){

		$action = "";
		$controller = "";
		$action = isset($_GET['action'])?$_GET['action']:"home";
		$controller = isset($_GET['controller'])?$_GET['controller']:"index";
		if($controller == "index"){
			switch ($action) {
						case 'home':
							$listProduct = "";
					        $listModel = new Model();
					        $listProduct = $listModel->getListProduct();
					        include_once 'View/home.php';
							break;
						case 'contact';
							
							include 'View/contact.php';

							break;
						case 'cart';
							include 'View/cart.php';
							break;
						
						default:
							header("Location: index.php");
							break;
					}
		}elseif($controller == "admin"){
			//product
			switch ($action) {
						case 'index':
					       include_once "View/ViewBackend/admin.php";
							break;
					}
		}
		

	}

	
}
