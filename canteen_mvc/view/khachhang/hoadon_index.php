<!-- Start Content Box -->

<div class="content-box-header">

<h3>Quản Hóa Đơn Khách Hàng</h3>

<ul class="content-box-tabs">
    <li><a href="#tab1" class="default-tab">Danh Mục Hóa Đơn</a></li> <!-- href must be unique and match the id of target div -->
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
               <th>Email</th>
               <th>Tên Người Nhận</th>
               <th>Địa Chỉ</th>
               <th>Ngày Nhận</th>
               <th>Số Điện Thoại</th>
               <th>Xem Chi Tiết Hóa Đơn</th>
            </tr>

        </thead>
        <tfoot>
                <tr>
                    <td colspan="6">
                        <div class="bulk-actions align-left"></div>
                        <h3>Trang:
                            <?php
                for($i=1;$i<=$tongtrang;$i++)
                    echo '<a href="index.php?ctrl=khachhang&func='.$func.'&page='.$i.'&email='.$email.'"> '.$i.' </a> ';
              ?>
                        </h3>
                        <div class="pagination">
                        </div> <!-- End .pagination -->
                        <div class="clear"></div>
                    </td>
                </tr>
            </tfoot>
        <tbody>
            <?php
foreach ($data as $key => $value) {
?>
            <tr>
                <td><input type="checkbox" /></td>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $value['mahd'] ?></td>
                <td><?php echo $value['email'] ?></td>
                <td><?php echo $value['tennguoinhan'] ?></td>
                <td><?php echo $value['diachinguoinhan'] ?></td>
                <td><?php echo $value['ngaynhan'] ?></td>
                <td><?php echo $value['dienthoainguoinhan'] ?></td>
                <td>
                    <!-- Icons -->
                     <a href="<?php echo BASE_URL ?>/index.php?ctrl=khachhang&func=chitietHD&mahd=<?php echo $value['mahd'] ?>" title="Edit Meta">
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