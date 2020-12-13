<!-- Start Content Box -->

<div class="content-box-header">

<h3>Quản Lý Khách Hàng</h3>

<ul class="content-box-tabs">
    <li><a href="#tab1" class="default-tab">Danh Mục Khách Hàng</a></li> <!-- href must be unique and match the id of target div -->
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
               <th>Email</th>
               <th>Tên Khách Hàng</th>
               <th>Địa Chỉ </th>
               <th>SĐT</th>
               <th>Xem Hóa Đơn</th>
            </tr>

        </thead>
        <tbody>
            <?php
foreach ($data as $key => $value) {
?>
            <tr>
                <td><input type="checkbox" /></td>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $value['email'] ?></td>
                <td><?php echo $value['tenkh'] ?></td>
                <td><?php echo $value['diachi'] ?></td>
                <td><?php echo $value['dienthoai'] ?></td>
                <td>
                    <!-- Icons -->
                     <a href="<?php echo BASE_URL ?>/index.php?ctrl=khachhang&func=xemhoadon&email=<?php echo $value['email'] ?>" title="Edit Meta">
                         <img src="<?php echo BASE_URL ?>/admincp/resources/images/icons/pencil.png" alt="Edit" />
                     </a>
                </td>
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