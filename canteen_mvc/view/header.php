<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Nhà Hàng</title>
    <script language="javascript" src="public/scripts/ckeditor.js"></script>
    <script language="javascript" src="public/scripts/jquery-1.7.2.min.js"></script>
    <link rel="stylesheet" href="public/styles/main.css" />
</head>

<body>
<div id="container">
    <div id="header">
        <div id="logo"></div>
        <div id="banner"></div>
        <div style="clear:both"></div>
    </div>
    <div id="mid">
        <div id="left">
            <div class="title">Loại Món</div>
            <div id="lmenu">
               <ul class="cat_menu">
<?php
foreach ($loais as $loai) {
	?>
	<li><a href="<?php echo BASE_URL; ?>index.php?ctrl=mon&func=loai&id=<?php echo $loai['maloai'] ?>"><?php echo $loai['tenloai']; ?></a></li>

	<?php
}
?>
</ul>

            </div>
        </div>
        <div id="content">