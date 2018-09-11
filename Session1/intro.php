<?php

    echo "Xin Chao hello ";
    //Khai Bao Bien
    echo '<br>';
    $UserName = "php";
    $a = 5;
    
    $b = 10;
    
    echo $a + $b;
    
    //Khai Bao Ham trong PHP
    /* 
     * Description: Gioi thieu chuc nang ham
     * Created by: Nguoi tao
     * Created Ngay Tao
     */
    function funtionName(){
        
    }
    //Goi Ham
    funtionName();
    
    function SumE($a, $b){
        return $a + $b;
    }
    echo '<br>';
    echo SumE(8, 4);
    //Cau Dieu Kien
    echo '<br>';
    for ($i = 1; $i <= 40; $i ++){
        echo '<br>';
        if ($i % 15 == 0) {
        echo 'MUOI LAM';
    } elseif ($i % 5 == 0) {
        echo 'NAM';
    } elseif ($i % 3 == 0) {
        echo 'BA';
    } else {
        echo 'Khong Chia Het cho 3,5,15';
    }
}
    
