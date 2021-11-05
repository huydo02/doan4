
<br><br><br><br>
<?php 


if(Form_Authen::is_admin())
Helper::redirect_js(Helper::get_url('admin/?c=list'));

if(Helper::is_submit('login')){
$user = userDB::getUserByEmail(Helper::input_value('email'));

$password = Helper::input_value('password');
if($user){
    $checkpass = password_verify($password, $user->getPassword());
    if($checkpass){

        Form_Authen::set_logged($user->getId(),$user->getEmail(),$user->getRole(),$user->getFullname(),$user->getAddress());
       

        $refPage = Helper::input_value('refPage');
        if($refPage){
    Helper::redirect_js($refPage);
        }else{
            Helper::redirect_js(Helper::get_url('?c=home'));
        }
    
    }else{
        $alert ='Sai mật khẩu';
    }
}else{
    $alert ='Email không tồn tại';
}

}

?>
<div class="account-page">
        <div class="page-header">
            <div class="container">
                <div class="page-header__content">
                    <h1 class="page-header__title text--center"  onclick="quay_lai_trang_truoc()">Đăng Nhập</h1>
                    <script> function quay_lai_trang_truoc(){
        history.back();
      }</script>
                </div>
            </div>
        </div>
        <?php
        if(isset($alert)): ?>
            <div class="mgt--20 mgb--20 text--center"><span style="color:red"><?php echo $alert; ?></span></div> 
                            <?php endif; ?>
       
                <div class="site-content">
            <div class="container">
                <div class="grid grid--aligned-center">
                    <div class="grid__column six-twelfths tablet--eight-twelfths mobile--one-whole">
                        <div class="checkout__content">
                            <div class="checkout__main">
                                <div class="text--center">
                                    <i>Nếu đã từng mua hàng trên Website trước đây, bạn có thể dùng tính năng <a
                                                href="/account/forgot" class="text--primary"> "Lấy mật khẩu"</a> để có
                                        thể truy cập vào tài khoản bằng email nhé.</i>
                                </div>
                                <div class="checkout__information">
                                    <div class="form">
                                        <form method="POST" action="">
                                            <input type="hidden" name="action" value="login">
                                            <input type="hidden" name="refPage" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">
                                            <div class="form__field">
                                                <input type="text" class="form-control" name="email"
                                                       placeholder="Email/SĐT của bạn" autocomplete="on" required autofocus>
                                            </div>

                                            <div class="form__field">
                                                <input type="password" class="form-control" name="password"
                                                       placeholder="Nhập mật khẩu" required autofocus>
                                            </div>

                                            <div class="form__group" style="margin: 10px 0;">
                                                <div style="display: flex; justify-content: space-between; align-items: center;">
<!--                                                    <div>
                                                        <label class="checkbox&#45;&#45;container"
                                                               onclick="checkSaveSession();">
                                                            <span style="font-style: italic;">Lưu trạng thái đăng nhập 60 ngày</span>
                                                            <input type="checkbox" name="saveSession" value="1">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>-->
                                                    <div>
                                                        <a href="https://www.coolmate.me/account/forgot" class="text--primary">Lấy
                                                            lại mật khẩu</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form__group mgt--20">
                                                <div class="flex justify--center">
                                                    <button type="submit"
                                                            class="btn btn--primary btn--bold  btn--upper btn--rounded btn--full">Đăng nhập</button>
                                                </div>
                                            </div>
                                            <div class="form__line pdt--10">
                                                <span>Hoặc</span>
                                            </div>
                                            <div class="form__group">
                                                <div class="flex justify--center mgt--10">
                                                        <a href="https://www.coolmate.me/facebook/login"
                                                           class="btn btn--primary btn--bold  btn--upper btn--rounded btn--full"
                                                           style="background-color: #3B5998;border: 1px solid #3B5998;">Đăng nhập với facebook
                                                            <span style="display: block;width: 30px;height: 20px;"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
     y="0px"
     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
    <g>
        <path fill="currentColor" d="M448,0H64C28.704,0,0,28.704,0,64v384c0,35.296,28.704,64,64,64h192V336h-64v-80h64v-64c0-53.024,42.976-96,96-96h64v80
			h-32c-17.664,0-32-1.664-32,16v64h80l-32,80h-48v176h96c35.296,0,64-28.704,64-64V64C512,28.704,483.296,0,448,0z"/>
    </g>
</g>
    
</svg>
</span>
                                                        </a>
                                                </div>
                                            </div>
                                            <div class="form__group">
                                                <p class="text--center">Bạn chưa có Tài khoản? Vui lòng đăng ký Tài khoản mới
                                                    <a href="<?php echo Helper::get_url('/?c=register');?>" class="text--primary">tại
                                                        đây</a> .
                                                </p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>