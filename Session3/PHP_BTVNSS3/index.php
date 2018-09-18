<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Load San Pham tu database</title>
        <link rel="stylesheet" type="text/css" href="./CSS/MyCSS.css"/>

    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <img src="./images/Phone_Banner.JPG" width="100%" height="254px"/>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li>
                        <form name="searchForm" action="#" method="post">
                            <input type="text" name="search" >
                            <input type="submit" name="submitSearch" value="Search">
                        </form>
                    </li>

                    <li><a href="#">Liên Hệ</a></li>
                </ul>
            </div>

            <div class="content">
                <div class="left">
                    <p>Hãng Sản Xuất</p>
                    <div class="danhsachsanpham">  
                        <ul>

                            <li><a href="#">Apple</a></li>
                            <li><a href="#">SamSung</a></li>
                            <li><a href="#">Oppo</a></li>
                            <li><a href="#">Huewai</a></li>
                        </ul>
                    </div>
                    <p>Sản Phẩm</p>
                    <div class="danhsachsanpham">  
                        <ul>
                            <li><a href="#">Điện Thoại</a></li>
                            <li><a href="#">Tablet</a></li>
                            <li><a href="#">Phụ Kiện</a></li>

                        </ul>
                    </div>
                </div>
                <div class="right">
                    <p style="text-align: center; color: red; background: #0099cc; padding: 10px">Tất cả Sản Phẩm</p>
                    <div class="AllSanPham">
                        <?php
                        include './Controller/ConnectDB_PHP.php';
                        $sql = "SELECT * FROM sanpham";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            
                            while ($row = $result->fetch_assoc()) {
                               // echo "id: " . $row["id"] . " - Name: " . $row["TenSanPham"] . " " . $row["MoTa"] . "<br>";
                               echo '
                                <ul>
                                <li><a href = "index.php?xem=Chitietsanpham&id=1">
                                <img src = '.$row["image"].' width = "130px" height = "130px">
                                <p>Tên sản phẩm: '.$row["TenSanPham"].'</p>
                                <p>Giá: '.$row["Gia"].'</p>
                                <p>Chi tiết</p>
                                </a>
                                </li>
                                </ul>';
                            }
                        } else {
                            echo "Khong Tim Thay San Pham";
                        }
                        $conn->close();
                        ?>

                    </div>
                </div>
            </div>
            <div class="clear"></div>

            <div class="footer">
                <p>WebsiteDemoPHP</p>
            </div>
        </div>
    </body>
</html>
