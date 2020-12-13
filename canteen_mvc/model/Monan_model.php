<?php
include_once("model/db.php");
class Mon_model extends Db
{
	public function getAllMon()
	{
		$sql="select * from monan";
		return $this->query($sql);
		
		//return $this->getQuery();
	}
	public function get1Page($start)
	{
		$sql="select * from monan limit ".$start.", ".MON_TRANG;
		return $this->query($sql);
		
		//return $this->getQuery();
	}
    // public function getSach1Loai($id)
    // {
	// 	$sql="select * from sach WHERE maloai='".$id."'";
		
    //     return $this->query($sql);
	// }
	public function getMon1Loai($id,$page=0)
    {
		$sql="select * from monan WHERE maloai='".$id."'";
		if($page>0)
		{
			$start=($page-1)*MON_TRANG;
			$sql.=" limit ".$start.", ".MON_TRANG;
		}
        return $this->query($sql);
	}
	public function getMon1nhahang($id,$page=0)
    {
		$sql="select * from monan WHERE manhahang='".$id."'";
		if($page>0)
		{
			$start=($page-1)*MON_TRANG;
			$sql.=" limit ".$start.", ".MON_TRANG;
		}
        return $this->query($sql);
    }
	public function getDetail($id)
    {
		$sql="select *,nhahang.tennhahang,loai.tenloai 
		from ((monan left join nhahang on nhahang.manhahang=monan.manhahang)
		left join loai on loai.maloai=monan.maloai)  WHERE mamonan='".$id."'" ;
        $t=$this->query($sql);
		return $t[0];
	}
	function detail($mamon)
	{
		$sql="select * from monan where mamonan=? ";
		$arr= array($mamon);
		$data= $this->query($sql,$arr);
		if (Count($data)>0)
			return $data[0];
		return 0;
	}
	public function thongTin($ids)
    {
		$dk=implode("','",$ids);
		$dk="('".$dk."')";
        $sql="select * from monan WHERE mamonan in $dk";
		
        $t=$this->query($sql);
		return $t;
    }
	public function getPrice($id)
	{
		$param=array();
		$param[':id']=$id;
		$sql="select gia from monan where mamonan=:id";
		$kq=$this->query($sql,$param);
		return $kq[0];
	}
	public function add($id,$name,$des,$price,$file,$pub_id,$cat_id)
	{			
			$sql="insert into monan values(:id,:name,:des,:price,:img,:pub,:cat)";
			$this->query($sql,array(":id"=>$id,":name"=>$name,":des"=>$des,":price"=>$price,":img"=>$file,":pub"=>$pub_id,":cat"=>$cat_id));
			$this->getQuery($sql,array(":id"=>$id,":name"=>$name,":des"=>$des,":price"=>$price,":img"=>$file,":pub"=>$pub_id,":cat"=>$cat_id));
			return $this->getNumRow();				
	}
	function insertmon($ma, $tenmon ,$mota, $gia, $file, $manhahang, $maloai)
	{
		$sql ="insert into monan(mamonan, tenmon, mota, gia, hinh, manhahang, maloai) ";
		$sql .=" values(?, ?, ?, ?, ?, ?,?)";
		$arr = array($ma, $tenmon ,$mota, $gia, $file, $manhahang, $maloai);
		return $this->query($sql, $arr);
	}
	
	public function tongsomon()
	{
		$sql="select count(*) as sl from monan";
		$kq= $this->query($sql);
		return $kq[0]['sl'];
	}
	public function tongMon1Loai($id)
	{
		$sql="select count(*) as sl from monan where maloai=?";
		$kq= $this->query($sql,array($id));
		return $kq[0]['sl'];
	}
	public function tongMon1Nhahang($id)
	{
		$sql="select count(*) as sl from monan where manhahang=?";
		$kq= $this->query($sql,array($id));
		return $kq[0]['sl'];
	}
	function update($mamonan,$tenmon ,$mota, $gia, $file, $manhahang, $maloai)
	{
		$sql ="update  monan set tenmon=?, mota=?, gia=?, hinh=?, manhahang=?, maloai=? where mamonan=? ";
		$arr = array($tenmon ,$mota, $gia, $file, $manhahang, $maloai,$mamonan);
		return $this->query($sql, $arr);
	}
	function delete($mamon)
	{
		$sql="delete from monan where mamonan= ?";
		$this->updateQuery($sql, array($mamon));
	}
	function search($search,$page=0){
		$sql="select * from monan where ( tenmon like '%$search%') OR (mota like '%$search%')";
		if($page>0)
		{
			$start=($page-1)*MON_TRANG;
			$sql.=" limit ".$start.", ".MON_TRANG;
		}
        return $this->query($sql);
	}
	public function tongMonTim($search)
	{
		$sql="select count(*) as sl from monan where  ( tenmon like '%$search%') OR (mota like '%$search%')";
		$kq= $this->query($sql);
		return $kq[0]['sl'];
	}
}
?>