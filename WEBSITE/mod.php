<?php
$mod = isset($_GET["mod"])?$_GET["mod"]:"home";
	//echo " Mod = $mod ";
	if($mod=="home")
	{
		include "module/trangchu/trangchu.php";
	}
	if($mod=="sanpham")
	{
		include "module/sanpham/mod.php";
	}
	if($mod=="trangchu")
	{
		include "module/trangchu/trangchu.php";
	}
	if ($mod =="gioithieu")
	{
		include "module/gioithieu/gioithieu.php";	
		
	}
	if ($mod =="khuyenmai")
	{
		include "module/khuyenmai/khuyenmai.php";	
		
	}
	if($mod =="tintuc")
	{
		include "module/tintuc/tintuc.php";
	}
	if($mod == "lienhe")
	{
		include "module/lienhe/lienhe.php";
	}
	

?>