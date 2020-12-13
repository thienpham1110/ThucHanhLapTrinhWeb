<?php
include_once("model/db.php");
class Loai_model extends Db
{
	public function getAllLoai()
	{
		$sql="select * from loai";
		
		return $this->query($sql);
		
		//return $this->getQuery();
	}
	public function getDanhSachLoai()
	{
		$sql="select * from loai";
		$cat=$this->query($sql);
		$s="<select name='lstCat'>";
		foreach($cat as $r)
			$s.= '<option value="'.$r['maloai'].'">'.$r['tenloai']."</option>";
		$s.="</select>";
		return $s;
	}
	function add($id,$name)
	{
		$sql="insert into loai values(:id,:name)";
		$this->query($sql,array(":id"=>$id,":name"=>$name));
		return $this->getNumRow();
	}
	function update($id,$name)
	{
		$sql="update loai set cat_name=:name where maloai=:id";
		$this->query($sql,array(":id"=>$id,":name"=>$name));
		//echo $this->getQuery($sql,array(":id"=>$id,":name"=>$name));
		
		return $this->getNumRow();
	}
	function updateloai($maloai,$tenloai)
	{
		$sql ="update loai set tenloai=? where maloai=? ";
		$arr = array($tenloai,$maloai);
		return $this->query($sql, $arr);
	}
	function delete($id)
	{
		$sql="delete from loai where maloai=:id";
		$this->query($sql,array(":id"=>$id));
		return $this->getNumRow();
	}
	function deleteloai($maloai)
	{
		$sql="delete from loai where maloai= ?";
		$this->updateQuery($sql, array($maloai));
	}
	function insertloai($ma, $tenloai)
	{
		$sql ="insert into loai(maloai, tenloai) ";
		$sql .=" values(?, ?)";
		$arr = array($ma, $tenloai);
		return $this->query($sql, $arr);
	}
	public function getMaLoai($id)
    {
		$sql="select * from loai  WHERE maloai='".$id."'" ;
        $t=$this->query($sql);
		return $t[0];
	}
	
}
?>