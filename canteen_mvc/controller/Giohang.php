<?php
session_start();
class Giohang
{

	public function index()
	{
		include "model/Loai_model.php";
		include "model/Monan_model.php";
		include "model/Nhahang_model.php";
		$b=new Nhahang_model();
		$nhahangs=$b->getAllNhaHang();
		$l=new Loai_model;
		$loais=$l->getAllLoai();
		$ids=array();
		if(!isset($_SESSION['gh']))
			$ms="chua chon mon nao";
		else{
			foreach($_SESSION['gh'] as $ms=>$sl)
				$ids[]=$ms;
		}
		$email1=isset($_SESSION['user'])?$_SESSION['user']:'';
		$b= new User_model();
		$email2=$b->checkKh($email1);
		$e = isset($email2[0]['email'])?$email2[0]['email']:'';
		$s=new Mon_model;
		$mons=$s->thongTin($ids);
		$_SESSION['gh2']=$mons;
		$subview = 'giohang/giohang_index.php';
		include ("view/view.php");
	}
	public function them()
	{
		if(isset($_SESSION['gh']))
		{
			$flag=false;
			foreach ($_SESSION['gh'] as $ms => $sl) {
				if($ms==$_GET['ms'])
				{	
					$_SESSION['gh'][$ms]+=1;
					$flag=true;
					break;
				}
			}
			if($flag==false)
			$_SESSION['gh'][$_GET['ms']]=1;
		}else
			$_SESSION['gh']=array($_GET['ms']=>1);
		echo count($_SESSION['gh']);
	}
	public function xoa(){
		if(isset($_SESSION['gh']))
		{
			$flag=false;
			foreach ($_SESSION['gh'] as $ms => $sl) {
				if($ms==$_GET['ms'])
				{	
					unset($_SESSION['gh'][$_GET['ms']]);
					$flag=true;
					break;
				}
			}		
		header('location:index.php?ctrl=giohang');
		}
	}
	public function dathang()
	{
		include "model/Giohang_model.php";
		include "model/User_model.php";
		include "model/Loai_model.php";
		include "model/Monan_model.php";
		include "model/Nhahang_model.php";

		// var_dump($_SESSION['gh2']);//ds mon trong gio hang
		// var_dump($_SESSION['gh2'][0]['mamonan']);//ma tung mon
		// var_dump($_SESSION['gh'][$_SESSION['gh2'][0]['mamonan']]);//so luong theo ma
		// var_dump($_SESSION['gh2'][0]['gia']);//gia tung mon
		$chitietmon=$_SESSION['gh2'];
		$dsmon=isset($chitietmon)?$_SESSION['gh2']:'';
		$ten = isset($_POST['tenkh'])?$_POST['tenkh']:'';
		$diachi = isset($_POST['diachi'])?$_POST['diachi']:'';
		$email = isset($_POST['email'])?$_POST['email']:'';
		$dienthoai = isset($_POST['dienthoai'])?$_POST['dienthoai']:'';		
		$mahd=isset($_SESSION['user'])?$_SESSION['user'].'_'.time():'';	

		$email1=isset($_SESSION['user'])?$_SESSION['user']:'';
		$ngaynhan=date("Y-m-d");
		$b= new User_model();

		$email2=$b->checkKh($email1);
		$e = isset($email2[0]['email'])?$email2[0]['email']:'';	

		$gh = new giohang_model();
		$data=$gh->dathang($mahd,$email,$ten,$diachi,$ngaynhan,$dienthoai);
		$cht=new giohang_model();
		for($i=0;$i<count($chitietmon);$i++){
			$matungmon=isset($chitietmon[$i]['mamonan'])?$chitietmon[$i]['mamonan']:'';
			$soluong=isset($_SESSION['gh'][$chitietmon[$i]['mamonan']])?$_SESSION['gh'][$chitietmon[$i]['mamonan']]:'';
			$tonggia=isset($chitietmon[$i]['gia'])?$chitietmon[$i]['gia']:'';			
			$chitiet=$cht->chitietDatHang($mahd,$matungmon,$soluong,$tonggia);			
		}
		unset($_SESSION['gh']);
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
}
?>