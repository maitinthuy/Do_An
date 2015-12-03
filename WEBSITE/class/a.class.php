<?php
class A
{
		public $conn = null; 
		public function __construct()
		{
			$this->conn = new PDO("mysql:host=localhost;dbname=demo", "root", "");
			$this->conn->query("set names 'utf8' ");
		}
		
		public function getAlldanhmuc()
		{
			$sql="select * from danhmucsanpham ";
			$stm = $this->conn->query($sql);
			return $stm->fetchAll(PDO::FETCH_ASSOC);
		}
		
		public function getAllLoaitin()
		{
			$sql="select * from loaitin ";
			$stm = $this->conn->query($sql);
			return $stm->fetchAll(PDO::FETCH_ASSOC);
		}
		
}

 
?>