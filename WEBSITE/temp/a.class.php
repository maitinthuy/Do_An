<?php
class a{
		public $conn = null; 
		function __construct()
		{
			$this->conn = new PDO("mysql:host=localhost;dbname=demo", "root", "");
			$this->conn->query("set names 'utf8' ");
			echo "Ham tao chay xong!";
		}
		
		public function F1()
		{
			echo "Ham F1";	
		}
		
		function getAllBook()
		{
			$sql="select * from sanpham ";
			$stm = $this->conn->query($sql);
			return $stm->fetchAll(PDO::FETCH_ASSOC);
		}
	
	}
	
	 
	
	$x= new a();
	$x->F1();
	$data = $x->getAllBook();
	foreach($data as $r)
	{
		echo "<br>". $r["Masanpham"] ."-". $r["Tensanpham"];
	}
	