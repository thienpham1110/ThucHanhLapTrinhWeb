<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đặt Món Ăn Online</title>
    <meta name="description" content="fly to jquery plugin">
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
    <link href="css/modal.css" rel="stylesheet" type="text/css" />
    <script>
    function logout() {
        console.log("Dang xuat");
        if(confirm("ban co muon dang xuat") === true){  
        $.ajax({
            type: "GET",
            url: "index.php?ctrl=user&func=logout",
            success: function(kq) {
                if (kq == 1) {
                    alert("Dang xuat thanh cong");
                    location.href = "index.php";
                }
            }
        });
    }else{
        return false;
   }

    }

    function moformlogin() {
        $("#myModal").css("display", "block");     
    }

    function login() {

        var re = $.ajax({
            type: "POST",
            url: "index.php?ctrl=user&func=login",
            data: {
                "email": $("#txtEmail").val(),
                "pass": $("#txtPass").val()
            },
            dataType: "text",
            success: function(kq) {
                console.log(kq);
                if (kq == 0)
                    alert("Đăng nhập không thành công");
                else if(kq==1){
                    alert("Đăng nhập thành công");
                    document.getElementById('myModal').style.display = "none";
                    $("#myBtn").html("Đăng xuất");
                    $("#myBtn").unbind("click");
                    $("#myBtn").bind("click", logout);
                    location.href = "index.php";
                }
                else if(kq==2){
                    alert("Đăng nhập thành công");
                    location.href = "index.php?ctrl=admin";
                }

            }
        });
        re.error(function() {
            alert("Có lỗi trong đăng nhập");
        });
    }
    function chonMua(mamonan) {
        console.log(mamonan);
        if(confirm("them vao gio hang") === true){
        $.ajax({
            type: "GET",
            url: "index.php?ctrl=giohang&func=them&ms=" + mamonan,
            success: function(kq) {
                $("#giohang").html(kq);
            }

        });
    }else{
        return false;
   }
    }
    function xoa(mamonan) {
        console.log(mamonan);
        $.ajax({
            type: "GET",
            url: "index.php?ctrl=giohang&func=xoa&ms=" + mamonan,
            success: function(kq) {
                $("#giohang").html(kq);
            }

        });
    }
    function xemgiohang() {
        console.log("Chuyen trang gio hang");
        location.href = "index.php?ctrl=giohang";
    }
    </script>
</head>

<body>
    <div id="templatemo_container">
        <div id="templatemo_menu">
            <?php include 'menu.php';?>
        </div> 
        <!-- end of menu -->

        <div id="templatemo_header">

        </div> 
        <!-- end of header -->

        <div id="templatemo_content">
        <?php include "left.php"; ?>
        </div>
        <!-- end of content left -->

        <div id="templatemo_content_right">
            <?php include "$subview";?>
        </div>
        <!-- end of content right -->
   
    <!-- end of content -->

    <div id="templatemo_footer">

        <a href="subpage.html">Home</a> | <a href="subpage.html">Search</a> | <a href="subpage.html">Books</a> | <a
            href="#">New Releases</a> | <a href="#">FAQs</a> | <a href="#">Contact Us</a><br />
        Copyright © 2024 <a href="#"><strong>Your Company Name</strong></a>
        <!-- Credit: www.templatemo.com -->
    </div>
    <!-- end of footer -->
   </div> <!-- end of container -->

    <!-- Trigger/Open The Modal -->


    <!-- The Modal -->
    <?php include "login_index.php"; ?>
    
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/flyto.js"></script>
    <script>
    $('#templatemo_content_right').flyto({
        item: '.templatemo_product_box',
        target: '.cart',
        button: '.my-btn'
    });
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    function momodal() {
        modal.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
</body>

</html>