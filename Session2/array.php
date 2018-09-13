<?php

/*
  $arr = array();
  //debug
  //var_dump($arr);
  $arr = array('Trung', 'Huyen', 'Khanh');
  //Kieu key=>value
  //$arr = array(0 =>'Trung',1=> 'Huyen',2=> 'Khanh');
  $arr1 = array('tr' =>'Trung','h'=> 'Huyen','k'=> 'Khanh');
  //var_dump($arr);
  echo $arr[0];
  echo '<br>';
  echo $arr1['k'];
  $arr1['tr'] = 'Phuoc Trung';
  echo '<br>';
  echo $arr1['tr'];
  echo '<br>----------<br>';
  foreach ($arr1 as $key => $value){
  echo $value;
  echo '<br>';
  }
  //Them 1 phan tu cho mang
  $arr1['u'] = 'Uan';
  //Cach 2
  array_push($arr1, 'Hung');
  echo '<br>----------<br>';
  foreach ($arr1 as $key => $value){
  echo $value;
  echo '<br>';
  }
  //xoa phan tu
  unset($arr1['h']);
  echo '<br>----------------------------<br>';
  //Bai Tap 3:
  function InSanPham($SanPham){
  foreach ($SanPham as $key => $value){
  echo $value;
  echo '<br>';
  }
  }
  $SanPham = ['BK' => 'Banh Keo', 'TC' => 'Trai Cay', 'DC' => 'Do Choi'];
  echo 'Cau 1: ';
  echo '<br>';
  InSanPham($SanPham);
  echo 'Cau 2: ';
  echo '<br>';
  $SanPham['AQ'] = 'Ao Quan';
  InSanPham($SanPham);
  echo 'Cau 3: ';
  echo '<br>';
  $SanPham['BK'] = 'Thuc Pham';
  InSanPham($SanPham);
  echo 'Cau 4: ';
  echo '<br>';
  unset($SanPham['TC']);
  InSanPham($SanPham);
 */

//Bai Tap 4
function Age($age) {
    echo 2018 - $age;
}

function ShowInfor($arr) {
    for ($index = 0; $index < count($arr); $index++) {
        foreach ($arr[$index] as $key1 => $value1) {
            if ($key1 == 'birthday') {
                Age($value1);
            } else {
                echo $value1;
            }
            echo '<br>';
        }
    }
}

$arr3 = array(
    array(
        'name' => 'Khoi',
        'birthday' => 1997,
        'gender' => 'male'
    ),
    array(
        'name' => 'Trung',
        'birthday' => 1985,
        'gender' => 'male'
    ),
    array(
        'name' => 'Huyen',
        'birthday' => 1987,
        'gender' => 'female'
    ),
);
ShowInfor($arr3);
//Doi Ten
echo '<br>---------------------<br>';
$arr3[1]['name'] = 'Trung Doan';
ShowInfor($arr3);
echo '<br>---------------------<br>';
//Them Hoc Sinh Moi
$arr3[3] = ['name' => 'Cuong', 'birthday' => 1996, 'gender' => 'male'];
ShowInfor($arr3);
echo '<br>---------------------<br>';
//Xoa Hoc Sinh
unset($arr3[0]);
$arr4 = array_values($arr3);
ShowInfor($arr4);
echo '<br>---------------------<br>';

//In Nam hoc vien
for ($index = 0; $index < count($arr4); $index++) {
    if ($arr4[$index]['gender'] == 'male') {
        foreach ($arr4[$index] as $key => $value) {
            if ($key == 'birthday') {
                Age($value);
            } else {
                echo $value;
            }
            echo '<br>';
        }
    }
    echo '<br>';
}
?>
