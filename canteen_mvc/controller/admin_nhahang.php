<?php
session_start();
class Admin_nhahang
{
	function index()
	{
		include "model/Nhahang_model.php";

        $b=new Nhahang_model();
		$data=$b->getAllNhaHang();
		$admin_sub_view='../nha_hang/nhahang_index.php';
		include "view/admin.php";
	}
	function deletenhahang()
	{
		include "model/Nhahang_model.php";
	
		$b=new Nhahang_model();
		$manhahang = isset($_GET['manhahang'])?$_GET['manhahang']:'';		
					
		$delete=$b->deletenhahang($manhahang);
		$b=new Nhahang_model();
		$data=$b->getAllNhaHang();
		$admin_sub_view='../nha_hang/nhahang_index.php';
		include "view/admin.php";
	}

	function edit()
	{
		include "model/Nhahang_model.php";

        $b=new Nhahang_model();
		$data=$b->getMaNhahang($_GET['manhahang']);
		$admin_sub_view='../nha_hang/nhahang_edit.php';
		include "view/admin.php";
	}

	function updatenhahang()
	{
		include "model/Nhahang_model.php";
		$b=new Nhahang_model();
		$ma = isset($_POST['manhahang'])?$_POST['manhahang']:'';
		$ten = isset($_POST['tennhahang'])?$_POST['tennhahang']:'';		
        
        $updateloai = $b->updatenhahang($ma,$ten);
		$b=new Nhahang_model();
		$data = $b->getAllNhaHang();		
		$admin_sub_view='../nha_hang/nhahang_index.php';
		include "view/admin.php";
	}
	function addNhahang(){
		include "model/Nhahang_model.php";

		$b=new Nhahang_model();
		$ma = isset($_POST['manhahang'])?$_POST['manhahang']:'';
		$ten = isset($_POST['tennhahang'])?$_POST['tennhahang']:'';
		
		$loai=$b->insertnhahang($ma,$ten);
		$b=new Nhahang_model();
		$data=$b->getAllNhaHang();
		$admin_sub_view='../nha_hang/nhahang_index.php';
		include "view/admin.php";
		
	}
}