<?php
include 'Config/ConnectDB.php';
/**
 * 
 */
class Model extends ConnectBD
{
	public function getListProduct(){
		$sql = "SELECT * FROM product";
		$listProduct = mysqli_query($this->con,$sql);
		return $listProduct;
	}
	
}
