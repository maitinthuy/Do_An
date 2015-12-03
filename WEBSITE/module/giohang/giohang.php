<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//define("BASE_URL", "http://localhost:8080/WEBSITE");
//include "../../class/gh.class.php";
//include "class/gh.class.php";
$cart = new GH();
if(!isset($_SESSION)) session_start();//khỏi động session



$giohang = isset($_GET["giohang"])?$_GET["giohang"]:"";
$soluong= isset($_GET["soluong"])?$_GET["soluong"]:1;
$masanpham=isset($_GET["masanpham"])?$_GET["masanpham"]:"";
$ac = isset($_GET["ac"])?$_GET["ac"]:"";
if ($ac=="add") $cart->Add($masanpham, $soluong);
if ($ac=="del") $cart->remove($masanpham);
if($ac=="delAll") $cart->removeAll();
?>
<div id="ng">
	<?php if($cart->getNumItem() > 0)
	{
		?>
		<div id="ct_link">
     		<div id="ct">
				<?php 
               
                $cart->show($giohang);
                ?>
    		 </div>
	    
            <div id="link">
                <a class="a" href="<?php echo BASE_URL;?>/index.php">Tiếp tục mua hàng</a>
                <a class="a" href="<?php echo BASE_URL; ?>/index.php?mod=giohang&ac=delAll">Xóa toàn bộ giỏ hàng</a>
            </div>
    
   		</div>
        
		<div id="thanhtien">
            <div id="tongtien">
            <p> <h2>Thành Tiền: <?php echo number_format($cart->getTongTien(),3); ?> đồng</h2></p>
            <hr color="#FF0000" />
            </div>
        	<div id="btthanhtoan" style="text-align:center;">
                <form action="include/thanhtoan.php">
                    <input style="background-color:#0C9; width:100px; height:50px;" type="submit" name="muahang" value="MUA HÀNG"  />
                </form>
        	</div>
   		</div><?php
	} 
		else 
		{
		$cart->show($giohang); ?>
		<p><a class="a" href="<?php echo BASE_URL;?>/index.php">Tiếp tục mua hàng</a></p>
		<?php 
		} ?>

</div>
<style>
.a{ color:#F00; font-size:18px;}
#ng{ background-color:#FFF; width:100%; height:100%;}
#ct_link{width:69%; height:100%; float:left;}
#ct{ background:#FFF; width:100%; height:90%; }
#link{ background-color:#FFF; width:100%; height:10%; border:groove;}
#thanhtien{ background-color:#039; width:30%; height:100%; float:right;}
#tongtien{ background-color:#FFF; width:100%; height:80%;}
#btthanhtoan{ background-color:#0CF; width:100%; height:20%}


</style>
