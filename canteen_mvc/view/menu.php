	<ul>
            <li><a href="index.html" class="current">Home</a></li>           
            <li>
            <?php
            if(isset($_SESSION['user']))
            {
                echo "<a href='#'' id='myBtn' onclick='logout()'>Đăng xuất</a></li>";
                echo "<a href='index.php?ctrl=user&func=getAccount' id='myBtn'>Tài Khoản</a></li>";
                echo " CHAO: ",$_SESSION['user'];
            }else
            {
            ?>    
              <a href="#" id="myBtn" onclick="moformlogin()">Đăng nhập</a></li>
              <a id="myBtn" href="index.php?ctrl=user&func=dangky">Đăng Ký</a></li>
            <?php } ?>
            <li><a href="https://github.com/thienpham1110/ThucHanhLapTrinhWeb.git" class="current">Home</a></li> 
        </ul>
        <div id="cartinfo"><?php
        if(isset($_SESSION['cart']))
       // echo count($_SESSION['cart']);      
        ?></div>
        <div id="cart-box">
          <!--  <a href="index.php?mo=cart"><img width="30" class="cart" src="images/cart-lrg.png"  alt="Cart" /></a> -->
          <button class="giohang" id="giohang" onclick="xemgiohang()">
            <?php
              if(isset($_SESSION['gh']))
                echo count($_SESSION['gh']);
            ?>
          </button>
            
        </div>