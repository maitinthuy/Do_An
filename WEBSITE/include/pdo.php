<?php
$pdo = new PDO("mysql:host=localhost;dbname=web", "root", "");
$pdo->query("set names 'utf8' ");
$sql="select * from danhmucsanpham";
$stm = $pdo->query($sql);
$arr = $stm->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
$pdo = new PDO("mysql:host=localhost;dbname=web", "root", "");
$pdo->query("set names 'utf8' ");
$sql1="select * from loaisanpham order by MaLoai asc";
$stm1 = $pdo->query($sql1);
$arr1 = $stm1->fetchAll(PDO::FETCH_ASSOC);
$n = $stm->rowCount();
?>

<?php
$pdo = new PDO("mysql:host=localhost;dbname=web", "root", "");
$pdo->query("set names 'utf8' ");
$sql2="select * from tintuc where idLoaiTin='TT' limit 0,1 ";
$stm2 = $pdo->query($sql2);
$arr2 = $stm2->fetchAll(PDO::FETCH_ASSOC);
?>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=web", "root", "");
$pdo->query("set names 'utf8' ");
$sql4="select * from tintuc where idLoaiTin='KM' limit 0,1 ";
$stm4 = $pdo->query($sql4);
$arr4 = $stm4->fetchAll(PDO::FETCH_ASSOC);
?>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=web", "root", "");
$pdo->query("set names 'utf8' ");
$sql5="select * from tintuc where idLoaiTin='Space' order by idTin desc  ";
$stm5 = $pdo->query($sql5);
$arr5 = $stm5->fetchAll(PDO::FETCH_ASSOC);
?>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=web", "root", "");
$pdo->query("set names 'utf8' ");
$sql6="select * from tintuc where idLoaiTin='TT' limit 0,5 ";
$stm6 = $pdo->query($sql6);
$arr6 = $stm6->fetchAll(PDO::FETCH_ASSOC);
?>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=web", "root", "");
$pdo->query("set names 'utf8' ");
$sql7="select * from tintuc where idLoaiTin='KM' limit 0,5 ";
$stm7 = $pdo->query($sql7);
$arr7 = $stm7->fetchAll(PDO::FETCH_ASSOC);
?>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=web", "root", "");
$pdo->query("set names 'utf8' ");
$sql3="select * from loaitin ";
$stm3 = $pdo->query($sql3);
$arr3 = $stm3->fetchAll(PDO::FETCH_ASSOC);
?>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=web", "root", "");
	$pdo->query("set names 'utf8' ");
	$sql8="select * from loaisanpham where idTen='idDC'";
	$stm8 = $pdo->query($sql8);
	$arr8 = $stm8->fetchAll(PDO::FETCH_ASSOC);
	$n = $stm8->rowCount();


?>