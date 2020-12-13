<div id="templatemo_content_left">
    <div class="templatemo_content_left_section">
        <h1>Search</h1>
        <form action="index.php?ctrl=monan&func=tim" method="post">
            <input type="search" name="keyword">
            <button name="btnTim" type="submit">Tim</button>
        </form>
    </div>
    <div class="templatemo_content_left_section">
        <h1>Loại Món</h1>
        <ul>
            <?php
        foreach ($loais as $loai) {
          ?>
            <li><a
                    href="index.php?ctrl=monan&func=loai&id=<?php echo $loai['maloai'] ?>"><?php echo $loai['tenloai'] ?></a>
            </li>
            <?php }?>
        </ul>

    </div>
    <div class="templatemo_content_left_section">
        <h1>Nhà Hàng</h1>
        <ul>
            <?php
        foreach ($nhahangs as $nhahang) {
          ?>
            <li><a
                    href="index.php?ctrl=monan&func=nhahang&id=<?php echo $nhahang['manhahang'] ?>"><?php echo $nhahang['tennhahang'] ?></a>
            </li>
            <?php }?>
        </ul>

    </div>
