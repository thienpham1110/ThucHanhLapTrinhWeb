<?php
include_once("model/db.php");
class Nhahang_model extends Db
{
	public function getAllNhaHang()
	{
		$sql="select * from nhahang";
		return $this->query($sql);
	}
	
	public function getDanhSachNhaHang()
	{
		$sql="select * from nhahang";
		$cat=$this->query($sql);
		$s="<select name='lstPub'>";
		foreach($cat as $r)
			$s.= '<option value="'.$r['manhahang'].'">'.$r['tennhahang']."</option>";
		$s.="</select>";
		return $s;
	}
	function add($id,$name)
	{
		$sql="insert into nhahang values(:id,:name)";
		$this->query($sql,array(":id"=>$id,":name"=>$name));
		return $this->getNumRow();
	}
	function insertnhahang($ma, $tennhahang)
	{
		$sql ="insert into nhahang(manhahang, tennhahang) ";
		$sql .=" values(?, ?)";
		$arr = array($ma, $tennhahang);
		return $this->query($sql, $arr);
	}

	function update($id,$name)
	{
		$sql="update nhahang set tennhahang=:name where manhahang=:id";
		$this->query($sql,array(":id"=>$id,":name"=>$name));
		//echo $this->getQuery($sql,array(":id"=>$id,":name"=>$name));
		
		return $this->getNumRow();
	}
	function updatenhahang($manhahang,$tennhahang)
	{
		$sql ="update nhahang set tennhahang=? where manhahang=? ";
		$arr = array($tennhahang,$manhahang);
		return $this->query($sql, $arr);
	}
	
	function delete($id)
	{
		$sql="delete from nhahang where manhahang=:id";
		$this->query($sql,array(":id"=>$id));
		return $this->getNumRow();
	}
	function deletenhahang($manhahang)
	{
		$sql="delete from nhahang where manhahang= ?";
		$this->updateQuery($sql, array($manhahang));
	}
	public function getMaNhahang($id)
    {
		$sql="select * from nhahang  WHERE manhahang='".$id."'" ;
        $t=$this->query($sql);
		return $t[0];
	}
	
	
}
?>