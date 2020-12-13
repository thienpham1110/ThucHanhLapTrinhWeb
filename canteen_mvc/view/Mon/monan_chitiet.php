      <div id="templatemo_content_right">
        	
            <h1><?php echo $mon['tenmon'];?></h1>
            <div class="image_panel"><img src="images/mon/<?php echo $mon['hinh'];?>" alt="CSS Template" width="100" height="150" /></div>
            <ul>
	            <li>Nhà Hàng Phục Vụ: <?php echo $mon['tennhahang'];?></li>
                <li>Loại Món: <?php echo $mon['tenloai'];?></li>
                <li>Giá: <?php echo $mon['gia'];?></li>
            </ul>
            
            <p><?php echo $mon['mota'];?></p>
             <div class="cleaner_with_height">&nbsp;</div> 
             <button class="buy_now_button my-btn" type="button" onclick="chonMua('<?php echo $mon['mamonan']; ?>')"> Mua
        </div>