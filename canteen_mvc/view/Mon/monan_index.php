<?php
            $para=array();
            $trang=1;
            if(isset($_GET['page']))
                $trang=$_GET['page'];
                foreach ($mons as $mon) {
              ?>
<div class="templatemo_product_box">
    <h1><?php echo $mon['tenmon'];?></h1>
    <img src="images/mon/<?php echo $mon['hinh'];?>" alt="image" />
    <div class="product_info">
        <p><?php echo substr($mon['mota'],0,50);?> </p>
        <h3><?php echo $mon['gia'];?></h3>
        <button class="buy_now_button my-btn" type="button" onclick="chonMua('<?php echo $mon['mamonan']; ?>')"> Mua
        </button>
        <div class="detail_button"><a href="index.php?ctrl=monan&func=chitiet&id=<?php echo $mon['mamonan']; ?>">Chi Tiết</a></div>
    </div>
</div>
<?php
              }
              ?>
<div>
    <h1>Trang:
        <?php
              if(isset($_GET['id']))
                for($i=1;$i<=$tongtrang;$i++)
                    echo '<a href="index.php?ctrl=monan&func='.$func.'&id='.$_GET['id'].'&page='.$i.'"> '.$i.' </a> ';
              else {
                for($i=1;$i<=$tongtrang;$i++)
                    echo '<a href="index.php?ctrl=monan&page='.$i.'"> '.$i.' </a> ';
                }
              ?>
    </h1>
</div>