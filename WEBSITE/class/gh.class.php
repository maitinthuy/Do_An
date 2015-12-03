<?php 
include_once "b.class.php";
class GH extends B
{
	private $giohang;
	private $_num_item =0;
	private $tongtien =0;//biến toàn cục cho class sử dụng
	public function  __construct()//hàm khởi tạo, mặc định với tên như thế, khi gọi nhúng class này sẽ tự động chạy hàm này
	{
		
		if(!isset($_SESSION["giohang"])) $_SESSION["giohang"] = array();
		else $this->giohang = $_SESSION["giohang"];//nếu đã tồn tại rồi thì gio hàng bằng phiên làm việc có tên giỏ hang
		$this->_num_item = array_sum($_SESSION["giohang"]);//tổng cái sp có trog giỏ hàng
		
	}
	
	public function  getTongTien(){return $this->tongtien;}
	public function getNumItem()//hàm lấy tổng các sản phẩm có trong cart
	{
		return $this->_num_item;	
	}
	
	public function Add($masanpham, $soluong)
	{
		//echo "Them....";
		if ($masanpham=="" || $soluong<1) return;//không có sp nào		
		if (!isset($this->giohang[$masanpham]))
			$this->giohang[$masanpham]=$soluong;
		else 
			$this->giohang[$masanpham]+=$soluong;
			
		
		$this->_num_item = array_sum($this->giohang);
		$_SESSION["giohang"] = $this->giohang;	//lưu phiên làm việc này lại
	
		
	}
	public function remove($masanpham)
	{
		//echo "Xoa....";
		unset($this->giohang[$masanpham]);
		$this->_num_item = array_sum($this->giohang);
		$_SESSION["giohang"] = $this->giohang;	
	}
	public function removeAll()
	{
		unset($_SESSION["giohang"]);
		//header("location:index.php");
		echo "<script language=javascript>window.location='index.php?mod=giohang';</script>";
	
	}
	
	
	public function show()
	{
		if (Count($this->giohang)==0) 
		{	echo "Giỏ hàng rỗng";
			return;
		}
		else
		{
		
		echo "<table style='width:100%' border=\"0\"><tr  border=\1\><td>Sản phẩm đã chọn</td><td>Số lượng</td><td>Đơn Giá</td><td>Giá Khuyến Mãi</td><td>Thành tiền</td></tr>";
		
		{
			$tongtien =0;//khởi tạo tổng tiền trong hàm hiển thị
			foreach($this->giohang as $msp=>$sl)
			{
				$a = new B();
				$arr = $a->select("select * from sanpham where Masanpham='$msp'");
				foreach($arr as $r)
				{
					$tongtien += ($sl*$r['Dongia'] - $sl*$r['GiaKhuyenMai']);
                ?>
                <?php
					
					echo "<tr>";
                ?>
              
                
                 <td><div style="float:right; width:50%;">
				 	<?php echo $r["Tensanpham"]; ?>
                    <p><?php echo $r["MaNCC"]; ?></p>
                    <p><a href="<?php echo BASE_URL; ?>/index.php?mod=giohang&ac=del&masanpham=<?php echo $msp;?>"><img src="images/Trash-25.png"</a></p>
                 </div>
                 <div style="float:left; width:50%;"><img src="<?php echo BASE_URL."/". $r['Hinhanh'] ?>" width="100px"  height="100px"/></div> </td>
					  
					
                   <td> <?php echo $sl;?></td>
					<td><?php echo  number_format($r['Dongia'],3)." đồng";?></td>
                    <td><?php echo  number_format($r['GiaKhuyenMai'],3)." đồng";?></td>
					<td><?php echo number_format((($sl*$r['Dongia']) - ($sl*$r['GiaKhuyenMai'])),3)." đồng";?></td>
                    
					<?php echo "</tr>";
				}
		}
		echo "</table>";
		}
		
		
		$this->tongtien= $tongtien;//gán tổng tiền trong hàm cho biến tong tiền của class
}
	}
	
}
?>