<?php
include_once("model/db.php");
class User_model extends Db
{
	public function checkUser($email,$pass)
	{
		$sql="select count(*) as dem from khachhang where email=? and matkhau=md5(?)";
		$kq=$this->query($sql,[$email,$pass]);
		return $kq[0]['dem'];
	}	
	function getById($userName)
	{
		return $this->query('select email, tenkh, diachi, dienthoai from khachhang where email=? ', array($userName));
	}

	function getByIdPass($userName, $pass)
	{
		$arr = array($userName, $pass);
		$data= $this->query('select email, tenkh, diachi, dienthoai from khachhang where email=? and password=?', $arr);
		
		if (Count($data)==0) return array();
		return $data[0];
	}

	function checkAdmin($email,$pass)
	{
		$sql="select count(*) as dem from quantri where username=? and matkhau=md5(?)";
		$kq=$this->query($sql,[$email,$pass]);
		return $kq[0]['dem'];
	}
	function checkAdmin1($userName, $pass)
	{
		$arr = array($userName, $pass);
		$data= $this->query('select username,hoten,quyen from quantri where username=? and matkhau=md5(?)', $arr);
		
		if (Count($data)==0) return array();
		return $data[0];
	}
	function register($email,$password,$ten,$diachi,$sdt)
	{
		$sql ="insert into khachhang(email, matkhau,tenkh,diachi,dienthoai) ";
		$sql .=" values(?,?,?,?,?)";
		$arr = array($email,$password,$ten,$diachi,$sdt);
		return $this->query($sql, $arr);
	}
	public function checkKh($email)
	{
		$sql="select email from khachhang where email=?";
		return $this->query($sql,array($email));
	}
	public function getAccount($email)
	{
		$sql="select * from khachhang where email=?";
		return $this->query($sql,array($email));
	}
	function updateUser($email,$tenkh ,$diachi, $sdt)
	{
		$sql ="update khachhang set tenkh=?, diachi=?, dienthoai=? where email=? ";
		$arr = array($tenkh ,$diachi, $sdt,$email);
		return $this->query($sql, $arr);
	}
	function updateMK($email,$mk)
	{
		$sql ="update khachhang set matkhau=? where email=? ";
		$arr = array($mk,$email);
		return $this->query($sql, $arr);
	}
}
?>