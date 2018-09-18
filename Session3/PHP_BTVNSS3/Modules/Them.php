 <?php
        include './Controller/ConnectDB_PHP.php';
//Them San Pham

        $Error = '';
        $tensp = '';
        $gia = '';
        $mota = '';
        $checkValidate = true;
        $avatarUpload = isset($_FILES['hinhanh'])?$_FILES['hinhanh']:"";
        $avatar = isset($avatarUpload['name'])?$avatarUpload['name']:"";
        if (isset($_POST['them'])) {
        //check ten sp 
        if (empty($_POST['tensp'])) {
        $Error = "* Chưa có thông tin này";
        $checkValidate = FALSE;
        }


        //check gia
        if (empty($_POST["gia"])) {
        $Error = "* Chưa có thông tin này";
        $checkValidate = FALSE;
        }

        if ($avatarUpload['error']) {
			$checkRegister = false;
			$errAvatar = "Please choose your avatar!";
		}

        if ($checkValidate == true) {
        $tensp = $_POST['tensp'];
        $gia = $_POST['gia'];
        $mota = $_POST['mota'];
        $targetUpload = "images/".$avatar;
	move_uploaded_file($avatarUpload['tmp_name'], $targetUpload);
        $pathimage = './images/'.$avatar;
        $sqlString = "INSERT INTO `sanpham`(`TenSanPham`, `Gia`, `MoTa`, `image`)"
        . " VALUES ('$tensp', '$gia', '$mota', '$pathimage') ";
        mysqli_query($conn, $sqlString);
        $conn->close();
        $tensp = '';
        $gia = '';
        $mota = '';
        $pathimage='';
        }
        }
        ?>  