<?php
$ml=$_GET["maloai"];
$a=$b->select("select * from loaisanpham where MaLoai='$ml'");
foreach($a as $m)
{     

			 	$a1 = $b->select("select * from sanpham  where MaLoai='$m[MaLoai]'");
				foreach($a1 as $n)
				{
				?>
               
       <div id="hinhanh">
       <div id="noidungngan"><a href="index.php?mod=chitiet&Masanpham=<?php echo $n["Masanpham"] ?>">Xem Chi Tiet</a></br><?php echo $n["chitiet"] ?></div>
       <img src="<?php echo $n["Hinhanh"]?> " height="200px"; width="240px"; /><?php echo $n["Tensanpham"]; ?> <br /></div>
                
           
                <?php 
				}
				?>
     
     
            

<?php	
}
?>

