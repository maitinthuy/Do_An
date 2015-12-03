<?php

	
$iddm = isset($_GET["idgt"])?$_GET["idgt"]:"";
	if($idgt=="")
	{
		include "module/gioithieu/gioithieu.php";
	}
	else if($idgt=="thongtin")
		{
			include "module/gioithieu/thongtin.php";
		}
	else if($idgt=="quatrinh")
		{
			include "module/gioithieu/quatrinhphattrien.php";
		}
	
?>