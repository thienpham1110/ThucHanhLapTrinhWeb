<div>
<table>
            <tr>
                <th>STT</th>
               <th>Mã Hóa Đơn</th>
               <th>Email</th>
               <th>Tên Người Nhận</th>
               <th>Địa Chỉ</th>
               <th>Ngày Nhận</th>
               <th>Số Điện Thoại</th>
               <th>Xem Chi Tiết Hóa Đơn</th>
               <th>Xóa Hóa Đơn</th>
            </tr>

          <?php
          foreach($data as $key=>$value){
          ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $value['mahd'] ?></td>
                <td><?php echo $value['email'] ?></td>
                <td><?php echo $value['tennguoinhan'] ?></td>
                <td><?php echo $value['diachinguoinhan'] ?></td>
                <td><?php echo $value['ngaynhan'] ?></td>
                <td><?php echo $value['dienthoainguoinhan'] ?></td>
              <td><a href="<?php echo BASE_URL ?>/index.php?ctrl=user&func=chitietHDU&mahd=<?php echo $value['mahd'] ?>">Chi Tiết Hóa Đơn</a></td>
              <td><a href="<?php echo BASE_URL ?>/index.php?ctrl=user&func=xoaHD&mahd=<?php echo $value['mahd'] ?>">Xóa Hóa Đơn</a></td>
            </tr>
            <?php
          }
          ?>
          </table>
          </div>