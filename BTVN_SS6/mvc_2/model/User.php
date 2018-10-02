<?php 
	class User {
		var $name;
		var $pass;
		//public, protected, private
		
		function AddUser(){
                    include './connectdb/connectdb.php';
                        
                        $sqlInsert = "INSERT INTO `users`(`name`, `password`) VALUES ('$name', '$pass')";
			mysqli_query($con, $sqlInsert);
                        var_dump($sqlInsert);
                }
                function EditUser($id){
                     include './connectdb/connectdb.php';
                        $sqlEdit = "SELECT `name` FROM `users` WHERE id = $id)";
			
                        $result  = mysqli_query($con, $sqlEdit);
                        echo var_dump($result);
                        return $result;
                }
	}
	
	//$user = new User();
	// $user->showName();

	/*class Student extends User {
		//
		public function demoProtected() {
			$this->showName();
		}
		public function demoPrivate() {
			$this->showAge();
		}
		public function showName() {
			echo "<br>Hello Student class";
		}
	}
	// echo "<br>";
	$student = new Student();
	$student->showName();
	// $student->demoPrivate();
         * 
         */
?>