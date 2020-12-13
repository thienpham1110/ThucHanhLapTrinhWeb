
<form action="index.php?ctrl=admin&func=addMon" method="post" name="myForm" onsubmit="return validateForm()" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Mã Món Ăn</td>
			<td>
				<input type="text" name="mamonan" value="">
			</td>
		</tr>
		<tr>
			<td>Tên Món Ăn</td>
			<td>
				<input type="text" name="tenmon" value="">
			</td>
		</tr>
		<tr>
			<td>Mô Tả Món Ăn</td>
			<td>
				<textarea name="mota">
				</textarea>
			</td>
		</tr>
		<tr>
			<td>Giá</td>
			<td>
				<input type="text" name="gia" value="">
			</td>
		</tr>
		<tr>
			<td>Loại Món Ăn</td>
			<td>
				<select name="maloai">

					<?php
                foreach ($loais as $key => $value) {
                    ?>
                        <option value="<?php echo $value['maloai'] ?>"><?php echo $value['tenloai'] ?></option>
                    <?php
                }
                ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nhà Hàng Phục Vụ</td>
			<td>
				<select name="manhahang">

					<?php
foreach ($nhahangs as $key => $value) {
	?>
					<option value="<?php echo $value['manhahang'] ?>"><?php echo $value['tennhahang'] ?></option>
					<?php
}
?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="file" name="hinh">
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
  var mamon = document.forms["myForm"]["mamonan"].value;
  var tenmon = document.forms["myForm"]["tenmon"].value;
  var gia = document.forms["myForm"]["gia"].value;
  var hinh = document.forms["myForm"]["hinh"].value;
  if (mamon == "") {
    alert("Mã không được để trống !");
    return false;
  }
  if (tenmon == "") {
    alert("Chưa nhập tên món !");
    return false;
  }
  if (gia == "") {
    alert("Chưa nhập giá !");
    return false;
  }
  if (hinh == "") {
    alert("Chưa chọn hình !");
    return false;
  }
}
</script>