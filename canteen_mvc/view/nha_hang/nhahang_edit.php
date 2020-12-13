<form action="index.php?ctrl=admin_nhahang&func=updatenhahang" method="post"  name="myForm" onsubmit="return validateForm()" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Mã Nhà hàng</td>
			<td>
				<input type="text" name="manhahang" value="<?php echo $data['manhahang'] ?>">
			</td>
		</tr>
		<tr>
			<td>Tên Nhà Hàng</td>
			<td>
				<input type="text" name="tennhahang" value="<?php echo $data['tennhahang'] ?>">
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
  var manhahang = document.forms["myForm"]["manhahang"].value;
  var tennhahang = document.forms["myForm"]["tennhahang"].value;
  if (manhahang != "<?php echo $data['manhahang'] ?>") {
    alert("Không thể thay đổi mã nhà hàng !");
    return false;
  }
  if (tennhahang == "") {
    alert("Chưa nhập tên nhà hàng !");
    return false;
  }
}
</script>