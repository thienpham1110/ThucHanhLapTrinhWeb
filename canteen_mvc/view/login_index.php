<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
    <div class="modal-header">
        <span class="close">&times;</span>
        <h2>Đăng nhập</h2>
    </div>
    <div class="modal-body">
        <form action="" method="post">
        <?php
if (isset($_SESSION['flash'])) {
	echo $_SESSION['flash'];
} else {
	'Nhập thông tin đăng nhập';
}

unset($_SESSION['flash']);
?>
            <div class="md-form mb-5" style="margin: 5px 0px;">
                <input type="email" id="txtEmail" class="form-control validate" placeholder="Email:"
                    style="width: 100%;font-size: 20px;">
                <label data-error="wrong" data-success="right" for="txtEmail">Your email</label>
            </div>

            <div class="md-form mb-5" style="margin: 5px 0px;">
                <input type="password" id="txtPass" class="form-control validate" placeholder="Password:"
                    style="width: 100%;font-size: 20px">
                <label data-error="wrong" data-success="right" for="txtPass">Your password</label>
            </div>
          
            <div class="modal-footer d-flex justify-content-center" style="padding:10px 0px;text-align:center">
                <button type="button" class="btn btn-default" style="font-size: 20px;" onclick="login()">Login</button>
            </div>
      </form>
    </div>
</div>