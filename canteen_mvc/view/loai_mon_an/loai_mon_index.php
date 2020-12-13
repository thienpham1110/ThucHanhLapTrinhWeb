<!-- Start Content Box -->

<div class="content-box-header">

<h3>Quản Lý Loại Món Ăn</h3>

<ul class="content-box-tabs">
    <li><a href="#tab1" class="default-tab">Danh Mục Loại Món Ăn</a></li> <!-- href must be unique and match the id of target div -->
    <li><a href="#tab2">Thêm Loai mới</a></li>
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
               <th>Mã Loại</th>
               <th>Tên Loại</th>
               
            </tr>

        </thead>
        <tbody>
            <?php
foreach ($data as $key => $value) {
?>
            <tr>
                <td><input type="checkbox" /></td>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $value['maloai'] ?></td>
                <td><?php echo $value['tenloai'] ?></td>
                <td>
                    <!-- Icons -->
                     <a href="<?php echo BASE_URL ?>/index.php?ctrl=admin_loai&func=edit&maloai=<?php echo $value['maloai'] ?>" title="Edit Meta">
                         <img src="<?php echo BASE_URL ?>/admincp/resources/images/icons/pencil.png" alt="Edit" />
                     </a>
                     <a href="#" title="Delete" onClick="Deleteloai('<?php echo $value['maloai'] ?>'); ">
                         <img src="<?php echo BASE_URL ?>/admincp/resources/images/icons/cross.png" alt="Delete" />
                     </a>
                </td>
            </tr>
        <?php
}
?>
        </tbody>

    </table>

</div> <!-- End #tab1 -->

<div class="tab-content" id="tab2">
<?php include "loai_mon_add.php"; ?>

</div> <!-- End #tab2 -->

</div> <!-- End .content-box-content -->

<script type="text/javascript">
function Deleteloai(id)
{
if (confirm("Ban chac chan muon xoa?"))
{
window.location='<?php echo BASE_URL ?>/index.php?ctrl=admin_loai&func=deleteloai&maloai='+id;
}
else return false;
}
</script>