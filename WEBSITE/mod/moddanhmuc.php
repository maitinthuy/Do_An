<?php
$mod = isset($_GET["mod"])?$_GET["mod"]:"home";
	//echo " Mod = $mod ";
	if($mod=="home")
	{
		include "module/trangchu/trangchu.php";
	}
	if($mod=="sanpham")
	{
		include "mod/modsanpham.php";
	}
	
	if($mod=="trangchu")
	{
		include "module/trangchu/trangchu.php";
	}
	
	if ($mod =="gioithieu")
	{
		include "module/gioithieu/gioithieu.php";	
		
	}
		if ($mod =="chitiet")
	{
		include "module/sanpham/chitiet.php";	
		
	}
	if($mod=="noidung")
	{
		include "module/tintuc/noidung.php";
	}

	
	if($mod =="tintuc")
	{
		include "mod/modtintuc.php";
	}
	if($mod == "lienhe")
	{
		include "module/lienhe/lienhe.php";
	}
	if($mod == "timkiem")
	{
		include "include/timkiem.php";
	}
	

?>