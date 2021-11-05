<br><br><br><br><br>
<?php if (!Form_Authen::is_login()) : ?>
<?php Helper::redirect_js(Helper::get_url('?c=login'));?>
<?php endif; ?>
<?php if(Form_Authen::is_login()):?>
<div class="site-content">
        <div class="container">
            <div class="grid grid--stackable">
                <div class="grid__column three-twelfths tablet--four-twelfths">
                    <div class="sidebar">
                        <div class="account-sidebar">
        <div class="account-sidebar__user">
        <div class="account-sidebar__avatar">
            <img class="lazyload" src="https://www.coolmate.me/images/smile.svg" alt="Coolmate avatar">
        </div>
        <span class="text--bold"><?php  echo Form_Authen::get_current_username() ?></span>
    </div>
        <div class="account-sidebar__item">
    <a href="<?php echo Helper::get_url('?c=info')?>"
       class="account-sidebar__menu account-sidebar__menu--active">
        <svg xmlns="http://www.w3.org/2000/svg" width="11.299" height="11.193" viewBox="0 0 11.299 11.193">
            <g id="avatar2" transform="translate(0.001 -1.916)">
                <g id="Group_2514" data-name="Group 2514" transform="translate(-0.001 1.916)">
                    <path id="Path_816" data-name="Path 816"
                          d="M115.376,7.846a2.775,2.775,0,0,0,2.533-2.965c0-2.271-1.134-2.965-2.533-2.965s-2.533.694-2.533,2.965A2.775,2.775,0,0,0,115.376,7.846Z"
                          transform="translate(-109.727 -1.916)"/>
                    <path id="Path_817" data-name="Path 817"
                          d="M11.243,225.636l-1.278-2.879a.641.641,0,0,0-.289-.308l-1.983-1.033a.128.128,0,0,0-.136.011,3.129,3.129,0,0,1-3.815,0,.128.128,0,0,0-.136-.011l-1.983,1.033a.641.641,0,0,0-.289.308L.055,225.636a.639.639,0,0,0,.584.9h10.02a.639.639,0,0,0,.584-.9Z"
                          transform="translate(0.001 -215.342)"/>
                </g>
            </g>
        </svg>
        <span>Thông tin cá nhân</span>
    </a>
    
    
    
    
    
    
    <a href="<?php echo Helper::get_url('?c=orders')?>"
       class="account-sidebar__menu ">
        <svg xmlns="http://www.w3.org/2000/svg" width="11.312" height="12.598" viewBox="0 0 11.312 12.598">
            <g id="Group_2516" data-name="Group 2516" transform="translate(0.1 0.1)">
                <path data-name="Path 818"
                      d="M112.416,200.484a.484.484,0,0,0-.484-.484h-4.988a.484.484,0,1,0,0,.969h4.988A.484.484,0,0,0,112.416,200.484Z"
                      transform="translate(-104.525 -195.157)" fill="currentColor" stroke="#bfbfbf" stroke-width="0.2"/>
                <path data-name="Path 819" d="M106.943,280a.484.484,0,1,0,0,.969h3.029a.484.484,0,0,0,0-.969Z"
                      transform="translate(-104.525 -273.22)" fill="currentColor" stroke="#bfbfbf" stroke-width="0.2"/>
                <path data-name="Path 820"
                      d="M30.127,11.429h-1.62a.97.97,0,0,1-.969-.969V1.937a.97.97,0,0,1,.969-.969h5.954a.97.97,0,0,1,.969.969V4.915a.484.484,0,0,0,.969,0V1.937A1.939,1.939,0,0,0,34.461,0H28.507A1.939,1.939,0,0,0,26.57,1.937V10.46A1.939,1.939,0,0,0,28.507,12.4h1.62a.484.484,0,1,0,0-.969Z"
                      transform="translate(-26.57)" fill="currentColor" stroke="#bfbfbf" stroke-width="0.2"/>
                <path data-name="Path 821"
                      d="M248.891,272.449a1.454,1.454,0,0,0-2.054,0l-2.659,2.653a.484.484,0,0,0-.121.2l-.579,1.906a.484.484,0,0,0,.593.607l1.955-.541a.484.484,0,0,0,.213-.124l2.653-2.648A1.454,1.454,0,0,0,248.891,272.449Zm-3.247,3.927-.983.272.288-.948,1.794-1.79.685.685Zm2.563-2.558-.094.094-.685-.685.094-.093a.484.484,0,0,1,.685.685Z"
                      transform="translate(-238.205 -265.437)" fill="currentColor" stroke="#bfbfbf" stroke-width="0.2"/>
                <path data-name="Path 822" d="M111.931,120h-4.988a.484.484,0,1,0,0,.969h4.988a.484.484,0,1,0,0-.969Z"
                      transform="translate(-104.525 -117.094)" fill="currentColor" stroke="#bfbfbf" stroke-width="0.2"/>
            </g>
        </svg>
        <span>Danh sách đơn hàng</span>
    </a>
    <?php if( Form_Authen::get_current_typeuser() == 1):?>
    <a href="./admin"
       class="account-sidebar__menu ">
        <svg width="14.24" height="14.12" viewBox="0 0 14.24 14.24">
    <path d="M7.04 5.61a.54.54 0 11-.53.54.54.54 0 01.54-.54zm1.88.54a.54.54 0 10.54-.54.54.54 0 00-.54.54zm-4.82 0a.54.54 0 10.53-.54.54.54 0 00-.53.54zm9.36 5.03a1.6 1.6 0 01-2.27 2.27l-2.95-2.94a.54.54 0 01-.13-.22l-.64-2.1a.54.54 0 01.66-.68l2.16.6a.54.54 0 01.24.14zM9.1 9.85l1.98 1.98.76-.76L9.87 9.1l-1.1-.3zm3.6 2.08l-.1-.1-.75.76.1.1a.54.54 0 10.75-.76zm-5.33-.62h-.3a6.49 6.49 0 01-2.46-.47.54.54 0 00-.41 0l-2.44 1.03.82-1.95a.54.54 0 00-.1-.57 4.54 4.54 0 01-1.2-3.05c0-2.77 2.6-5.03 5.8-5.03s5.79 2.26 5.79 5.03a4.41 4.41 0 01-.48 1.97.54.54 0 10.96.47 5.47 5.47 0 00.59-2.44c0-3.36-3.08-6.1-6.87-6.1S.21 2.94.21 6.3a5.56 5.56 0 001.25 3.5l-1.2 2.87a.54.54 0 00.7.7L4.4 11.9a7.57 7.57 0 002.66.48l.35-.01a.54.54 0 10-.05-1.07zm0 0" fill="currentColor" stroke="currentColor" stroke-width=".4"/>
</svg>
      
        <span>Quản lí hệ thống</span>
    </a>
    <a href="/admin"
       class="account-sidebar__menu ">
        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 512 512" width="512"
             height="512"><title>Commercial delivery </title>
            <polygon fill="currentColor"
                     points="203.654 241.22 377.296 140.969 295.628 93.818 121.986 194.069 203.654 241.22"/>
            <polygon fill="currentColor" points="197 253.344 23 153.085 23 353.619 197 453.878 197 253.344"/>
            <rect x="351" y="356" width="19" height="19"/>
            <path d="M211,253.344V453.878l95-54.935V254.182A30.037,30.037,0,0,1,335.891,224H360.8a24.533,24.533,0,0,1,23.417-18H384V153.085Z"
                  fill="currentColor"/>
            <rect x="374" y="220" width="61" height="21" rx="10.161"/>
            <polygon fill="currentColor"
                     points="281.628 85.735 203.654 40.717 30.013 140.969 107.986 185.987 281.628 85.735"/>
            <path d="M472.916,238H447.733a23.942,23.942,0,0,1-23.143,17H384.217a23.944,23.944,0,0,1-23.144-17H335.891A16.022,16.022,0,0,0,320,254.182v202.1A15.628,15.628,0,0,0,335.891,472H472.916A15.793,15.793,0,0,0,489,456.282v-202.1A16.186,16.186,0,0,0,472.916,238ZM337,285.033A6.985,6.985,0,0,1,343.949,278h32.975A7.093,7.093,0,0,1,384,285.033v4.71a7.019,7.019,0,0,1-7.038,6.984A6.739,6.739,0,0,1,370.307,292H351v19h.276a7,7,0,1,1,0,14h-7.327A6.95,6.95,0,0,1,337,318.008ZM337,349a7,7,0,0,1,7-7h33a7,7,0,0,1,7,7v33a7,7,0,0,1-7,7H344a7,7,0,0,1-7-7Zm14.277,104h-7.328A6.752,6.752,0,0,1,337,446.244V413.269A7.191,7.191,0,0,1,343.949,406h32.975A7.3,7.3,0,0,1,384,413.269v6.745A7.037,7.037,0,0,1,369.929,420H351v19h.277a7,7,0,1,1,0,14Zm51.664-27.259-25.452,25.452a7,7,0,0,1-9.9,0L356.4,440.007a7,7,0,1,1,9.9-9.9l6.236,6.237,20.5-20.5a7,7,0,0,1,9.9,9.9Zm0-129.249-25.452,25.452a7,7,0,0,1-9.9,0L356.4,310.758a7,7,0,1,1,9.9-9.9l6.236,6.237,20.5-20.5a7,7,0,0,1,9.9,9.9ZM464.857,437H420.891a7,7,0,0,1,0-14h43.966a7,7,0,0,1,0,14Zm0-64H420.891a7,7,0,0,1,0-14h43.966a7,7,0,0,1,0,14Zm0-64H420.891a7,7,0,0,1,0-14h43.966a7,7,0,0,1,0,14Z"
                  fill="currentColor"/>
        </svg>
        <?php endif;?>
        <span>Tủ đồ định kỳ</span>
    </a>

    <a href="https://www.coolmate.me/account/feedback"
       class="account-sidebar__menu ">
        <svg height="511pt" viewBox="0 0 511 512" width="511pt" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M444.465 4.395c-5.856-5.86-15.356-5.86-21.211 0L307.648 120H45.5c-24.812 0-45 20.188-45 45v209.996c0 24.816 20.188 45 45 45h16v77a15 15 0 0025.723 10.492l85.586-87.492H347.5c24.813 0 45-20.184 45-45V204.852L508.105 89.246c5.856-5.86 5.856-15.355 0-21.215zM306.578 248.344l-42.426-42.426L391.434 78.641l42.425 42.425zm-58.406-15.98l31.96 31.96-54.78 22.82zM362.5 374.995c0 8.274-6.73 15-15 15h-181a15.006 15.006 0 00-10.723 4.512L91.5 460.215v-55.219c0-8.281-6.715-15-15-15h-31c-8.27 0-15-6.726-15-15V165c0-8.273 6.73-15 15-15h232.145l-45.313 45.312a15.329 15.329 0 00-3.312 5.012L187.5 300h-81c-8.285 0-15 6.715-15 15 0 8.281 6.715 14.988 15 14.988h91.004c1.93 0 4-.394 5.894-1.207l108.774-45.304c1.812-.707 3.64-1.938 5.015-3.313l45.313-45.312zm92.57-275.144l-42.425-42.426 21.214-21.211 42.426 42.426zm0 0"/></svg>
        <span>Gửi ý kiến cho Coolmate</span>
    </a>
    <a href="https://www.coolmate.me/account/logout" class="account-sidebar__menu">
        <svg height="512" width="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M480.971 239.029l-90.51-90.509a24 24 0 00-33.942 0 24 24 0 000 33.941L406.059 232H144a24 24 0 00-24 24 24 24 0 0024 24h262.059l-49.54 49.539a24 24 0 0033.942 33.941l90.51-90.51a24 24 0 000-33.941z"/><path d="M304 392a24 24 0 00-24 24v24H72V72h208v24a24 24 0 0048 0V64a40 40 0 00-40-40H64a40 40 0 00-40 40v384a40 40 0 0040 40h224a40 40 0 0040-40v-32a24 24 0 00-24-24z"/></svg>
        <span>Thoát</span>
    </a>
        </div>
</div>                    </div>
                </div>
                <div class="grid__column nine-twelfths tablet--eight-twelfths">
                    <div class="account-section">
                        
                        <h4 class="text--upper">Thông Tin Tài Khoản</h4>
                        <form class="form account-form" action="https://www.coolmate.me/account/update" method="POST"
                              onkeydown="return event.key != 'Enter';">
                            <input type="hidden" name="_token" value="7roKi3h6IIFkjxJPfWKRT8A75T4pPmCriRPZvmLw">                            <input type="hidden" name="city" value=""/>
                            <input type="hidden" name="district" value=""/>
                            <input type="hidden" name="ward" value=""/>
                            <input type="hidden" name="otp" value="" />

                                                        
                                                        <div class="form__group grid align--center mgb--20 mgt--300">
                                <div class="grid__column three-twelfths desk--four-twelfths tablet--one-whole">
                                    <label class="form__label">Họ Tên</label>
                                </div>
                                <div class="grid__column six-twelfths desk--seven-twelfths tablet--one-whole">
                                    <input type="text" name="fullname" class="form-control"
                                           value="<?php echo Form_Authen::get_current_username() ?>">
                                </div>
                            </div>
                            <div class="form__group grid align--center mgb--20">
                                <div class="grid__column three-twelfths desk--four-twelfths tablet--one-whole">
                                    <label class="form__label">Email</label>
                                </div>
                                <div class="grid__column six-twelfths desk--seven-twelfths tablet--one-whole">
                                    <input type="email" name="email" class="form-control"
                                           value="<?php echo Form_Authen::get_current_email() ?>" disabled>
                                </div>
                            </div>
                            <div class="form__group grid align--center mgb--20">
                                <div class="grid__column three-twelfths desk--four-twelfths tablet--one-whole">
                                    <label class="form__label">Số điện thoại</label>
                                </div>
                                <div class="grid__column six-twelfths desk--seven-twelfths tablet--one-whole">
                                    <input type="number" name="phone" class="form-control form-control--number"
                                           value="0366931352">
                                </div>
                            </div>
                            <div class="form__group grid align--center mgb--20">
                                <div class="grid__column three-twelfths desk--four-twelfths tablet--one-whole">
                                    <label class="form__label">Địa chỉ</label>
                                </div>
                                <div class="grid__column six-twelfths desk--seven-twelfths tablet--one-whole">
                                    <input type="text" name="address" class="form-control" id="address"
                                           value="">
                                    <div class="autocomplete-items" style="display: none"></div>
                                </div>
                            </div>
                            <div class="form__group grid align--center mgb--20">
                                <div class="grid__column three-twelfths desk--four-twelfths tablet--one-whole">
                                    <label class="form__label">Tỉnh/ Thành</label>
                                </div>
                                <div class="grid__column six-twelfths desk--seven-twelfths tablet--one-whole">

                                                                        <div class="form__group form__group--inline">
                                        <div class="form__field form__field--select2 four-twelfths">
                                            <select style="width: 100%; display: none;" id="selectCity">
                                                <option></option>
                                            </select>
                                        </div>
                                        <div class="form__field form__field--select2 four-twelfths">
                                            <select style="width: 100%; display: none;" id="selectDistrict">
                                                <option></option>
                                            </select>
                                        </div>
                                        <div class="form__field form__field--select2  four-twelfths">
                                            <select style="width: 100%; display: none;" id="selectWard">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    

                                </div>
                            </div>
                            <div class="form__group grid align--center mgb--20">
                                <div class="grid__column three-twelfths desk--four-twelfths tablet--one-whole">
                                    <label class="form__label">Giới tính</label>
                                </div>
                                <div class="grid__column six-twelfths desk--seven-twelfths tablet--one-whole">
                                    <div class="radiobox-group radiobox-group--inline">
                                        <label class="radiobox">
                                            <span>Nam</span>
                                            <input type="radio" name="gender"
                                                   value='male' checked>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radiobox">
                                            <span>Nữ</span>
                                            <input type="radio" name="gender"
                                                   value="female" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form__group grid align--center mgb--20">
                                <div class="grid__column three-twelfths desk--four-twelfths tablet--one-whole">
                                    <label class="form__label">Đăng nhập bằng số điện thoại</label>
                                </div>
                                <div class="grid__column six-twelfths desk--seven-twelfths tablet--one-whole">
                                    <div class="radiobox-group radiobox-group--inline">
                                        <label class="radiobox">
                                            <span>Bật</span>
                                            <input type="radio" name="login_by_phone"
                                                   value='true' checked>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radiobox">
                                            <span>Tắt</span>
                                            <input type="radio" name="login_by_phone"
                                                   value="false" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form__group grid align--center mgb--20">
                                                                <div class="grid__column three-twelfths desk--four-twelfths tablet--one-whole">
                                    <label class="form__label">Ngày sinh <i
                                                style="opacity: 0.5">(ngày/tháng/năm)</i></label>
                                    <br><span style="font-size: 13px;"><i>Thông tin ngày sinh chỉ được thay đổi một lần, vui lòng nhập đúng thông tin nhé</i></span>                                </div>
                                <div class="grid__column six-twelfths desk--seven-twelfths tablet--one-whole">
                                                                        <input type="text" name="birthday" class="form-control" data-datetime
                                           autocomplete="off"
                                           value="">
                                                                        
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </div>
                            </div>

                            <div class="form__group grid align--center mgb--20">
                                <div class="grid__column three-twelfths desk--four-twelfths tablet--one-whole">
                                    <label class="form__label">Chiều cao (cm)</label>
                                </div>
                                <div class="grid__column six-twelfths desk--seven-twelfths tablet--one-whole">
                                    <div class="flex align--center">
                                        <input class="form-control--range" type="range" name="height" min="140"
                                               max="185" value="173"
                                               data-range="cm"/>
                                        <div class="form-control--range-label text--primary text--bold text--right"
                                             data-range="cm"
                                             data-value="cm">173cm</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form__group grid align--center mgb--20">
                                <div class="grid__column three-twelfths desk--four-twelfths tablet--one-whole">
                                    <label class="form__label">Cân nặng (kg)</label>
                                </div>
                                <div class="grid__column six-twelfths desk--seven-twelfths tablet--one-whole">
                                    <div class="flex align--center">
                                        <input class="form-control--range" type="range" name="weight" min="40" max="85"
                                               value="60" data-range="kg"/>
                                        <div class="form-control--range-label text--primary text--bold text--right"
                                             data-range="kg"
                                             data-value="kg">60kg</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form__group mgb--20">
                                <label class="checkbox checkbox--primary">
                                    <span class="text--primary" style="cursor: pointer">Thay Đổi Mật Khẩu</span>
                                    <input type="checkbox" name="change_password" id="accountPasswordToggle_Btn">
                                    <span class="checkbox__mark"></span>
                                </label>
                            </div>
                            <div id="accountPasswordToggle" class="account__password-toggle" style="display: none;">
                                <div class="form__group grid align--center mgb--20">
                                    <div class="grid__column three-twelfths desk--four-twelfths tablet--one-whole">
                                        <label class="form__label">Mật khẩu cũ</label>
                                    </div>
                                    <div class="grid__column six-twelfths desk--seven-twelfths tablet--one-whole">
                                        <input type="password" name="old_password" class="form-control"
                                               autocomplete="false">
                                    </div>
                                </div>
                                <div class="form__group grid align--center mgb--20">
                                    <div class="grid__column three-twelfths desk--four-twelfths tablet--one-whole">
                                        <label class="form__label">Mật khẩu mới</label>
                                    </div>
                                    <div class="grid__column six-twelfths desk--seven-twelfths tablet--one-whole">
                                        <input type="password" name="password" class="form-control"
                                               autocomplete="false">
                                    </div>
                                </div>
                                <div class="form__group grid align--center mgb--30">
                                    <div class="grid__column three-twelfths desk--four-twelfths desk--four-twelfths tablet--one-whole">
                                        <label class="form__label">Nhập lại Mật khẩu mới</label>
                                    </div>
                                    <div class="grid__column six-twelfths desk--seven-twelfths tablet--one-whole">
                                        <input type="password" name="password_confirmation" class="form-control"
                                               autocomplete="false">
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                    class="btn btn--primary btn--bold btn--upper btn--rounded ">Cập Nhật
                                Tài Khoản
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="otp-modal" class="modal">
            <div class="flex justify--center align--center" style="height: 100%">
                <div class="modal-content">
                    <div class="modal-content-inner">
                        <div class="text-center">
                            Vui lòng nhập mã OTP được gửi tới số <b class="otp-phone-number">0366931352</b> của bạn.
                        </div>
                        <div class="otp-inputs-wrapper">
                            <div class="otp-inputs">
                                <input type="text" class="otp-input form-control" maxlength="1">
                                <input type="text" class="otp-input form-control" maxlength="1">
                                <input type="text" class="otp-input form-control" maxlength="1">
                                <input type="text" class="otp-input form-control" maxlength="1">
                                <input type="text" class="otp-input form-control" maxlength="1">
                                <input type="text" class="otp-input form-control" maxlength="1">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:void(0)" class="btn btn--primary" id="otp-modal-submit">Cập nhật tài khoản</a>
                        <a href="javascript:void(0)" class="btn btn--outline" id="otp-modal-close">Huỷ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>