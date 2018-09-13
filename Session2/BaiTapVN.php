
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./MyCSS.css" rel="stylesheet" type="text/css" />
        <link href="MyJS.js" rel="stylesheet" type="text/javascript"/>
        <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
        <meta charset=utf-8 />
        <script src="MyJS.js"></script>
        
    </head>
    <body>
        <?php
        $nameError = "";
        $emailError = '';
        $passError = '';
        $repassError = '';
        $genderError = '';
        $AddressError = '';
        $inforError = '';
        $imageError = '';
        $srcPath = './image/if_avatar_1814089.png';
        if (isset($_POST['submit'])) {
            //check name 
            if (empty($_POST['name'])) {

                $nameError = "* Chưa có thông tin này";
            } else {
                $name = test_input($_POST["name"]); // check name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameError = "Không sử dụng ký tự đặc biệt";
                }
            }

            //check email
            if (empty($_POST["email"])) {
                $emailError = "* Chưa có thông tin này";
            } else {
                $email = test_input($_POST["email"]);
            }
            //check password
            if (empty($_POST['password'])) {
                $passError = '* Chưa có thông tin này';
            } elseif (strlen($_POST['password']) <= 6) {
                $passError = 'Mat Khau Phai Hon 6 ky tu';
            } elseif ($_POST['password'] != $_POST['repassword']) {
                $repassError = 'Mat Khau Nhap Lai Khong Dung';
            }
            if (empty($_POST['gender'])) {
                $genderError = '* Chưa có thông tin này';
            }
            if (empty($_POST['adderss'])) {
                $AddressError = '* Chưa có thông tin này';
            }
            $contact = trim($_POST['message']);
            if (empty($contact)) {
                $inforError = '* Chưa có thông tin này';
            }
            if (empty($_FILES['pathImage']['tmp_name']) > 0) {
                $imageError = 'Chua Co Anh';
            }
            $_FILES['pathImage']['tmp_name'];
            $remote_img = $_FILES['pathImage']['tmp_name'];
            
            $img = imagecreatefromjpeg($remote_img);
            $path = 'image/' .uniqid(). $_FILES['pathImage']['name'];
            imagejpeg($img, $path);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <div class="formDK">
            <h3 style="text-align: center">Form Dang Ky Thong Tin</h3>
            <form name="LoginForm" action="#" method="post" enctype="multipart/form-data">

                <p>Ho Va Ten : 
                    <span class="error" style="color: red"><?php echo $nameError; ?></span>
                    <input type ="text" name ="name" value="">
                </p>


                <p>Email :
                    <span class="error"><?php echo $emailError; ?></span>
                    <input type ="email" name ="email">
                </p>

                <p>Mat Khau : 
                    <span class="error"><?php echo $passError; ?></span>
                    <input type ="password" name ="password">

                </p>

                <p>Nhap Lai Mat Khau : 
                    <span class="error"><?php echo $repassError; ?></span>
                    <input type ="password" name ="repassword">

                </p>

                <br>
                <input type="radio" name="gender" value="male" checked> Male<br>
                <input type="radio" name="gender" value="female"> Female<br>
                <input type="radio" name="gender" value="other"> Other
                <span class="error"><?php echo $genderError; ?></span>
                <p>Que Quan : 
                    <span class="error"><?php echo $AddressError; ?></span>
                    <select name="adderss" style="width: 150px; height: 30px">
                        <option value="DN">Da Nang</option>
                        <option value="QN">Quang Nam</option>
                        <option value="NA">Nghe An</option>
                    </select>
                </p>

                <p>Mo Ta Ban Than: 
                    <span class="error"><?php echo $inforError; ?></span>
                </p>
                <textarea name="message" rows="10" cols="35" val =null></textarea>

                <div style="border: 1px solid aqua; float: right; text-align: right; width: 160px; height: 120px">
                    <img id="blah" src="<?php echo $srcPath; ?>" name="Avatar" alt="your image" style="width: 135px; height: 80px"/>
                    <br>

                    <input type='file' onchange="readURL(this)" name="pathImage" id="imgInp" style="text-align: end; width: 150px"/>

                    <span class="error"><?php echo $imageError; ?></span>
                </div>
                <input type="submit" value="Dang Ky" name="submit">
            </form>
        </div>

    </body>
</html>

