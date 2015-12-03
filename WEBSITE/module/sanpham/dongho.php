
<?php $iddanhmuc = isset($_GET["idTen"]) ?>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=demo", "root", "");
$pdo->query("set names 'utf8' ");
$sql="select * from loaisanpham where idTen='$iddanhmuc'";
$stm = $pdo->query($sql);
$arr = $stm->fetchAll(PDO::FETCH_ASSOC);
?>
<?php 
foreach($arr as $r)
{
	echo $r["TenLoai"];
}
?>
