<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Navigation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        nav {
            background-color: #000080;
            padding: 10px;
            display: flex;
            align-items: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        li {
            margin-right: 20px;
        }

        li:last-child {
            margin-right: 0;
        }

        li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }


        li a:hover {
            color: yellow;
        }

        .home-icon {
            margin-right: 10px;
            color :white;
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
?>

<nav>

    <i class="fas fa-home home-icon"></i>
    <ul>
        <?php
        foreach ($navItems as $item) {
            echo "<li><a href='#'>$item</a></li>";
        }
        ?>
    </ul>
</nav>
</body>
</html>