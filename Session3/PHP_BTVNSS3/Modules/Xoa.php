<?php

if (isset($_POST['xoa'])) {
    include './Controller/ConnectDB_PHP.php';
    $id = $_POST['id'];
    $sqlString = "DELETE FROM `sanpham` WHERE id = '$id'";
    echo var_dump($id);

    if ($conn->query($sqlString) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
?>