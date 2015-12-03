<?php
class B
{
	public $conn;
	private $num;
	public function __construct()
	{
			$this->conn = new PDO("mysql:host=localhost; dbname=webtrangsuc", "root", "");
			$this->conn->query("set names 'utf8' ");
		
	}
	function query($sql, $arr= array())
		{
				$sth= $this->conn->prepare($sql);
				$sth->execute($arr);
				$this->num = $sth->rowCount();
				return $sth->fetchAll(PDO::FETCH_ASSOC);
		}
	function select($sql, $arr= array())
	{
		return $this->query($sql, $arr);	
		
	}
	function insert($sql, $arr= array())
	{
		 $this->query($sql, $arr);	
		 return $this->num;
		
	}
}
?>