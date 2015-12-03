<?php
include("../../class/b.class.php");
$m= new B();
$ma=$_POST["masanpham"];
$l = $m->select("select * from sanpham where Masanpham='$ma' ");
?>