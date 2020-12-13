<?php
session_start();
class Admin_loai
{
	function index()
	{
		include "model/Loai_model.php";

        $b=new Loai_model();
		$data=$b->getAllLoai();
		$admin_sub_view='../loai_mon_an/loai_mon_index.php';
		include "view/admin.php";
	}
	function deleteloai()
	{
		include "model/Loai_model.php";
	
		$b=new Loai_model();
		$maloai = isset($_GET['maloai'])?$_GET['maloai']:'';		
					
		$delete=$b->deleteloai($maloai);
		$b=new Loai_model();
		$data=$b->getAllLoai();
		$admin_sub_view='../loai_mon_an/loai_mon_index.php';
		include "view/admin.php";
	}

	function edit()
	{
		include "model/Loai_model.php";

        $b=new Loai_model();
		$data=$b->getMaLoai($_GET['maloai']);
		$admin_sub_view='../loai_mon_an/loai_mon_edit.php';
		include "view/admin.php";
	}

	function updateloai()
	{
		include "model/Loai_model.php";
		$b=new Loai_model();
		$ma = isset($_POST['maloai'])?$_POST['maloai']:'';
		$ten = isset($_POST['tenloai'])?$_POST['tenloai']:'';		
        
        $updateloai = $b->updateloai($ma,$ten);
		$b=new Loai_model();
		$data = $b->getAllLoai();		
		$admin_sub_view='../loai_mon_an/loai_mon_index.php';
		include "view/admin.php";
	}
	function addLoai(){
		include "model/Loai_model.php";

		$b=new Loai_model();
		$ma = isset($_POST['maloai'])?$_POST['maloai']:'';
		$ten = isset($_POST['tenloai'])?$_POST['tenloai']:'';
		
		$loai=$b->insertloai($ma,$ten);
		$b=new Loai_model();
		$data=$b->getAllLoai();
		$admin_sub_view='../loai_mon_an/loai_mon_index.php';
		include "view/admin.php";
		
	}
}