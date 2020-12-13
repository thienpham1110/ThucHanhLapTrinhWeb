<form action="index.php?ctrl=admin&func=updatemon" method="post"  name="myForm" onsubmit="return validateForm()" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Mã Món Ăn</td>
			<td>
				<input type="text" name="mamonan" value="<?php echo $mon['mamonan'] ?>">
			</td>
		</tr>
		<tr>
			<td>Tên Món Ăn</td>
			<td>
				<input type="text" name="tenmon" value="<?php echo $mon['tenmon'] ?>">
			</td>
		</tr>
		<tr>
			<td>Mô Tả Món Ăn</td>
			<td>
				<textarea name="mota"><?php echo $mon['mota'] ?>
				</textarea>
			</td>
		</tr>
		<tr>
			<td>Giá</td>
			<td>
				<input type="text" name="gia" value="<?php echo $mon['gia'] ?>">
			</td>
		</tr>
		<tr>
			<td>Loại Món Ăn</td>
			<td>
				<select name="maloai">
                <option value="<?php echo $mon['maloai'] ?>"><?php echo $mon['tenloai'] ?></option>

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
                <option value="<?php echo $mon['manhahang'] ?>"><?php echo $mon['tennhahang'] ?></option>

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
			<td>
				<img src="<?php echo BASE_URL ?>/images/mon/<?php echo $mon['hinh'] ?>">
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
  var mamon = document.forms["myForm"]["mamonan"].value;
  var tenmon = document.forms["myForm"]["tenmon"].value;
  var gia = document.forms["myForm"]["gia"].value;
  var hinh = document.forms["myForm"]["hinh"].value;
  if (mamon != "<?php echo $mon['mamonan'] ?>") {
    alert("Không thể đổi mã món ăn !");
    return false;
  }
  if (tenmon == "") {
    alert("Chưa nhập tên món ăn !");
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