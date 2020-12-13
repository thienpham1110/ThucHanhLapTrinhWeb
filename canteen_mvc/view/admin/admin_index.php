<!-- Start Content Box -->

<div class="content-box-header">

    <h3>Quản Lý Món Ăn</h3>

    <ul class="content-box-tabs">
        <li><a href="#tab1" class="default-tab">Danh Mục Món Ăn</a></li>
        <!-- href must be unique and match the id of target div -->
        <li><a href="#tab2">Thêm Món Mới</a></li>
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
                    <th>Tên Món Ăn</th>
                    <th>Giá </th>
                    <th>Hình</th>
                    <th>Thao Tác</th>
                </tr>

            </thead>
            <tfoot>
                <tr>
                    <td colspan="6">
                        <div class="bulk-actions align-left"></div>
                        <h3>Trang:
                            <?php
                for($i=1;$i<=$tongtrang;$i++)
                    echo '<a href="index.php?ctrl=admin&page='.$i.'"> '.$i.' </a> ';
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
                    <td><?php echo $value['tenmon'] ?></td>
                    <td><?php echo $value['gia'] ?></td>
                    <td>
                        <img class=book src="<?php echo BASE_URL ?>/images/mon/<?php echo $value['hinh'] ?>">
                    </td>
                    <td>
                        <!-- Icons -->
                        <a href="<?php echo BASE_URL ?>/index.php?ctrl=admin&func=edit&mamonan=<?php echo $value['mamonan'] ?>"
                            title="Edit Meta">
                            <img src="<?php echo BASE_URL ?>/admincp/resources/images/icons/pencil.png" alt="Edit" />
                        </a>
                        <a href="#" title="Delete" onClick="Deletemon('<?php echo $value['mamonan'] ?>'); ">
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
        <?php include "admin_add_mon.php"; ?>

    </div> <!-- End #tab2 -->

</div> <!-- End .content-box-content -->

<script type="text/javascript">
function Deletemon(id) {
    if (confirm("Ban chac chan muon xoa?")) {
        window.location = '<?php echo BASE_URL ?>/index.php?ctrl=admin&func=deletemon&mamonan=' + id;
    } else return false;
}
</script>