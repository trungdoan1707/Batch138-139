<!DOCTYPE html>
<html>
    <head>
        <title>Edit User</title>
        <style type="text/css"> .error {color: red;}</style>
    </head>
    <body>
        <?php

                include '../model/User.php';
                $user = new User();
                $result = $user->EditUser($_GET['id']);
                echo $_GET['id'];
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $nameEdit = $row['name']
                        ?>
                  

                    <?php
                }
            } 
            
            //Chuyen trang bang header
            header("Location: add_users.php");
            //header("Location: http://google.com");
            
            	
            ?>
            <h1>Edit User</h1>
            <form action="#" name="addUser" method="post" enctype="multipart/form-data">
                <p>Name: <input type="text" name="name" value="<?php $nameEdit ?>"></p>
                <span class="error"><?php echo $errName; ?></span>
                <p>PassWord: <input type="password" name="pass"></p>
                <span class="error"><?php echo $errPass; ?></span>
                <p>Re_PassWord: <input type="password" name="repass"></p>
                <span class="error"><?php echo $errRePass; ?></span>
        <input type="submit" name="submit"/>
    </form>

</body>
</html>