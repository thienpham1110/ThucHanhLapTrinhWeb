<?php
session_start();
class User
{
	public function login()
	{
		include "model/User_model.php";
		$u=new User_model;
		if($u->checkUser($_POST['email'],$_POST['pass']))
		{
			
			$_SESSION['user']=$_POST['email'];
			echo 1;
		}else if($u->checkAdmin($_POST['email'],$_POST['pass'])){
			$row = $u->checkAdmin1($_POST['email'],$_POST['pass']);
			$_SESSION['admin']=$row;
			echo 2;
		}else
			echo 0;
	}
	public function logout()
	{
		unset($_SESSION['user']);
		echo 1;
	}
	public function logoutad()
	{
		unset($_SESSION['admin']);
		header('location:index.php');
	}

	function isUserLogin() {
		return !empty($_SESSION['user']) ? true : false;
	}

	function isAdminLogin() {
		return !empty($_SESSION['admin']) ? true : false;
	}
	function dangky() {
		include "model/User_model.php";
		include "model/Loai_model.php";
		include "model/Monan_model.php";
		include "model/Nhahang_model.php";
		
		$b=new Loai_model();
		$loais=$b->getAllLoai();
		$b=new Nhahang_model();
		$nhahangs=$b->getAllNhaHang();
		$subview = 'khachhang/register_index.php';
        include "view/view.php";
	}
	function register() {
		include "model/User_model.php";
		include "model/Loai_model.php";
		include "model/Monan_model.php";
		include "model/Nhahang_model.php";

		$b=new User_model();
		$email = isset($_POST['email'])?$_POST['email']:'';
		$ten = isset($_POST['ten'])?$_POST['ten']:'';
		$diachi = isset($_POST['diachi'])?$_POST['diachi']:'';
		$sdt = isset($_POST['sdt'])?$_POST['sdt']:'';
		$pass = isset($_POST['pass'])?$_POST['pass']:'';
		$pass=md5($pass);
		$check=$b->checkKh($email);
		if($email==$check[0]['email']){
			echo "<script>alert('email da ton tai')</script>";
		}	
		else{
			$user=$b->register($email,$pass,$ten,$diachi,$sdt);
			header('location:index.php');				
		}				
		$b=new Loai_model();
		$loais=$b->getAllLoai();
		$b=new Nhahang_model();
		$nhahangs=$b->getAllNhaHang();
		$subview = 'khachhang/register_index.php';
        include "view/view.php";
	}
	function getAccount(){
		include "model/User_model.php";
		
		$email = isset($_SESSION['user'])?$_SESSION['user']:'';
		$b=new User_model();
		$data=$b->getAccount($email);		
		
		$b=new Loai_model();
		$loais=$b->getAllLoai();
		$b=new Nhahang_model();
		$nhahangs=$b->getAllNhaHang();
		$subview = 'khachhang/khachhang_account.php';
        include "view/view.php";
	}
	function updateU(){
		include "model/User_model.php";
		$b=new User_model();
		$email = isset($_SESSION['user'])?$_SESSION['user']:'';
		$tenkh = isset($_POST['tenkh'])?$_POST['tenkh']:'';
		$diachi = isset($_POST['diachi'])?$_POST['diachi']:'';
		$sdt = isset($_POST['dienthoai'])?$_POST['dienthoai']:'';

		$data=$b->updateUser($email,$tenkh,$diachi,$sdt);
		$b=new User_model();
		$data=$b->getAccount($email);
		$b=new Loai_model();
		$loais=$b->getAllLoai();
		$b=new Nhahang_model();
		$nhahangs=$b->getAllNhaHang();
		$subview = 'khachhang/khachhang_account.php';
        include "view/view.php";
	}
	function updateMK(){
		include "model/User_model.php";
		$b=new User_model();
		$email = isset($_SESSION['user'])?$_SESSION['user']:'';
		$mk = isset($_POST['nmk'])?$_POST['nmk']:'';
		$nmk=md5($mk);

		$data=$b->updateMK($email,$nmk);
		$b=new User_model();
		$data=$b->getAccount($email);
		$b=new Loai_model();
		$loais=$b->getAllLoai();
		$b=new Nhahang_model();
		$nhahangs=$b->getAllNhaHang();
		$subview = 'khachhang/khachhang_account.php';
        include "view/view.php";
	}
	function xemhoadonU()
	{
		include "model/Giohang_model.php";
        $b=new giohang_model();
		$email=isset($_GET['email'])?$_GET['email']:"";
		$page=1;
		if(isset($_GET['page']))
			$page=$_GET['page'];
		$start=($page-1)*HOADON_TRANG;		
		$data=$b->getHoadonCT($start,$email);
		$tongtrang=ceil($b->tongsoHD()/HOADON_TRANG);
		$b=new Loai_model();
		$loais=$b->getAllLoai();
		$b=new Nhahang_model();
		$nhahangs=$b->getAllNhaHang();
		$func='xemhoadonU';

		$subview='khachhang/hoadon_user.php';
		include "view/view.php";
	}
	function chitietHDU()
	{
		include "model/Giohang_model.php";
        $b=new giohang_model();
		$data=$b->getChiTietHD($_GET['mahd']);
		$b=new Loai_model();
		$loais=$b->getAllLoai();
		$b=new Nhahang_model();
		$nhahangs=$b->getAllNhaHang();
		$subview='khachhang/chitiethd_user.php';
		include "view/view.php";
	}
	function xoaHD(){
		include "model/Giohang_model.php";
        $b=new giohang_model();
		$email=isset($_GET['email'])?$_GET['email']:"";
		$mahd=isset($_GET['mahd'])?$_GET['mahd']:"";
		$email1 = isset($_SESSION['user'])?$_SESSION['user']:'';
		$delete=$b->xoaHD($mahd);
		$page=1;
		if(isset($_GET['page']))
			$page=$_GET['page'];
		$start=($page-1)*HOADON_TRANG;		
		$data=$b->getHoadonCT($start,$email);
		$tongtrang=ceil($b->tongsoHD()/HOADON_TRANG);
		$b=new Loai_model();
		$loais=$b->getAllLoai();
		$b=new Nhahang_model();
		$nhahangs=$b->getAllNhaHang();
		$func='xoaHD';
		header('location:index.php?ctrl=user&func=xemhoadonU&email='.$email1);
		$subview='khachhang/hoadon_user.php';
		include "view/view.php";
	}
}
?>