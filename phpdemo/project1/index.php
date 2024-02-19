<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        *{
            margin:0;
        padding:0;
        }
      nav{
        background-color:#0A1F77;
        color:white; 
        width:auto;
        height:50px;
      }
      ul{
        margin-left:40px;
      }
      ul li{
        float:left;
        list-style-type:none;
        padding:10px;
        margin-top:5px;
        border-left:1px;
      }
    </style>
</head>

<body>
   
<?php

$navItems = [
 "GIỚI THIỆU",
 "TIN TỨC & THÔNG BÁO",
 "TUYỂN SINH",
 "ĐÀO TẠO",
 "NGHIÊN CỨU",
 "ĐỐI NGOẠI",
 "VĂN BẢN",
 "SINH VIÊN",
 "LIÊN HỆ"
];
$logo='<img src="">';
echo '<nav><logo><ul>';
foreach ($navItems as $item) {
 echo "<li>$item</li>";
}
echo '</logo></ul></nav>';
?>
</body>
</html>