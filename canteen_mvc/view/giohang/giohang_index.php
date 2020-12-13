<div>
<table>
            <tr>
              <th>STT</th>
              <th>Mã Món Ăn</th>
              <th>Tên Món Ăn</th>
              <th>Hình</th>
              <th>Số Lượng</th>
              <th>Giá Bán</th>  
              <th>Xóa Sản Phẩm</th>
            </tr>

          <?php
          if(!isset($_SESSION['gh']))
              echo "<h3>$ms</h3>";
          $stt=0;
          foreach($mons as $mon){
            $stt++;
          ?>
            <tr>
              <td><?php echo $stt;?></td>
              <td><?php echo $mon['mamonan'] ?></td>
              <td><?php echo $mon['tenmon'] ?></td>
              <td><img src="images/mon/<?php echo $mon['hinh'] ?>" width="50"></td>
              <td><?php echo $_SESSION['gh'][$mon['mamonan']] ?></td>
              <td><?php echo $mon['gia'] ?></td>
              <td><a href="<?php echo BASE_URL ?>/index.php?ctrl=giohang&func=xoa&ms=<?php echo $mon['mamonan'] ?>">Xóa</a></td>
            </tr>
            <?php
          }
          ?>
          </table>
      <br>
      <h2>THÔNG TIN GIAO HÀNG</h2>
      <form action="index.php?ctrl=giohang&func=dathang" method="post"  name="myForm" onsubmit="return validateForm()" enctype="multipart/form-data">
        <input type="hidden" name="ctrl" value="giohang">
        <input type="hidden" name="func" value="dathang">
      <table>
        <tr>
          <td>Tên Người Nhận</td>
          <td><input type="text" name="tenkh" id="Ten"></td>
        </tr>
        <tr>
          <td>Địa Chỉ Người Nhận</td>
          <td><input type="text" name="diachi" id="DiaChi"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="email" id="email" value=""></td>
        </tr>
      <tr><td>Số Điện Thoại</td>
          <td><input type="text" name="dienthoai" id="dienthoai"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <button type="submit" name="dat" value="dathang">Đặt Hàng</button>
        </td>
      </tr>
      </table>
      </form>
      </div>
<script>
function validateForm() {
  var tenkh = document.forms["myForm"]["tenkh"].value;
  var diachi = document.forms["myForm"]["diachi"].value;
  var email = document.forms["myForm"]["email"].value;
  var dienthoai = document.forms["myForm"]["dienthoai"].value;
  if (tenkh == "") {
    alert("Chưa nhập tên !");
    return false;
  }
  if (diachi == "") {
    alert("Chưa nhập địa chỉ !");
    return false;
  }
  if (email == "") {
    alert("Chưa nhập email !");
    return false;
  }
  if(email != "<?php echo $e;?>") {
    alert("Phải nhập email đăng ký tài khoản để mua hàng !");
    return false;
  }
  if (dienthoai == "") {
    alert("Chưa nhạp số điện thoại");
    return false;
  }
}
</script>