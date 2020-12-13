<?php
class Index
{
	function index()
	{	
		$mess="Hello world!";
		include "view/index.php";
			
	}
	function dsNhaHang()
	{
		include "model/Nhahang_model.php";
		$p=new Nhahang_model();
		$mess= $p->getDanhSachNhaHang();
		include "view/index.php";
	}
	function mon()
	{
        include "model/Loai_model.php";
        include "model/Nhahang_model.php";
        include "model/Monan_model.php";
        //$data=array();
        $b=new Monan_model();
        $sachs=$b->getAllSach();
        print_r($sachs);exit();
        $b=new Loai_model();
        $cat_list=$b->getDanhSachLoai();
        $b=new Nhahang_model();
        $pub_list=$b->getDanhSachNhaHang();
		include_once "view/header.php";
		include_once "view/left.php";


		include "view/mon.php";
		include_once "view/footer.php";
		

	}
}
?>