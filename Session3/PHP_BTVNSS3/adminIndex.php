<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>"Quan tri noi dung website "</title>
        <link rel="stylesheet" type="text/css" href="./CSS/admincss.css">

    </head>
    <body>
        <?php
        include './Modules/Them.php';
        include './Modules/Xoa.php';
        ?>



        <div class="wrapper">
            <div class="header">
                <h3 style="text-align: center ; color: red; line-height: 120px">Quản Trị Nội Dung Website </h3>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.php">Trang Chủ</a></li>

                </ul>
            </div>
            <div class="content">
                <div class="left">
                    <form name="ThemSP" action="#" method="post" enctype="multipart/form-data">
                        <table width="100%" border ="1">
                            <tr>
                                <td colspan="2"><div style="text-align: center">Thêm sp</div></td>

                            </tr>
                            <tr>
                                <td>Tên San Pham:</td>
                                <td><input type="text" name="tensp"/></td>
                            </tr>
                            <tr>
                                <td>Gia</td>
                                <td><input type="number" name="gia"/></td>
                            </tr>
                            <tr>
                                <td>Hinh Anh</td>
                                <td><input type="file" name="hinhanh"/></td>
                            </tr>
                            <tr>
                                <td>Mo Ta</td>
                                <td><textarea name="mota"></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div style="text-align: center">
                                        <input type="submit" name="them" id="them" value="Thêm"/>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="right">


                    <table width="100%" border ="1">
                        <tr>
                            <td>ID</td>
                            <td>Tên SP</td>
                            <td>Gia</td>
                            <td colspan = "2">Quản Lý</td>
                        </tr>
                        <?php
                        include './Controller/ConnectDB_PHP.php';
                        $sql = "SELECT * FROM sanpham";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {

                            while ($row = $result->fetch_assoc()) {
                                echo '
                                <form action="adminindex.php" method="post" name"SuaXoaSP">
                                    <tr>
                                        <td><label name="id">' . $row['id'] . '</label>
                                        </td>
                                        <td>' . $row['TenSanPham'] . '
                                        </td>
                                        <td>' . $row['Gia'] . '
                                        </td>
                                        <td>
                                            <input type ="submit" value = "Sua" name = "sua">
                                        </td>
                                        <td>
                                            <input type ="submit" value = "xoa" name = "xoa">
                                        </td>
                                    </tr>
                                </form>
                                ';
                            }
                        } else {
                            echo 'Khong co san pham';
                        }
                        $conn->close();
                        ?>

                    </table>
                </div>
            </div>
            <div class="clear"></div>

            <div class="footer"></div>
        </div>

    </body>
</html>
