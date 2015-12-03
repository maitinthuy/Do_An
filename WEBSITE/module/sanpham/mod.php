<?php

	
$iddm = isset($_GET["iddm"])?$_GET["iddm"]:"";
	if($iddm=="")
	{
		include "module/trangchu/trangchu.php";
	}
	else if($iddm=="idDC")
		{
			include "module/sanpham/daychuyen.php";
		}
	else if($iddm=="idDH")
		{
			include "module/sanpham/dongho.php";
		}
	else if($iddm=="idHT")
		{
			include "module/sanpham/hoatai.php";
		}
	else if($iddm=="idLT")
		{
			include "module/sanpham/lactay.php";
		}
	else if($iddm=="idLC")
		{
			include "module/sanpham/lacchan.php";
		}
	else if($iddm=="idMDC")
		{
			include "module/sanpham/matdaychuyen.php";
		}
	else if($iddm=="idNhan")
		{
			include "module/sanpham/nhan.php";
		}
		
?>