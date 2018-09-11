<?php 
    //Bai Tap 1: Kiem tra chan le va chia het cho 3
    $a = 9;
    if($a % 2 == 0){
        echo 'So Chan';
    }elseif ($a % 3 == 0) {
        echo 'So le Chia Het cho 3';
    } else {
        echo 'So Le khong chia het cho 3';
}

    //Bai Tap 2: Kiem tra so co phai thang trong nam
    
    $b = 12;
    echo '<br/>';
    switch ($b) {
        case '1':
            echo 'Day La Thang 1';
            break;
        case '2':
            echo 'Day La Thang 2';
            break;
        case '3':
            echo 'Day La Thang 3';
            break;
        case '4':
            echo 'Day La Thang 4';
            break;
        case '5':
            echo 'Day La Thang 5';
            break;
        case '6':
            echo 'Day La Thang 6';
            break;
        case '7':
            echo 'Day La Thang 7';
            break;
        case '8':
            echo 'Day La Thang 8';
            break;
        case '9':
            echo 'Day La Thang 9';
            break;
        case '10':
            echo 'Day La Thang 10';
            break;
        case '11':
            echo 'Day La Thang 11';
            break;
        case '12':
            echo 'Day La Thang 12';
            break;
        default :
            echo 'Day Khong Phai La Thang trong nam';
            break;
    }