<form action="index.php?ctrl=admin_loai&func=updateloai" method="post"  name="myForm" onsubmit="return validateForm()" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Mã Loại Món Ăn</td>
			<td>
				<input type="text" name="maloai" value="<?php echo $data['maloai'] ?>">
			</td>
		</tr>
		<tr>
			<td>Tên Loại Món Ăn</td>
			<td>
				<input type="text" name="tenloai" value="<?php echo $data['tenloai'] ?>">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="update">
			</td>
		</tr>
	</table>
</form>
<script>
function validateForm() {
  var maloai = document.forms["myForm"]["maloai"].value;
  var tenloai = document.forms["myForm"]["tenloai"].value;
  if (maloai != "<?php echo $data['maloai'] ?>") {
    alert("Không thể đổi mã loại !");
    return false;
  }
  if (tenloai == "") {
    alert("Chưa nhập tên loại !");
    return false;
  }
}
</script>