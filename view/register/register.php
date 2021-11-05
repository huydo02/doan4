
<br><br><br><br>
<?php 
if(Helper::is_submit('register')){

$email = Helper::input_value('email');
$password = Helper::input_value('password');
$password_confirmation = Helper::input_value('password_confirmation');
$time = time();
$user = userDB::getUserByEmail(Helper::input_value('email'));
if ($password === $password_confirmation) {
    if ($user){
        $alert ='Email đã tồn tại trong hệ thống';
    }else{
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $user = new User();
        $user->setFullname(Helper::input_value('fullname'));
        $user->setPhone(Helper::input_value('phone'));
        $user->setEmail(Helper::input_value('email'));
        $user->setPassword($password_hash);
        $user->setCreated_at($time);
        if(!empty($user) && userDB::addUser($user)){
            echo '<script>alert("Tạo tài khoản thành công")</script>';
            Helper::redirect_js(Helper::get_url('?c=login'));
        }
    }
}else{
    $alert='Mật khẩu nhập lại của bạn không đúng';
}



}

?>  
<div class="account-page">
        <div class="page-header">
            <div class="container">
                <div class="page-header__content">
                    <h1 class="page-header__title text--center">Đăng Ký Tài Khoản</h1>
                </div>
            </div>
        </div>

        <div class="site-content">
            <div class="container">
                <div class="grid grid--aligned-center">
                    <div class="grid__column six-twelfths tablet--eight-twelfths mobile--one-whole">
                        <div class="text--center mgb--20">
                            <i>Nếu đã từng mua hàng trên Website trước đây, bạn có thể dùng tính năng <a href="/account/forgot" class="text--primary"> "Lấy mật khẩu"</a> để có thể truy cập vào tài khoản bằng email nhé.</i>
                        </div>
                                                <div class="checkout__content">
                            <div class="checkout__main">
                                <div class="checkout__information">
                                    <div class="form">
                                        <form method="POST" action="">
                                            <?php if(isset($alert)): ?>
                                        <div class="invalid-feedback text--primary pdt--10" role="alert">
                                <b>Lỗi: </b><span><?php echo $alert; ?></span>
                            </div>
                            <?php endif; ?>
                                            <div class="form__field">
                                                <input type="text" class="form-control" name="fullname" required placeholder="Họ tên" autofocus value="">
                                                                                            </div>
                                            <div class="form__field">
                                                <input type="email" class="form-control" name="email" placeholder="Email của bạn" required value="">

                                                                                            </div>
                                            <div class="form__field">
                                                <input type="text" class="form-control" name="phone" placeholder="Điện thoại" required value="">
                                                                                            </div>
                                            <div class="form__field">
                                                <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" required >
                                                                                            </div>
                                            <div class="form__field">
                                                <input type="password" class="form-control" name="password_confirmation" placeholder="Nhập lại mật khẩu" required >
                                            </div>
                                            <input type="hidden" name="action" value="register" >

                                            <div class="form__group">
                                                <div class="flex justify--center mgt--30">
                                                    <div class="one-half mobile--one-whole">
                                                        <button type="submit" class="btn btn--primary btn--bold btn--upper btn--rounded btn--full">Đăng ký</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="one-half mobile--one-whole" style="margin: 0 auto">
                                                <div class="form__line pdt--10 pdb--10">
                                                    <span>Hoặc</span>
                                                </div>
                                            </div>
                                            <div class="form__group">
                                                <div class="flex justify--center">
                                                    <div class="one-half mobile--one-whole">
                                                        <a href="<?php echo Helper::get_url('/?c=login');?>" class="btn btn--upper btn--rounded btn--outline btn--full">Đăng nhập</a>
                                                    </div>
                                                </div>
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