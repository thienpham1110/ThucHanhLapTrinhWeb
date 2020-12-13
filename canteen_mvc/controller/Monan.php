<?php
class Monan
{
	function index()
	{
		include "model/Loai_model.php";
		include "model/Monan_model.php";
		include "model/Nhahang_model.php";
		
		$b=new Mon_model();
		$page=1;
		if(isset($_GET['page']))
			$page=$_GET['page'];
		$start=($page-1)*MON_TRANG;
		$mons=$b->get1Page($start);
		$tongtrang=ceil($b->tongsomon()/MON_TRANG);
		$b=new Loai_model();
		$loais=$b->getAllLoai();
		$b=new Nhahang_model();
        $nhahangs=$b->getAllNhaHang();
		$subview = 'Mon/monan_index.php';
		include ("view/view.php");
	}
    function loai()
    {
		include "model/Loai_model.php";
		include "model/Monan_model.php";
		include "model/Nhahang_model.php";

        $b=new Loai_model();
		$loais=$b->getAllLoai();
		$b=new Nhahang_model();
		$nhahangs=$b->getAllNhaHang();
        $b=new Mon_model();
		$page=1;
		if(isset($_GET['page']))
			$page=$_GET['page'];
		$mons=$b->getMon1Loai($_GET['id'],$page);
		$func="loai";
		$tongtrang=ceil($b->tongMon1Loai($_GET['id'])/MON_TRANG);
		$subview = 'Mon/monan_index.php';
        include "view/view.php";
	}
	function nhahang()
    {
		include "model/Nhahang_model.php";
		include "model/Monan_model.php";
		include "model/Loai_model.php";

        $b=new Nhahang_model();
		$nhahangs=$b->getAllNhaHang();
		$b=new Loai_model();
        $loais=$b->getAllLoai();
        $b=new Mon_model();
		$page=1;
		if(isset($_GET['page']))
			$page=$_GET['page'];
		$mons=$b->getMon1nhahang($_GET['id'],$page);
		$func="nhahang";
		$tongtrang=ceil($b->tongMon1Nhahang($_GET['id'])/MON_TRANG);
		$subview = 'Mon/monan_index.php';
        include "view/view.php";
    }
	function chitiet()
	{
		include "model/Loai_model.php";
		include "model/Monan_model.php";
		include "model/Nhahang_model.php";

        $b=new Loai_model();
        $loais=$b->getAllLoai();
		$b=new Nhahang_model();
		$nhahangs=$b->getAllNhaHang();
        $b=new Mon_model();
        $mon=$b->getDetail($_GET['id']);
        $subview = 'Mon/monan_chitiet.php';
        include "view/view.php";
	}
	function tim(){
		include "model/Loai_model.php";
		include "model/Monan_model.php";
		include "model/Nhahang_model.php";

		$keyword = isset($_POST['keyword'])?$_POST['keyword']:'';
		$b=new Loai_model();
		$loais=$b->getAllLoai();
		$b=new Nhahang_model();
		$nhahangs=$b->getAllNhaHang();
		$_SESSION['kw']=$keyword;
		if(isset($_GET['keyword'])){
			$keyword=$_GET['keyword'];
			$_SESSION['kw']=$_GET['keyword'];
		}	
		$b=new Mon_model();	
		$page=1;
		if(isset($_GET['page']))
			$page=$_GET['page'];
		$mons=$b->search($keyword,$page);
		$func="tim";
		$tongtrang=ceil($b->tongMonTim($keyword	)/MON_TRANG);
        $subview = 'Mon/monan_tim.php';
        include "view/view.php";
	}
}
?>