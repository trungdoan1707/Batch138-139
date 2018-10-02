<!DOCTYPE html>
<html>
<head>
	<title>Admin index</title>
	<style type="text/css">
	.image {
		width: 100px;
	}
	table {
		border-collapse: collapse;
		width: 800px;
		margin: 0 auto;
	}
	table, tr, th, td {
		border: 1px solid green;
	}
	.search{
		width: 800px;
		margin: 0 auto;
		padding-bottom: 50px;
	}
	</style>
</head>
<body>
<h1>List product</h1>
<div class="search">
	<form >
		<input type="text" name="name" placeholder="user name">
		<input type="submit" name="search" value="Search">
                <a href="views/add_users.php">Input User</a>
	</form>
</div>
<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Password</th>
		
	</tr>
<?php 
	include './connectdb/connectdb.php';
	// count total records
	$limit = 5;
	$page = isset($_GET['page'])?$_GET['page']:1;
	$start = ($page - 1) * $limit;

	$searchName = isset($_GET['name'])?$_GET['name']:"";
	
	$sqlTotal = "SELECT `id`, `name`, `password` FROM users WHERE name LIKE '%$searchName%'";
	$countTotal = mysqli_query($con, $sqlTotal);
	$total = $countTotal->num_rows;
	
	$numberPage = ceil($total/$limit);
	$sqlSelect = "SELECT `id`, `name`, `password` FROM users WHERE name LIKE '%$searchName%' LIMIT $start,$limit";
	
	$result  = mysqli_query($con, $sqlSelect);
	if ($result->num_rows > 0) { 
		while($row = $result->fetch_assoc()) {
			
?>
	<tr>
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['password'];?></td>
		<td>
                    <a href="views/edit_user.php?id=<?php echo $row['id']?>">Edit</a>
                    | <a href="views/edit_user.php?id=<?php echo $row['id']?>">Delete</a>
		</td>
	</tr>

<?php
		}
	} else {
		echo "No product!";
	}
?>
</table>	
<?php 
$serverName = $_SERVER['SERVER_NAME'];
$link = !empty($_SERVER['REQUEST_URI'])?$_SERVER['REQUEST_URI']:"";

for ($i = 1; $i <= $numberPage; $i++) {
	$linkPage = "http://$serverName$link&page=$i";
	echo "<a href='$linkPage'>$i</a>";
	echo ($i < $numberPage)?" | ":"";
}
?>
</body>
</html>