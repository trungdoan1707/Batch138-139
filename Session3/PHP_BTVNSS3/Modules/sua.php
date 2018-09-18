<?php
       
            include './Controller/ConnectDB_PHP.php';
            $sqlString = "DELETE FROM `sanpham` WHERE id = $id";

            
            if ($conn->query($sqlString) === TRUE) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $conn->error;
            }

            $conn->close();
        
        ?>