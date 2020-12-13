<?php
session_start();
class khachhang
{
	function index()
	{
		include "model/Giohang_model.php";
        $b=new giohang_model();
		$data=$b->getAllKH();
		$admin_sub_view='../khachhang/khachhang_index.php';
		include "view/admin.php";
    }
    function xemhoadon()
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
		$func='xemhoadon';
		$admin_sub_view='../khachhang/hoadon_index.php';
		include "view/admin.php";
    }
    function chitietHD()
	{
		include "model/Giohang_model.php";
        $b=new giohang_model();
		$data=$b->getChiTietHD($_GET['mahd']);
		$admin_sub_view='../khachhang/chitiethd_index.php';
		include "view/admin.php";
    }
    function gethoadon(){
        include "model/Giohang_model.php";
		$b=new giohang_model();
		$email=isset($_GET['email'])?$_GET['email']:"";
		$page=1;
		if(isset($_GET['page']))
			$page=$_GET['page'];
		$start=($page-1)*HOADON_TRANG;
		
		$data=$b->get1Page($start);
		$tongtrang=ceil($b->tongsoHD()/HOADON_TRANG);
		$func='gethoadon';
		$admin_sub_view='../khachhang/hoadon_index.php';
		include "view/admin.php";
    }
}