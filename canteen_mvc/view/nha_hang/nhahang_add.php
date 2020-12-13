
<form action="index.php?ctrl=admin_nhahang&func=addNhahang" method="post"  name="myForm" onsubmit="return validateForm()" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Mã Nhà Hàng</td>
			<td>
				<input type="text" name="manhahang" value="">
			</td>
		</tr>
		<tr>
			<td>Tên Nhà Hàng</td>
			<td>
				<input type="text" name="tennhahang" value="">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="add" value="Them">
			</td>
		</tr>
	</table>
</form>
<script>
function validateForm() {
  var manhahang = document.forms["myForm"]["manhahang"].value;
  var tennhahang = document.forms["myForm"]["tennhahang"].value;
  if (manhahang == "") {
    alert("Mã không được để trống !");
    return false;
  }
  if (tennhahang == "") {
    alert("Chưa nhập tên nhà hàng !");
    return false;
  }
}
</script>