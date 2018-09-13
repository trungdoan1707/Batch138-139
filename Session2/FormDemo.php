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
    </head>
    <body>
        
        <form name="LoginForm" action="#" method="post">
            <?php 
             if (isset($_POST['submit'])) {
               
                if($_POST['User'] == ""){
                echo '<p id="user" style="color: red">*Input username</p>';
            }
           
            }
            
                ?>
            <p>UserName : <input type ="text" name ="User"></p>
            <?php
            if (isset($_POST['submit'])){
                 if($_POST['Password'] == ""){
               echo '<p id="pass" style="color: red">*Input password</p>';
            }
            }
            
            ?>
            <p>PassWord : <input type ="password" name ="Password"></p>
            <input type="submit" value="Submit" name="submit">
                    
        </form>
        <?php
            
            if (isset($_POST['submit'])) {
               
                echo $_POST['User'];
           
            }else{
                echo 'Chua submit';
            }            
        ?>
    </body>
</html>
