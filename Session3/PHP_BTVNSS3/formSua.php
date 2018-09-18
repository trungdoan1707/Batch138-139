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
        <div class="left">
            <form name="SuaSP" action="adminindex.php" method="post" enctype="multipart/form-data">
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
    </body>
</html>