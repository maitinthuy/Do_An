<script type="text/javascript" src="jq/elevatezoom-master/jquery.elevateZoom-3.0.8.min.js"></script>
<script type="text/javascript" src="jq/elevatezoom-master/elevatezoom.jquery.json"></script>
<script type="text/javascript" src="jq/elevatezoom-master/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="jq/elevatezoom-master/jquery.elevatezoom.js"></script>

<?php
$Masanpham=$_GET["Masanpham"];

$arr = $b->select("select * from sanpham where Masanpham='$Masanpham'");
foreach($arr as $r)
{
	?>
<div id="tong">    
	<div id="bu">
        <div id="anhsanpham">
        <img id="zoom_01" src="<?php echo $r["Hinhanh"];?>" data-zoom="<?php echo $r["Hinhanh"];?>" width="100%" height="100%"  />
        </div>
        
	</div>
	
	<div id="chitietsanpham" >
    	<div id="chitiet">
		
            <div id="ten"><?php echo $r["Tensanpham"]; ?></div>
            <div id="ma">Mã sản phẩm:<?php echo $r["Masanpham"]; ?></div><hr />
            <?php echo $r["chitiet"]; ?>
            <div id="gia"> <?php echo $r["Dongia"];?></div><hr />
            <div id="sl">
                Số lượng đặt mua:<select name="soluong">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                </select>
            </div><hr />
            
            <div id="button">
            <input type="button" name="muahang" value="Mua Hang" />
            <input type="button" name="datvaogiohang" value="Dat vao gio hang"/>
            </div><br /><hr />
            <div id="thongtin">
            <p>Gọi đặt mua ngay TPHCM: <b>096 3235 371</b> hoặc <b>094 9200 084</b> | Bình Định: <b>(0566) 280 846</b></p>
            <p><img src="images/Support-24.png" width="15px" height="15px" /> Bảo hành chu đáo</p>
            <p><img src="images/cart.png" width="15px" height="15px" /> Giao hàng tận nơi</p>
            <p><img src="images/Synchronize-26.png" width="15px" height="15px" /> Phương thức đổi trả linh hoạt</p>
            <p><img src="images/US Dollar-24.png" width="15px" height="15px" /> Thanh toán an toàn tiện lợi</p>
            </div>
        </div>
        
        <div id="spcungloai">
        SẢN PHẨM CÙNG LOẠI
        	<?php
			$t = $b->select("select * from sanpham where MaLoai='$r[MaLoai]' limit 0,3 "); 
			foreach($t as $s)
			{ 
			?>
            	<div id="anh">
                <img src="<?php echo $s['Hinhanh'];?>" width="100%" height="100px"  />
                </div>
                <div><a href="#"><?php echo $s['Tensanpham']; ?></a> </div>
            <?php
			}
			?>
        </div>
        
	</div>
</div>

<div id="binh_luan">
<?php include "include/comment.php"; ?>        	
</div>  
      
    
	<?php 
}
?>
<style>
#anhsanpham{ width:100%; height:60%}

#bu{width:35%; height:100%; float:left; margin-top:10px; margin-bottom:10px;}
#chitietsanpham{ float:right; width:62%; height:100%; margin-top:10px; margin-bottom:10px;}
#chitiet{ float:left; width:50%;} 
#spcungloai{ height:400px; background-color:#CCC; width:40%; float:right; }


#ten{ width:60%; height:10%; text-align:left; font-size:24px; color:#003;}
#gia{ width:60%; height:10%; text-align:left; font-size:24px; color:#F00;}
#thongtin{margin-left:2%; margin-top:5px; margin-bottom:5px;}
</style>
<script>
    $('#zoom_01').elevateZoom({
    zoomType: "window",
cursor: "crosshair",
zoomWindowFadeIn: 500,
zoomWindowFadeOut: 750
   }); 
</script>


