<?php
class Loai
{
	function index()
	{
		include_once "view/header.php";
		include_once "view/left.php";
		include "model/Loai_model.php";
		
		$b=new Loai_model();
		$data=$b->getAllLoai();
		include "view/loai.php";
		//include_once "view/right.php";
		include_once "view/footer.php";
	}
	function add()
	{
		include_once "view/header.php";
		include_once "view/left.php";
		include "model/Loai_model.php";
		$b=new Loai_model();
		$re=$b->add($_POST['txtId'],$_POST['txtName']);
		if($re>0)
			echo "Them thanh cong";
		else
			echo "Them khong thanh cong";
		$data=$b->getAllLoai();
		include "view/loai.php";
		include_once "view/right.php";
		include_once "view/footer.php";
	}
	function update()
	{
		include_once "view/header.php";
		include_once "view/left.php";
		include "model/Loai_model.php";
		$b=new Loai_model();
		$re=$b->update($_POST['txtId'],$_POST['txtName']);
		
		if($re>0)
			echo "Sua thanh cong";
		else
			echo "Sua khong thanh cong";
		$data=$b->getAllLoai();
		include "view/loai.php";
		include_once "view/right.php";
		include_once "view/footer.php";
	}
	function delete()
	{
		
		require "view/header.php";
		
		include_once "view/left.php";
		include "model/Loai_model.php";
		$b=new Loai_model();
		$re=$b->delete($_GET['id']);
		if($re>0)
		{
			echo "Xoa thanh cong";
		}
			
		else
			echo "Xoa khong thanh cong";
		
		include_once "view/footer.php";
	}
}
?>