<?php
class Nhaxb
{
	function index()
	{
		include_once "view/header.php";
		include_once "view/left.php";
		
		include "model/Nhahang_model.php";
		
		$b=new Nhahang_model();
		$data=$b->getAllNhaHang();
		
		//include "view/loai.php";
		include "view/Nhahang.php";
		//include_once "view/right.php";
		include_once "view/footer.php";
	}
	function add()
	{
		include_once "view/header.php";
		include_once "view/left.php";
		include "model/Nhahang_model.php";
		$b=new Nhahang_model();
		$re=$b->add($_POST['txtId'],$_POST['txtName']);
		if($re>0)
			echo "Them thanh cong";
		else
			echo "Them khong thanh cong";
		$data=$b->getAllNhaHang();
		
		include "view/Nhahang.php";
		include_once "view/footer.php";
	}
	function update()
	{
		include_once "view/header.php";
		include_once "view/left.php";
		include "model/Nhahang_model.php";
		$b=new Nhaxb_model();
		$re=$b->update($_POST['txtId'],$_POST['txtName']);
		
		if($re>0)
			echo "Sua thanh cong";
		else
			echo "Sua khong thanh cong";
		$data=$b->getAllNhaHang();
		include "view/Nhahang.php";
		include_once "view/right.php";
		include_once "view/footer.php";
	}
	function delete()
	{
		include_once "view/header.php";
		include_once "view/left.php";
		include "model/Nhahang_model.php";
		$b=new Nhaxb_model();
		$re=$b->delete($_GET['id']);
		if($re>0)
			echo "Xoa thanh cong";
		else
			echo "Xoa khong thanh cong";
		$data=$b->getAllNhaHang();
		include "view/Nhahang.php";
		include_once "view/right.php";
		include_once "view/footer.php";
	}
}
?>