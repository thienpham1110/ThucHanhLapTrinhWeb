<?php
class Db
{
	
	private $pdo;
	private $num_row;
	public function __construct()
	{
		
		$this->data= array();
		$this->num_row=0;
		try
		{
			$this->pdo=new PDO("mysql:host=".HOST.";dbname=".DB_NAME,USER,PASS);
			$this->pdo->query("set names utf8");
		}catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	public function query($sql,$param=array(),$mode=PDO::FETCH_ASSOC)
	{
		
		$stmt=$this->pdo->prepare($sql);
		if(count($param)>0)
		{
			$stmt->execute($param);
		}
		else
		$stmt->execute();

		$this->num_row=$stmt->rowCount();
		return $stmt->fetchAll($mode);
	}
	public function insert($sql,$param=array(),$mode=PDO::FETCH_ASSOC)
	{
		
		$stmt=$this->pdo->prepare($sql);
		if(count($param)>0)
		{
			$stmt->execute($param);
		}
		else
		$stmt->execute();
		$this->num_row=$stmt->rowCount();
		return $this->pdo->lastInsertId();
		
		
	}
	public function getQuery($query, $params) 
	{
		$keys = array();
	
		# build a regular expression for each parameter
		foreach ($params as $key => $value) {
			if (is_string($key)) {
				$keys[] = '/:'.$key.'/';
			} else {
				$keys[] = '/[?]/';
			}
		}
	
		$query = preg_replace($keys, $params, $query, 1, $count);
	
		#trigger_error('replaced '.$count.' keys');
	
		return $query;
	}
	public function getNumRow()
	{
		return $this->num_row;	
	}
	function updateQuery($sql, $arr=array())
	{
		$stm = $this->pdo->prepare($sql);
		$stm->execute($arr);
		
		return $stm->rowCount();
	}
}

?>