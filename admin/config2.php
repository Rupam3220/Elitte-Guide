<?php
class dbconfig
{
	private $host="localhost";
	private $uid="root";
	private $password="";
	private $database="ellite_guide";
	protected $con;
	public function __construct()
	{
		if($this->con=mysqli_connect($this->host,$this->uid,$this->password,$this->database))
			return true;
		else
			echo "error establishing connection";
	}
}
?>
	