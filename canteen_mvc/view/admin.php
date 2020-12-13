<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 <head>

		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

		<title>Admin</title>

		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="<?php echo BASE_URL ?>/admincp/resources/css/reset.css" type="text/css" media="screen" />

		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="<?php echo BASE_URL ?>/admincp/resources/css/style.css" type="text/css" media="screen" />

		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="<?php echo BASE_URL ?>/admincp/resources/css/invalid.css" type="text/css" media="screen" />

		<!-- jQuery -->
		<script type="text/javascript" src="<?php echo BASE_URL ?>/admincp/resources/scripts/jquery-1.3.2.min.js"></script>

		<!-- jQuery Configuration -->
		<script type="text/javascript" src="<?php echo BASE_URL ?>/admincp/resources/scripts/simpla.jquery.configuration.js"></script>

		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="<?php echo BASE_URL ?>/admincp/resources/scripts/facebox.js"></script>

		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="<?php echo BASE_URL ?>/admincp/resources/scripts/jquery.wysiwyg.js"></script>

		<!-- jQuery Datepicker Plugin -->
		
	</head>

	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->

		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

			<h1 id="sidebar-title"><a href="<?php echo BASE_URL ?>/admincp/#">Admin</a></h1>

			<!-- Logo (221px wide) -->
			<a href="<?php echo BASE_URL ?>/admincp/#"><img id="logo" src="<?php echo BASE_URL ?>/admincp/resources/images/logo.png" alt="Simpla Admin logo" /></a>

			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Hello, <a href="<?php echo BASE_URL ?>/admincp/#" title="Edit your profile">
					<?php echo $_SESSION['admin']['hoten'] ?>
				</a>, you have <a href="<?php echo BASE_URL ?>/admin.php#messages" rel="modal" title="3 Messages">3 Messages</a><br />
				<br />
				<a href="<?php echo BASE_URL ?>/" title="View the Site">View the Site</a> | <a href="<?php echo BASE_URL ?>/index.php?ctrl=User&func=logoutad" title="Sign Out">Sign Out</a>
			</div>

			<ul id="main-nav">  <!-- Accordion Menu -->

				<li>
					<a href="<?php echo BASE_URL ?>/index.php?ctrl=admin" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Dashboard
					</a>
				</li>
				
				<li>
					<a href="" class="nav-top-item"> <!-- Add the class "current" to current menu item -->
					Quản Lý Thực Đơn
					</a>
					<ul>
						<li><a href="<?php echo BASE_URL ?>/index.php?ctrl=admin">Món Ăn</a></li>
						<li><a href="<?php echo BASE_URL ?>/index.php?ctrl=admin_loai">Loại Món Ăn</a></li> <!-- Add class "current" to sub menu items also -->
						<li><a href="<?php echo BASE_URL ?>/index.php?ctrl=admin_nhahang">Nhà Hàng</a></li>

					</ul>
				</li>

				<li>
					<a href="<?php echo BASE_URL ?>/admincp/#" class="nav-top-item">
						Quản Lý Đặt Hàng
					</a>
					<ul>
						<li><a href="<?php echo BASE_URL ?>/index.php?ctrl=khachhang&func=gethoadon">Hóa Đơn</a></li>
						<li><a href="<?php echo BASE_URL ?>/index.php?ctrl=khachhang">Khách Hàng</a></li>
					</ul>
				</li>

			</ul> <!-- End #main-nav -->

			<div id="messages" style="display: none">

				<h3>3 Messages</h3>

				<p>
					<strong>17th May 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="<?php echo BASE_URL ?>/admincp/#" class="remove-link" title="Remove message">Remove</a></small>
				</p>

				<p>
					<strong>2nd May 2009</strong> by Jane Doe<br />
					Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
					<small><a href="<?php echo BASE_URL ?>/admincp/#" class="remove-link" title="Remove message">Remove</a></small>
				</p>

				<p>
					<strong>25th April 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="<?php echo BASE_URL ?>/admincp/#" class="remove-link" title="Remove message">Remove</a></small>
				</p>

				<form action="#" method="post">

					<h4>New Message</h4>

					<fieldset>
						<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
					</fieldset>

					<fieldset>

						<select name="dropdown" class="small-input">
							<option value="option1">Send to...</option>
							<option value="option2">Everyone</option>
							<option value="option3">Admin</option>
							<option value="option4">Jane Doe</option>
						</select>

						<input class="button" type="submit" value="Send" />

					</fieldset>

				</form>

			</div> <!-- End #messages -->

		</div></div> <!-- End #sidebar -->

		<div id="main-content"> <!-- Main Content Section with everything -->
			<!-- Page Head -->
			<h2>Chào:<a href="<?php echo BASE_URL ?>/admincp/#" title="Edit your profile">
			
					<?php echo $_SESSION['admin']['hoten'] ?>
				</a></h2>

			<div class="clear"></div> <!-- End .clear -->

			<div class="content-box">
				<?php include "view/admin/$admin_sub_view";?>
				
			</div> <!-- End .content-box -->


			<div class="clear"></div>


			<div id="footer">
				<small> <!-- Remove this notice or replace it with whatever you want -->
						&#169; Copyright 2009 Your Company | Powered by <a href="<?php echo BASE_URL ?>/admincp/http://themeforest.net/item/simpla-admin-flexible-user-friendly-admin-skin/46073">Simpla Admin</a> | <a href="<?php echo BASE_URL ?>/admin.php">Top</a>
				</small>
			</div><!-- End #footer -->

		</div> <!-- End #main-content -->

	</div></body>


<!-- Download From www.exet.tk-->
</html>
