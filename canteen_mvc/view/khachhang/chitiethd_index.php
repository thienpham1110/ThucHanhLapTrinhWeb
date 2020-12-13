<!-- Start Content Box -->

<div class="content-box-header">

<h3>Chi Tiết Hóa Đơn</h3>

<ul class="content-box-tabs">
    <li><a href="#tab1" class="default-tab">Chi Tiết Hóa Đơn</a></li> <!-- href must be unique and match the id of target div -->
</ul>

<div class="clear"></div>

</div> <!-- End .content-box-header -->

<div class="content-box-content">

<div class="tab-content default-tab" id="tab1">
    <table id="tbl_book">

        <thead>
            <tr>
               <th><input class="check-all" type="checkbox" /></th>
               <th>STT</th>
               <th>Mã Hóa Đơn</th>
               <th>Mã Món Ăn</th>
               <th>Số Lượng</th>
               <th>Giá</th>
            </tr>

        </thead>
        <tbody>
            <?php
foreach ($data as $key => $value) {
?>
            <tr>
                <td><input type="checkbox" /></td>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $value['mahd'] ?></td>
                <td><?php echo $value['mamonan'] ?></td>
                <td><?php echo $value['soluong'] ?></td>
                <td><?php echo $value['gia'] ?></td>
            </tr>
        <?php
}
?>
        </tbody>

    </table>

</div> <!-- End #tab1 -->
 <!-- End #tab2 -->

</div> <!-- End .content-box-content -->

<script type="text/javascript">
function Deletekh(id)
{
if (confirm("Ban chac chan muon xoa?"))
{
window.location='<?php echo BASE_URL ?>/index.php?ctrl=admin&func=deletekhachhang&email='+id;
}
else return false;
}
</script>