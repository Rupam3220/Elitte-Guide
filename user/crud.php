<?php
include('config2.php');
class crud extends dbconfig
{
	public function __construct()
	{
		parent:: __construct();
	}
	function insert($sql)
	{	
	if($this->con->query($sql))
		return true;
	else
		return false;
	}
function fetch($sql)
{
	$result=$this->con->query($sql);
	return $result;
}
function del($sql)
{
	if(!$this->con->query($sql))
		return true;
	else
		return false;
}
function update($sql)
{
	if(!$this->con->query($sql))
		return true;
	else
		return false;
}
}
?>
	