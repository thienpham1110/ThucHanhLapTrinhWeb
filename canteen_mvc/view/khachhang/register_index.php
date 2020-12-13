<form action="index.php?ctrl=user&func=register" method="post"  name="myForm" onsubmit="return validateForm()" enctype="multipart/form-data">
	<table>
		<tr>
			<td colspan="2">
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>
				<input type="text" name="email">
			</td>
		</tr>
        <tr>
			<td>Tên Đăng Ký</td>
			<td>
				<input type="text" name="ten">
			</td>
		</tr>
        <tr>
			<td>Địa Chỉ</td>
			<td>
				<input type="text" name="diachi">
			</td>
		</tr>
        <tr>
			<td>SĐT</td>
			<td>
				<input type="text" name="sdt">
			</td>
		</tr>
		<tr>
			<td>
				Mật Khẩu
			</td>
			<td>
				<input type="password" name="pass">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="submit">
			</td>

		</tr>
	</table>
</form>
<script>
function validateForm() {
  var email = document.forms["myForm"]["email"].value;
  var tendn = document.forms["myForm"]["ten"].value;
  var diachi = document.forms["myForm"]["diachi"].value;
  var sdt = document.forms["myForm"]["sdt"].value;
  var pass = document.forms["myForm"]["pass"].value;
  if (email == "") {
    alert("Chưa nhập email đăng ký !");
    return false;
  }
  if (tendn == "") {
    alert("Chưa nhập tên !");
    return false;
  }
  if (diachi == "") {
    alert("Chưa nhập địa chỉ");
    return false;
  }
  if (sdt == "") {
    alert("Chưa nhập số điện thoại");
    return false;
  }
  if (pass == "") {
    alert("Chưa nhập password");
    return false;
  }
}
</script>
