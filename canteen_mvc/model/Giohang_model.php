<?php
include_once("model/db.php");
class giohang_model extends Db
{
	public function dathang($mahd,$email,$ten,$diachi,$ngaynhan,$dienthoai)
	{
		$sql="INSERT INTO hoadon(mahd,email,tennguoinhan,diachinguoinhan,ngaynhan,dienthoainguoinhan)";
		$sql .=" VALUES(?, ?, ?, ?, ?, ?)";
		$arr = array($mahd,$email,$ten,$diachi,$ngaynhan,$dienthoai);
		return $this->query($sql, $arr);		
	}
	public function chitietDatHang($mahd,$mamonan,$soluong,$gia){
		$sql="INSERT INTO chitiethd(mahd,mamonan,soluong,gia) VALUES(?, ?, ?, ?)";
		$arr = array($mahd,$mamonan,$soluong,$gia);
		return $this->query($sql, $arr);	
	}
	public function getHoadon($email){
		$sql="select * from hoadon where email=?";
		$arr = array($email);
		return $this->query($sql, $arr);
	}
	public function getChiTietHD($mahd)
	{
		$sql="select * from chitiethd where mahd=?";
		$arr = array($mahd);
		return $this->query($sql, $arr);
	}
	public function getAllKH()
	{
		$sql="select * from khachhang";
		return $this->query($sql);
	}
	public function getAllHoadon()
	{
		$sql="select * from hoadon";
		return $this->query($sql);
	}
	public function get1Page($start)
	{
		$sql="select * from hoadon limit ".$start.", ".HOADON_TRANG;
		return $this->query($sql);
	}
	public function tongsoHD()
	{
		$sql="select count(*) as sl from hoadon";
		$kq= $this->query($sql);
		return $kq[0]['sl'];
	}
	public function getHoadonCT($start,$email){
		$sql="select * from hoadon where email=? limit ".$start.",".HOADON_TRANG;
		return $this->query($sql,array($email));
	}
	public function xoaHD($mahd){
		$sql="delete from hoadon where mahd= ?";
		return $this->query($sql,array($mahd));
	}
}
?>