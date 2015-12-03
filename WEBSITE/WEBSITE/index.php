<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="style/style.css" rel="stylesheet" />
<title>Untitled Document</title>
</head>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=demo", "root", "");
$pdo->query("set names 'utf8' ");
$sql="select * from danhmucsanpham";
$sql1="seledt sanpham.tensanpham, sanpham.hinhanh as sanphamshow from loaisanpham,sanpham where loaisanpham.maloai = sanpham.maloai";
$stm = $pdo->query($sql);
$stm1 = $pdo->query($sql);
$arr = $stm->fetchAll(PDO::FETCH_ASSOC);
$arr1 = $stm1->fetchAll(PDO::FETCH_ASSOC);

?>

<body>
<div id="cont">
<div id="header">Khuyến mãi</div>
<div id="menu">
 <ul>
        <li><a href="#">Trang Chủ</a></li>
        <li><a href="#">Giới Thiệu</a></li>
        <li><a href="#">Sản Phẩm</a>
            <ul>
                <?php
        foreach($arr as $r)
        {
            ?><li>
              <a href="#"><?php echo $r["TenDanhMuc"];?> </a>
            </li><?php
        }
        ?>
            </ul>
        </li>
        <li><a href="#">Khuyến Mãi</a></li>
        <li><a href="#">Tin Tức</a></li>
        <li><a href="#">Liên Hệ</a></li>
        <li class="0"><a href="#">Tìm Kiếm</a></li>
    </ul>
    <div id="clear"></div>
</div>

<div id="content">
    <div id="1">
    <?php
        foreach($arr1 as $v)
        {
            ?>
              <a href="#"><?php echo $v["sanphamshow"];?> </a>
            <?php
        }
        ?>
    </div>
    <div id="2">asd</div>
    <div id="3">asd</div>
    <div id="4">asd</div>
    <div id="5">asd</div>
    <div id="6">asd</div>
    <div id="7">asd</div>
</div>
<div id="footer">Khuyến mãi</div>
</div>
</body>
</html>