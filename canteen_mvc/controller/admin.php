<?php
session_start();
class Admin
{
	function __construct()
	{
		if (!isset($_SESSION['admin']))
		{
			$_SESSION['user']="Khong duoc phep truy cap...";
			echo "Không được phép truy cập! ";
			echo "<a href=login.html>Đăng nhập</a>";
			exit;
		}
	}

	function index()
	{
		include "model/Loai_model.php";
		include "model/Monan_model.php";;
		include "model/Nhahang_model.php";

        $b=new Mon_model();
		$page=1;
		if(isset($_GET['page']))
			$page=$_GET['page'];
		$start=($page-1)*MON_TRANG;
		$data=$b->get1Page($start);
		$tongtrang=ceil($b->tongsomon()/MON_TRANG);
		$b=new Loai_model();
		$loais=$b->getAllLoai();
		$b=new Nhahang_model();
        $nhahangs=$b->getAllNhaHang();
		$admin_sub_view='admin_index.php';
		include "view/admin.php";
	}
	function deletemon()
	{
		include "model/Loai_model.php";
		include "model/Monan_model.php";
		include "model/Nhahang_model.php";
		$b=new Mon_model();
		$mamon = isset($_GET['mamonan'])?$_GET['mamonan']:'';	
		$hinh = isset($_FILES['hinh']['name'])?$_FILES['hinh']['name']:'';	
		$row = $b->getDetail($mamon);
		unlink( 'images/mon/' . $row['hinh']);
		echo "Delete thành công <br/>";			
		$delete=$b->delete($mamon);
		$page=1;
		if(isset($_GET['page']))
			$page=$_GET['page'];
		$start=($page-1)*MON_TRANG;
		$data=$b->get1Page($start);
		$tongtrang=ceil($b->tongsomon()/MON_TRANG);
		$b=new Loai_model();
		$loais=$b->getAllLoai();
		$b=new Nhahang_model();
        $nhahangs=$b->getAllNhaHang();
		$admin_sub_view='admin_index.php';
		include "view/admin.php";

	}

	function edit()
	{
		include "model/Loai_model.php";
		include "model/Monan_model.php";
		include "model/Nhahang_model.php";

        $b=new Loai_model();
		$loais=$b->getAllLoai();
		$b=new Nhahang_model();
        $nhahangs=$b->getAllNhaHang();
        $b=new Mon_model();
        $mon=$b->getDetail($_GET['mamonan']);
		$admin_sub_view='admin_edit.php';
		include "view/admin.php";
	}

	function updatemon()
	{
		include "model/Loai_model.php";
		include "model/Monan_model.php";
		include "model/Nhahang_model.php";


		$b=new Mon_model();
		$ma = isset($_POST['mamonan'])?$_POST['mamonan']:'';
		$ten = isset($_POST['tenmon'])?$_POST['tenmon']:'';
		$mota = isset($_POST['mota'])?$_POST['mota']:'';
		$gia = isset($_POST['gia'])?$_POST['gia']:'';
		$hinh = isset($_FILES['hinh']['name'])?$_FILES['hinh']['name']:'';
		$mannhahang = isset($_POST['manhahang'])?$_POST['manhahang']:'';
		$maloai = isset($_POST['maloai'])?$_POST['maloai']:'';

		if ($_FILES['hinh']['error'] == 0){
			$row = $b->getDetail($ma);
			unlink( 'images/mon/'. $row['hinh']);
			$img = $_FILES['hinh']['name'];
			move_uploaded_file($_FILES['hinh']['tmp_name'], 'images/mon/' . $_FILES['hinh']['name']);	
		}
		$updatemon = $b->update($ma,$ten,$mota,$gia,$hinh,$mannhahang,$maloai);
		$page=1;
		if(isset($_GET['page']))
			$page=$_GET['page'];
		$start=($page-1)*MON_TRANG;
		$data=$b->get1Page($start);
		$tongtrang=ceil($b->tongsomon()/MON_TRANG);
		$b=new Loai_model();
		$loais=$b->getAllLoai();
		$b=new Nhahang_model();
        $nhahangs=$b->getAllNhaHang();
		$admin_sub_view='admin_index.php';
		include "view/admin.php";
	}
	function addMon(){
		include "model/Loai_model.php";
		include "model/Monan_model.php";
		include "model/Nhahang_model.php";

		$b=new Mon_model();
		$ma = isset($_POST['mamonan'])?$_POST['mamonan']:'';
		$ten = isset($_POST['tenmon'])?$_POST['tenmon']:'';
		$mota = isset($_POST['mota'])?$_POST['mota']:'';
		$gia = isset($_POST['gia'])?$_POST['gia']:'';
		$hinh = isset($_FILES['hinh']['name'])?$_FILES['hinh']['name']:'';
		$mannhahang = isset($_POST['manhahang'])?$_POST['manhahang']:'';
		$maloai = isset($_POST['maloai'])?$_POST['maloai']:'';
		$mon=$b->insertmon($ma,$ten,$mota,$gia,$hinh,$mannhahang,$maloai);
		if (isset($_POST['add']) && isset($_FILES['hinh'])) {
			if ($_FILES['hinh']['error'] > 0)
				echo "Upload lỗi rồi!";
			else {
				move_uploaded_file($_FILES['hinh']['tmp_name'], 'images/mon/' . $_FILES['hinh']['name']);
				echo "upload thành công <br/>";
			}
		}
		$page=1;
		if(isset($_GET['page']))
			$page=$_GET['page'];
		$start=($page-1)*MON_TRANG;
		$data=$b->get1Page($start);
		$tongtrang=ceil($b->tongsomon()/MON_TRANG);
		$b=new Loai_model();
		$loais=$b->getAllLoai();
		$b=new Nhahang_model();
        $nhahangs=$b->getAllNhaHang();
		$admin_sub_view='admin_index.php';
		include "view/admin.php";
		
	}
}