<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
	<style type="text/css"> .error {color: red;}</style>
</head>
<body>
	<?php 
	include '../connectdb/connectdb.php';
	$errName = $errPass = $errRePass = "";
	$checkAddUser = true;
	if (isset($_POST['submit'])) {
		$name = isset($_POST['name'])?$_POST['name']:"";
                $pass = isset($_POST['pass'])?$_POST['pass']:"";
                $repass = isset($_POST['repass'])?$_POST['repass']:"";
		
		if ($name == '') {
			$checkAddUser = false;
			$errName = "Please input username!";
		}
		if ($pass == '') {
			$checkAddUser = false;
			$errName = "Please input password!";
		}
                if ($repass == '') {
			$checkAddUser = false;
			$errName = "Please input repassword!";
		}
                if ($pass != $repass) {
			$checkAddUser = false;
			$errName = "repassword Wrong!";
		}
		if ($checkAddUser) {
                    include './model/User.php';
                    $user = new User();
                    $user->AddUser();
			//Chuyen trang bang header
			//header("Location: views\add_users.php");
			//header("Location: http://google.com");
		}	
	}	
	?>
	<h1>Add User</h1>
	<form action="#" name="addUser" method="post" enctype="multipart/form-data">
		<p>Name: <input type="text" name="name"></p>
		<span class="error"><?php echo $errName;?></span>
                <p>PassWord: <input type="password" name="pass"></p>
		<span class="error"><?php echo $errPass;?></span>
                <p>Re_PassWord: <input type="password" name="repass"></p>
		<span class="error"><?php echo $errRePass;?></span>
                <input type="submit" name="submit"/>
	</form>

</body>
</html>