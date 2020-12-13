<div>
<table>
            <tr>
              <th>Email</th>
              <th>Tên Khách Hàng</th>
              <th>Địa Chỉ</th>
              <th>Điện thoại</th> 
              <th>Xem Hóa Đơn</th>
            </tr>

          <?php
          foreach($data as $kh){
          ?>
            <tr>
              <td><?php echo $kh['email'] ?></td>
              <td><?php echo $kh['tenkh'] ?></td>
              <td><?php echo $kh['diachi'] ?></td>
              <td><?php echo $kh['dienthoai'] ?></td>
              <td><a href="<?php echo BASE_URL ?>/index.php?ctrl=user&func=xemhoadonU&email=<?php echo $kh['email'] ?>">Xem Hóa Đơn</a></td>
            </tr>
            <?php
          }
          ?>
          </table>
      <br>
      <h2>Cập Nhật Tài Khoản</h2>
      <form action="index.php?ctrl=user&func=updateU" method="post"  name="myForm" onsubmit="return validateForm()" enctype="multipart/form-data">
        <input type="hidden" name="ctrl" value="user">
        <input type="hidden" name="func" value="updateU">
      <table>
        <tr>
          <td>Tên</td>
          <td><input type="text" name="tenkh" id="Ten"></td>
        </tr>
        <tr>
          <td>Địa Chỉ</td>
          <td><input type="text" name="diachi" id="DiaChi"></td>
        </tr>
      <tr><td>Số Điện Thoại</td>
          <td><input type="text" name="dienthoai" id="dienthoai"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <button type="submit" name="dat" value="dathang">Cập Nhật</button>
        </td>
      </tr>
      </table>
      </form>
      <br>
      <h2>Đổi Mật Khẩu</h2>
      <form action="index.php?ctrl=user&func=updateMk" method="post"  name="MkForm" onsubmit="return validateMK()" enctype="multipart/form-data">
        <input type="hidden" name="ctrl" value="user">
        <input type="hidden" name="func" value="updateMK">
      <table>
        <tr>
          <td>Mật khẩu cũ</td>
          <td><input type="password" name="mk" id="mk"></td>
        </tr>
        <tr>
          <td>Mật khẩu mới</td>
          <td><input type="password" name="nmk" id="nmk"></td>
        </tr>
      <tr><td>Nhập lại</td>
          <td><input type="password" name="rnmk" id="rnmk"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <button type="submit" name="dat" value="dathang">Lưu</button>
        </td>
      </tr>
      </table>
      </form>
      </div>
      <script>
function validateForm() {
  var tenkh = document.forms["myForm"]["tenkh"].value;
  var diachi = document.forms["myForm"]["diachi"].value;
  var sdt = document.forms["myForm"]["dienthoai"].value;
  if (tenkh == "") {
    alert("Chưa nhập tên !");
    return false;
  }
  if (diachi == "") {
    alert("Chưa nhập địa chỉ !");
    return false;
  }
  if (sdt == "") {
    alert("Chưa nhập số điện thoại !");
    return false;
  }
}
function validateMK() {
  var mk = document.forms["MkForm"]["mk"].value;
  var nmk = document.forms["MkForm"]["nmk"].value;
  var rnmk = document.forms["MkForm"]["rnmk"].value;
  if (mk == "") {
    alert("Chưa nhập mật khẩu cũ !");
    return false;
  }
  if (nmk == "") {
    alert("Chưa nhập mật khẩu mới !");
    return false;
  }
  if (rnmk == "") {
    alert("Chưa nhập lại mật khẩu mới !");
    return false;
  }else if(rnmk !=nmk)
  {
    alert("Mật khẩu nhập lại phải giống mật khẩu mới !");
    return false;  
  }
}
</script>