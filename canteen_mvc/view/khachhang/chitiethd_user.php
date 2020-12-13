<div>
    <table>
        <tr>
            <th>STT</th>
            <th>Mã Hóa Đơn</th>
            <th>Mã Món Ăn</th>
            <th>Số Lượng</th>
            <th>Giá</th>
        </tr>

        <?php
     foreach ($data as $key => $value) {
        ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $value['mahd'] ?></td>
            <td><?php echo $value['mamonan'] ?></td>
            <td><?php echo $value['soluong'] ?></td>
            <td><?php echo $value['gia'] ?></td>
        </tr>
        <?php
        }
        ?>
        
    </table>
    <a href="index.php?ctrl=user&func=getAccount">Quay Về</a>
</div>