<?php 
error_reporting(0);
$condb = mysqli_connect("localhost","root","","pos_db") 
or die ("Error :".mysqli_error($condb));
mysqli_query($condb,"SET NAMES UTF8");
date_default_timezone_set('Asia/Bangkok');

// error_reporting( error_reporting() & ~E_NOTICE );//ปิดerror ที่ต้องใส่ @
// if($condb){
// 	echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
// }else{
// 	echo "เชื่อมต่อฐานข้อมูลไม่สำเร็จ";
// }




?>