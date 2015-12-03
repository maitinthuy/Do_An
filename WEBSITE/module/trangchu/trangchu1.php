<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<style>

#tenloai
{
	width:100%;
	height:30px;
	background:#F00;
	float:left;
	color:#00F;
	
}
tenloai:hover
{
	color:#00F;
	
	
}
#hinhanh
{
	width:240px;
	height:250px;
	background-color:#000;
	float:left;
	border:double;
	border-color:#00F;
	
	padding-left:4px;
	color:#FFF;
	 text-align:center;

}
#hinhanh:hover
{
	
	border-color:#F0F;
	background-color:#60F;
	font-size:20px;
	
	

}

</style>


<?php
$pdo = new PDO("mysql:host=localhost;dbname=demo", "root", "");
$pdo->query("set names 'utf8' ");
$sql="select * from danhmucsanpham";
$stm = $pdo->query($sql);
$arr = $stm->fetchAll(PDO::FETCH_ASSOC);
foreach($arr1 as $r)
{
?>
     <div id="tenloai" style="font-style:italic;"><a href="#"><?php echo $r["TenLoai"];?> </a></br></div>     
       <?php
			 	$pdo = new PDO("mysql:host=localhost;dbname=demo", "root", "");
				$pdo->query("set names 'utf8' ");
				$sql1="select * from sanpham  where MaLoai='$r[MaLoai]' limit 0,4";
				$stm1 = $pdo->query($sql1);
				$arr1 = $stm1->fetchAll(PDO::FETCH_ASSOC); 
				foreach($arr1 as $r1)
				{
				?>
               
                 <div id="hinhanh"><img src="<?php echo $r1["Hinhanh"]?> " height="200px"; width="240px"; /><?php echo $r1["Tensanpham"]; ?> </div>
                
           
                <?php 
				}
				?>
     <?php 
				}
				?>
     
     
     
    
				
				
                    
              
</div>
</body>
</html>