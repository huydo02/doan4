<?php $title='Giỏ hàng';
if(!empty(Form_Authen::get_current_address())){
    $address = Helper::input_value('addressfull');
}else{
    $address = Helper::input_value('address') .", ". Helper::input_value('nhanh_ward') .", ". Helper::input_value('nhanh_district') .", ". Helper::input_value('nhanh_city');
}

$orderdate = time();

if(Helper::is_submit('order')){
    
    $order = new order();
    $order->setIduser(Form_Authen::get_current_id());
	$order->setFullname(Helper::input_value('full_name'));
    $order->setEmail(Helper::input_value('email'));
    $order->setAddress($address);
    $order->setPhone(Helper::input_value('phone'));
    $order->setOrderdate($orderdate);
    if(!empty($order) && OrderDB::addOrder($order)){
        $sql1 = "UPDATE user SET address = :address WHERE id = :id";
        $params1= ['address' => $address, 'id' => Form_Authen::get_current_id()];
        Database::db_connect();
        Database::db_execute($sql1, $params1);
   $sql = 'select * from orders where orderdate=:orderdate';
   $params =['orderdate' => $orderdate];
   Database::db_connect();
   $prd = Database::db_get_row1($sql,$params);
   $order_id = $prd['id'];
   $cart = [];
if(isset($_SESSION['cart'])) {
	$cart = $_SESSION['cart'];
}
   foreach ($cart as $item) {
     $product_id = $item['id'];
     $price = $item['price'];
     $num = $item['num'];
     $sql = 'insert into order_details(product_id,order_id,num,price)values(:product_id,:order_id,:num,:price)';
     $params =['product_id' => $product_id,
                'order_id' => $order_id,
                'price' => $price,
                'num' => $num];
                Database::db_connect();
                Database::db_execute($sql,$params);
   }
   unset($_SESSION['cart']);
//    Helper::redirect_js('?c=success&order_id='.$order_id);
    }
}

?>

<link href="https://www.coolmate.me/css/checkout-page.css?v=6U4E6UFpvBWost25q4"
          rel="stylesheet" type="text/css">
          <br><br><br><br>
<div class="site-content" style="position: relative; z-index: 1">

<?php if(Form_Authen::is_login()){?>
    <div class="checkout__content">
            <div class="checkout__main">
                            
                              
                                    <form id="order-info"  method="POST" action="">
                                                               
                                                        <input type="hidden" name="action" value="order"/>
                               <input type="hidden" name="nhanh_city" value=""/>
                                <input type="hidden" name="nhanh_district" value=""/>
                                <input type="hidden" name="nhanh_ward" value=""/>
                                <div class="checkout__information">
                                    <div class="flex justify--between">
                                        <h3 class="checkout__heading">Thông tin nhận hàng</h3>
                                                                                    <p>Bạn đã có tài khoản? <a href="#" class="toggle-login text--primary">Đăng
                                                    nhập
                                                    ngay</a></p>
                                                                            </div>
                                    <div class="form form-info">
  <div class="form__group form__group--inline">
          <div class="form__field">
        <input type="text" class="cart--data form-control" name="full_name"
               placeholder="Họ tên"
               autofocus
               value="<?php echo Form_Authen::get_current_username() ?>"
               required/>
      </div>
      <div class="form__field form__field--required">
        <input type="number" class="cart--data form-control" name="phone"
               placeholder="Số điện thoại"
               autofocus
               required
               value="">
      </div>
      </div>
  <div class="form__field">
    <input type="email"
           class="cart--data form-control order--email"
                      name="email"
           placeholder="Địa chỉ email"
           autofocus
           value="<?php echo Form_Authen::get_current_email() ?>"
           required>
  </div>
  <?php if(!empty(Form_Authen::get_current_address())){?>
  <div class="form__field">
    <input type="text" class="cart--data form-control" name="addressfull"
           id="addressfull"
           placeholder="Địa chỉ"
            required            autocomplete="off"
           value="<?php echo Form_Authen::get_current_address() ?>">
    <div class="autocomplete-items" style="display: none"></div>
  </div>
  <?php }else {?>
  <div class="form__field">
    <input type="text" class="cart--data form-control" name="address"
           id="address"
           placeholder="Tên đường/số nhà"
            required            autocomplete="off"
           value="">
    <div class="autocomplete-items" style="display: none"></div>
  </div>
  <div class="form__group form__group--inline">
          <div class="form__field">
        <select style="width: 100%; display: none;" id="selectCity">
          <option></option>
        </select>
      </div>
      <div class="form__field">
        <select style="width: 100%; display: none;" id="selectDistrict">
          <option></option>
        </select>
      </div>
      <div class="form__field">
        <select style="width: 100%; display: none;" id="selectWard">
          <option></option>
        </select>
      </div>
      </div>
      <?php }?>
  <div class="form__field">
    <textarea name="cnote" class="form-control cart--data"
              placeholder="Ghi chú thêm (Ví dụ: Giao hàng giờ hành chính)"></textarea>
  </div>
</div>
<div class="checkout__payment">
  <h3 class="checkout__heading">Chọn hình thức thanh toán</h3>
  <div class="payment-method">
          <div class="payment-method__option">
        <label class="payment-method__item is-active" style="cursor: pointer">
          <div class="radiobox">
            <input type="radio" name="payment_select" value="COD" checked
                   class="cart--data--payment">
            <span class="checkmark"></span>
            <span class="payment-method__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="38.325" height="24.317">
    <g
            id="shipped" transform="translate(.1 .1)">
        <g id="Group_1575"
           data-name="Group 1575">
            <g
                    id="Group_1574" data-name="Group 1574">
                <path
                        id="Path_207"
                        d="M35.457 104.286l-.987-3.949a.6.6 0 0 0 .472-.584v-.637a2.51 2.51 0 0 0-2.507-2.507h-4.5V95.3a1.235 1.235 0 0 0-1.235-1.238H3.781A1.235 1.235 0 0 0 2.547 95.3v10.825a.6.6 0 1 0 1.194 0V95.3a.04.04 0 0 1 .04-.04H26.7a.04.04 0 0 1 .04.04v10.825a.6.6 0 0 0 1.194 0v-.677h7.045a1.953 1.953 0 0 1 1.855 1.353h-1.853a.6.6 0 0 0-.6.6v1.273a1.873 1.873 0 0 0 1.87 1.87h.677v2.627h-1.557a3.78 3.78 0 0 0-7.146 0h-.287v-4.5a.6.6 0 1 0-1.194 0v4.5H14.358a3.78 3.78 0 0 0-7.146 0H3.781a.04.04 0 0 1-.04-.04v-1.313h2.587a.6.6 0 0 0 0-1.194H.6a.6.6 0 0 0 0 1.194h1.95v1.313a1.235 1.235 0 0 0 1.234 1.234h3.221v.04a3.781 3.781 0 1 0 7.561 0v-.04h13.452v.04a3.781 3.781 0 1 0 7.561 0v-.04h1.951a.6.6 0 0 0 .6-.6v-6.367a3.149 3.149 0 0 0-2.673-3.112zm-7.52-6.486h4.5a1.315 1.315 0 0 1 1.313 1.313v.04h-5.81zm0 6.447v-3.9h5.3l.975 3.9zm-17.152 12.738a2.587 2.587 0 1 1 2.587-2.587 2.59 2.59 0 0 1-2.587 2.587zm21.013 0a2.587 2.587 0 1 1 2.587-2.587 2.59 2.59 0 0 1-2.585 2.587zm5.134-7.641h-.677a.677.677 0 0 1-.677-.677v-.677h1.353v1.353z"
                        class="payment-icon"
                        data-name="Path 207"
                        transform="translate(0 -94.062)"/>
            </g>
        </g>
        <g
                id="Group_1577" data-name="Group 1577"
                transform="translate(9.551 19.103)">
            <g id="Group_1576"
               data-name="Group 1576">
                <path
                        id="Path_208"
                        d="M129.5 350.6a1.234 1.234 0 1 0 1.234 1.234 1.235 1.235 0 0 0-1.234-1.234z"
                        class="payment-icon" data-name="Path 208"
                        transform="translate(-128.267 -350.597)"/>
            </g>
        </g>
        <g
                id="Group_1579" data-name="Group 1579"
                transform="translate(30.564 19.103)">
            <g id="Group_1578"
               data-name="Group 1578">
                <path
                        id="Path_209"
                        d="M411.689 350.6a1.234 1.234 0 1 0 1.234 1.234 1.235 1.235 0 0 0-1.234-1.234z"
                        class="payment-icon" data-name="Path 209"
                        transform="translate(-410.455 -350.597)"/>
            </g>
        </g>
        <g
                id="Group_1581" data-name="Group 1581"
                transform="translate(15.282 16.556)">
            <g id="Group_1580"
               data-name="Group 1580">
                <path
                        id="Path_210"
                        d="M214.738 316.393h-8.914a.6.6 0 1 0 0 1.194h8.914a.6.6 0 0 0 0-1.194z"
                        class="payment-icon" data-name="Path 210"
                        transform="translate(-205.227 -316.393)"/>
            </g>
        </g>
        <g
                id="Group_1583" data-name="Group 1583"
                transform="translate(1.273 14.009)">
            <g id="Group_1582"
               data-name="Group 1582">
                <path
                        id="Path_211"
                        d="M25.34 282.188H17.7a.6.6 0 0 0 0 1.194h7.64a.6.6 0 0 0 0-1.194z"
                        class="payment-icon" data-name="Path 211"
                        transform="translate(-17.102 -282.188)"/>
            </g>
        </g>
        <g
                id="Group_1585" data-name="Group 1585"
                transform="translate(10.825 5.731)">
            <g id="Group_1584"
               data-name="Group 1584">
                <path
                        id="Path_212"
                        d="M155.3 171.2a.6.6 0 0 0-.844 0l-5.309 5.309-2.762-2.762a.6.6 0 0 0-.844.844l3.184 3.184a.6.6 0 0 0 .844 0l5.731-5.731a.6.6 0 0 0 0-.844z"
                        class="payment-icon" data-name="Path 212"
                        transform="translate(-145.37 -171.023)"/>
            </g>
        </g>
    </g>
</svg>                        </span>
            <div>
              <h4>Thanh toán khi nhận hàng (COD)</h4>
              <p style="color: #231f20">
                Miễn phí vận chuyển với mọi đơn hàng trên 300k</p>
            </div>
          </div>
        </label>
        <div class="payment-method__content"></div>
      </div>
        <div class="payment-method__option" style="opacity: .5">
      <label class="payment-method__item" style="cursor: pointer">
        <div class="radiobox">
          <input type="radio"  name="payment_select" value="zalopay"
                 class="cart--data--payment" disabled>
          <span class="checkmark"></span>
          <span class="payment-method__icon"><img width="55"
                                                  src="https://www.coolmate.me/images/logo-zalopay.svg"></span>
          <div>
            <h4>Ví điện tử ZaloPay</h4>
            <h4>Thẻ ATM / Internet Banking</h4>
            <h4>Thẻ tín dụng (Credit card) / Thẻ ghi nợ (Debit
              card)</h4>
          </div>
        </div>
      </label>
    </div>
    <div class="payment-method__option" style="opacity: .5">
      <label class="payment-method__item" style="cursor: pointer">
        <div class="radiobox">
          <input type="radio" name="payment_select" value="momo"
                 class="cart--data--payment" disabled>
          <span class="checkmark"></span>
          <span class="payment-method__icon">
                        <img width="35" src="https://www.coolmate.me/images/momo-icon.png">
                    </span>
          <div>
            <h4>Ví MOMO</h4>
                      </div>
        </div>
      </label>
    </div>
        <div class="payment-method__option" style="opacity: .5">
      <label class="payment-method__item">
        <div class="radiobox">
          <input type="radio" name="payment_select" value="shopeepay" class="cart--data--payment" disabled>
          <span class="checkmark"></span>
          <span class="payment-method__icon">
              <img width="35" src="https://mcdn.coolmate.me/image/September2021/195dbf69c0ac36f26fbd_(1).png">
          </span>
        </div>
        <div>
          <h4>Ví ShopeePay</h4>
        </div>
      </label>
    </div>
      <div class="payment-method__option" style="opacity: .5">
        <label class="payment-method__item">
          <div class="radiobox">
            <input type="radio" name="payment_select" value="foxpay" class="cart--data--payment" disabled>
            <span class="checkmark"></span>
            <span class="payment-method__icon">
              <img width="75" src="https://www.coolmate.me/images/foxpay.png"></span>
          </div>
          <div>
            <h4>FoxPay</h4>
          </div>
        </label>
      </div>
  </div>
</div>                                    <p class="checkout__note">Nếu bạn không hài lòng với sản phẩm của chúng tôi? Bạn
                                        hoàn toàn
                                        có
                                        thể
                                        trả lại sản phẩm. Tìm hiểu thêm <a href="/page/chinh-sach-doi-tra"
                                                                           target="_blank"> tại
                                            đây</a>.
                                    </p>
                                    


                                    <div class="checkout__actions flex justify--end">
                                    <button type="submit" class="btn btn--primary btn--full btn-checkout" style="font-size: 18px;text-align: center;height: 70px;line-height: 1em;flex-flow: column" >Đặt hàng<br><span style="font-size: 11px;display: contents;line-height: 1em;">Ship tới không mua không sao.<br> Mua rồi vẫn đổi trả miễn phí.</span></button>
                                    </div>
                            </form>
            </div>
        </div>
        <?php }else{?>
            <div class="checkout__content">
            <div class="checkout__main">
                                <input type="hidden" id="user-shipping"
                       value="{&quot;city&quot;:null,&quot;district&quot;:null,&quot;ward&quot;:null}"/>
                       
                      
                                                       
                                <div class="checkout__information">
                                    <div class="flex justify--between">
                                        <h3 class="checkout__heading">Bạn chưa đăng nhập</h3>
                                                                            </div>
                                    <div class="form form-info">
  


  
</div>

                                   <center>
                                      <a href="?c=login"> <button class="btn btn--primary btn--full btn-checkout" style="font-size: 18px;text-align: center;height: 70px;line-height: 1em;flex-flow: column">Đăng nhập ngay
                                           <br></button></a>
        </center>
                           
                           
            </div>
        </div>
            <?php }?>
        <div class="checkout__sidebar">
            <div class="checkout__cart checkout__block">

                                <h3 class="checkout__heading text--primary text--center">Giỏ hàng của bạn</h3>
                    
                                
                
                <div class="cart" >
                <?php
$cart = [];
if(isset($_SESSION['cart'])) {
	$cart = $_SESSION['cart'];
}

?>
<?php
$count = 0;
$total = 0;
foreach($cart as $item):
?>
    <?php $total += $item['num'] * $item['price'];?>
                                                        <div class="cart__item" id="60b48e486dfb751d685e83a4db871916">
                    <div class="cart__image">
                                                <img class="lazyload" src="<?php echo $item['thumbnail'];?>" alt="Áo sơ mi nam dài tay Café-DriS khử mùi hiệu quả">
                                            </div>
                    <div class="cart__title">
                        <h3>
                                                            <a href="https://www.coolmate.me/product/ao-so-mi-nam-dai-tay-cafe-dris-khu-mui"><?php echo $item['title'];?></a>
                                                    </h3>
                        <div class="cart__variant">
                            <form action="https://www.coolmate.me/cart/update" method="POST">
                                <input type="hidden" name="_token" value="rO2rQ1vqNe14xcVBh8z2rmn5nqHbTopdVOk73HER">                                                                                                                                                                                    <div class="cart__variant-field" id="variant-option" data-id="60b48e486dfb751d685e83a4"
                                             data-option="option1" data-option-value="Trắng">
                                            <span>Màu sắc :</span>
                                            <div class="cart__variant-select">Trắng</div>
                                        </div>
                                        <input name="variant_label_60b48e486dfb751d685e83a4" type="hidden" value="Màu sắc"/>
                                        <input name="old_variant_id" type="hidden" value="db871916"/>
                                                                                                                                                                                        <div class="cart__variant-field" id="variant-option" data-id="60b48e486dfb751d685e83a4"
                                             data-option="option2" data-option-value="L">
                                            <span>Số lượng :</span>
                                            <div class="cart__variant-select"><?php echo $item['num'];?></div>
                                        </div>
                                        <input name="variant_label_60b48e486dfb751d685e83a4" type="hidden" value="Kích thước Áo"/>
                                        <input name="old_variant_id" type="hidden" value="db871916"/>
                                                                                                                                                                                                                                                            <input name="product_id" type="hidden" value="60b48e486dfb751d685e83a4"/>
                                <input name="is_edit_variant" type="hidden" value="true"/>
                            </form>
                        </div>
                                                <!-- <div class="cart__variant_action">
                            <a class="cart__button cart__edit" onclick="editItem(this)" style="cursor: pointer;"
                               data-value="Edit" data-options="[{&quot;option_id&quot;:&quot;color&quot;,&quot;title&quot;:&quot;M\u00e0u s\u1eafc&quot;,&quot;values&quot;:[&quot;Tr\u1eafng&quot;,&quot;X\u00e1m tro&quot;,&quot;Xanh nh\u1ea1t&quot;]},{&quot;option_id&quot;:&quot;tshirt_size&quot;,&quot;title&quot;:&quot;K\u00edch th\u01b0\u1edbc \u00c1o&quot;,&quot;values&quot;:[&quot;S&quot;,&quot;M&quot;,&quot;L&quot;,&quot;XL&quot;,&quot;2XL&quot;]}]">
                                <span class="edit"><svg height="401pt" viewBox="0 -1 401.523 401" width="401pt" xmlns="http://www.w3.org/2000/svg"><path d="M370.59 250.973c-5.524 0-10 4.476-10 10v88.789c-.02 16.562-13.438 29.984-30 30H50c-16.563-.016-29.98-13.438-30-30V89.172c.02-16.559 13.438-29.98 30-30h88.79c5.523 0 10-4.477 10-10 0-5.52-4.477-10-10-10H50c-27.602.031-49.969 22.398-50 50v260.594c.031 27.601 22.398 49.968 50 50h280.59c27.601-.032 49.969-22.399 50-50v-88.793c0-5.524-4.477-10-10-10zm0 0"/><path d="M376.629 13.441c-17.574-17.574-46.067-17.574-63.64 0L134.581 191.848a9.997 9.997 0 00-2.566 4.402l-23.461 84.7a9.997 9.997 0 0012.304 12.308l84.7-23.465a9.997 9.997 0 004.402-2.566l178.402-178.41c17.547-17.587 17.547-46.055 0-63.641zM156.37 198.348L302.383 52.332l47.09 47.09-146.016 146.016zm-9.406 18.875l37.62 37.625-52.038 14.418zM374.223 74.676L363.617 85.28l-47.094-47.094 10.61-10.605c9.762-9.762 25.59-9.762 35.351 0l11.739 11.734c9.746 9.774 9.746 25.59 0 35.36zm0 0"/></svg></span>
                                <span class="cancel"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 475.2 475.2"><path d="M405.6 69.6C360.7 24.7 301.1 0 237.6 0s-123.1 24.7-168 69.6S0 174.1 0 237.6s24.7 123.1 69.6 168 104.5 69.6 168 69.6 123.1-24.7 168-69.6 69.6-104.5 69.6-168-24.7-123.1-69.6-168zm-19.1 316.9c-39.8 39.8-92.7 61.7-148.9 61.7s-109.1-21.9-148.9-61.7c-82.1-82.1-82.1-215.7 0-297.8C128.5 48.9 181.4 27 237.6 27s109.1 21.9 148.9 61.7c82.1 82.1 82.1 215.7 0 297.8z"/><path d="M342.3 132.9c-5.3-5.3-13.8-5.3-19.1 0l-85.6 85.6-85.6-85.6c-5.3-5.3-13.8-5.3-19.1 0-5.3 5.3-5.3 13.8 0 19.1l85.6 85.6-85.6 85.6c-5.3 5.3-5.3 13.8 0 19.1 2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4l85.6-85.6 85.6 85.6c2.6 2.6 6.1 4 9.5 4 3.5 0 6.9-1.3 9.5-4 5.3-5.3 5.3-13.8 0-19.1l-85.4-85.6 85.6-85.6c5.3-5.3 5.3-13.8 0-19.1z"/></svg></span>
                                <span class="text">Sửa</span>
                            </a>
                            <a class="cart__button cart__saveVariant" onclick="handleUpdateVariant(this)"
                               style="cursor: pointer; display: none;" data-value="Edit">
                                <span><svg height="512" viewBox="0 0 512.007 512.007" width="512" xmlns="http://www.w3.org/2000/svg"><path d="M511.927 126.537a15.028 15.028 0 00-3.315-8.027c-.747-.913 6.893 6.786-114.006-114.113A15.116 15.116 0 00383.994.003H44.999c-24.813 0-45 20.187-45 45v422c0 24.813 20.187 45 45 45h422c24.813 0 45-20.187 45-45 .001-364.186.041-339.316-.072-340.466zM345 30.003v98c0 8.271-6.729 15-15 15h-19v-113zm-64 0v113H142c-8.271 0-15-6.729-15-15v-98zm64 291H127v-19c0-8.271 6.729-15 15-15h188c8.271 0 15 6.729 15 15zm-218 161v-131h218v131zm355-15c0 8.271-6.729 15-15 15h-92v-180c0-24.813-20.187-45-45-45H142c-24.813 0-45 20.187-45 45v180H45c-8.271 0-15-6.729-15-15v-422c0-8.271 6.729-15 15-15h52v98c0 24.813 20.187 45 45 45h188c24.813 0 45-20.187 45-45v-98h2.787L482 134.217z"/></svg></span>
                                Lưu
                            </a>
                        </div> -->
                                                          
<span style="color: red" >Tổng:</span>

                                            </div>
                    <div class="cart__actions">
                        <div class="flex">
                               <button class="btn btn--primary" onclick="deleteItem(<?php echo $item['id'];?>)">xóa</button>
                        </div>
                        <div class="cart__prices">
                                                                                                                           <span style="color: red"><?php echo number_format($item['num'] * $item['price'], 0, '', '.')?> VND</span>
                                                                                                                    </div>
                    </div>
                </div>
                <?php endforeach; ?>
                                    </div>

                                

                                
                <div id="checkout-modal" class="modal">
                    <div class="flex justify--center align--center" style="height: 100%">
                        <div class="modal-content" style="margin: 0">
                            <div class="modal-content-inner">
                                                            </div>
                            <div style="margin-top: 20px; display: flex; justify-content: space-between; flex-wrap: wrap;">
                                <a href="javascript:void(0)" class="btn btn--outline" id="checkout-modal-submit" style="margin-bottom: 7px; width: 100%">Tiếp tục thanh toán</a>
                                <a href="javascript:void(0)" class="btn btn--primary" id="checkout-modal-close" style="width: 100%">Tôi sẽ cân nhắc và đặt hàng sau</a>
                            </div>
                        </div>
                    </div>
                </div>


              

                            </div>
                        <div class="checkout__block">
                <div class="checkout__block-wrap ">
                    <div class="checkout__block-box">
                                                                            <form action="https://www.coolmate.me/discount" method="post"
                                  class="apply-coupon flex" id="discount">
                                <input type="hidden" name="_token" value="rO2rQ1vqNe14xcVBh8z2rmn5nqHbTopdVOk73HER">                                <div class="checkout__coupon">
                                    <input type="text" class="form-control" name="code" placeholder="Mã giảm giá"
                                           autofocus required
                                           value="">
                                    <button class="btn btn--primary btn-discount">Áp dụng</button>
                                </div>
                            </form>
                                            </div>
                </div>
                                                                                
                
                <div class="checkout__summary">
                    <div class="flex justify--between">
                        <label>Tạm tính</label>
                        <span class="checkout__subtotal text--right"><?=number_format($total, 0, '', '.')?></span>
                    </div>
                    <!--
                    <div class="flex justify--between" style="padding: 0px;">
                        <label><i style="font-size: 12px;color: orange;">MIỄN PHÍ GIAO HÀNG VỚI TẤT CẢ CÁC ĐƠN HÀNG</i></label>
                    </div>
                    -->
                                        <div class="flex justify--between">
                        <label>Mã giảm giá</label>
                        <span class="checkout__shipping text--right text--primary checkout__discount"
                              data-discount="0"> 0đ</span>
                    </div>
                                                                                                <div class="flex justify--between">
                                <label>Giảm giá khác</label>
                                <span class="checkout__shipping text--right text--primary promotion_price" data-promotion-price="0">0đ</span>
                            </div>
                                                                <div class="flex justify--between">
                        <label>Phí giao hàng
                                                    </label>
                        <span class="checkout__shipping text--right text--primary">Miễn phí</span>
                    </div>
                                                            <div class="flex justify--between">
                                                <label>Tổng cộng</label>
                        <span class="checkout__total text--bold text--right text--primary" data-total="499000">
                        <?=number_format($total, 0, '', '.')?>                      </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
   
    <script type="text/javascript">
	function deleteItem(id) {
        
		$.get('./model/api.php', {
			'action': 'delete',
			'id': id
		}, function(data) {
			location.reload();
		})
	}
</script>
    <script type="text/javascript">
        function editItem(e) {
            let parent = $(e).closest(".cart__item")[0];
            let options = JSON.parse($(e).attr("data-options"));
            if ($(e).attr("data-value") === "Edit") {
                let variants = $(parent).find(".cart__title .cart__variant #variant-option .cart__variant-select");
                let variantContainer = $(parent).find(".cart__title .cart__variant #variant-option");
                variants.each(function (key, item) {
                    let container = $(`<div class="custom-select" style="width:100px;"></div>`);
                    let selectVariant = $(`<select></select>`);
                    const values = options[parseInt(key)].values;
                    const option = $(variantContainer[parseInt(key)]).data("option");
                    const optionValue = $(variantContainer[parseInt(key)]).data("option-value");
                    values.forEach(function (value, key) {
                        let item = $(`<option></option>`);
                        $(item).html(value);
                        $(item).attr("value", value);
                        if (value === optionValue) $(item).attr("selected", "selected");
                        $(selectVariant).append(item);
                    });
                    $(selectVariant).attr("name", "variants_option[" + option + "]");
                    $(container).html(selectVariant);
                    $(item).html(container);
                    selectBox(container);
                });
                $(e).addClass('is-cancel');
                $(e).children('.text').html("Hủy");
                $(e).attr("data-value", "Cancel");
                $(e).siblings(".cart__remove").hide();
                $(e).siblings(".cart__saveVariant").show();
            } else {
                let variants = $(parent).find(".cart__title .cart__variant .cart__variant-field");
                variants.each(function (key, item) {
                    let oldVariant = $(item).data('option-value');
                    $(item).find(".cart__variant-select").children().remove();
                    let oldVariantEl = $(`<strong></strong>`);
                    $(oldVariantEl).html(oldVariant);
                    $(item).find(".cart__variant-select").append(oldVariantEl);
                });
                $(e).removeClass('is-cancel');
                $(e).children('.text').html("Sửa");
                $(e).attr("data-value", "Edit");
                $(e).siblings(".cart__saveVariant").hide();
                $(e).siblings(".cart__remove").show();
            }
        }

        function handleUpdateVariant(e) {
            let data = $(e).parents(".cart__variant_action").siblings(".cart__variant").children("form").serialize();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "https://www.coolmate.me/cart/update",
                timeout: 5000,
                data: data,
                success: function (data) {
                    if (data.status === 'success') {
                        location.reload();
                    } else {
                        theme.PushNotify({
                            message: data.message,
                            level: 'error'
                        });
                    }
                },
                fail: function (xhr, textStatus, errorThrown) {
                    theme.PushNotify({
                        message: 'Có lỗi xảy ra. Tải lại trang và thử lại',
                        level: 'error'
                    });
                }
            });
        }

        var setTimeOutG;
        var ajax_running = 0;
        var stop = 0;
        setInterval(function () {
            if (ajax_running > 0) {
                ajax_running -= 1;
            }
        }, 1000);

        function updateCart(e) {
            if (ajax_running > 2) {
                stop = 1;
                setTimeout(function () {
                    calling(e);
                }, 9000);
                ajax_running = 1;
            } else if (stop === 0) {
                calling(e);
                ajax_running += 1;
            }
        }

        function calling(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            var box = $(e).attr("item-type-data");
            var quantity = Number($(e).val());
            var max = Number($(e).attr("max"));
            var product_id = $(e).attr("item-id-data");
            var variant_id = $(e).attr("item-variant-data");
            var discount = $('input[name="code"]').val();
            theme.Loading.show();
            $.ajax({
                type: "POST",
                url: "https://www.coolmate.me/cart/update",
                timeout: 5000,
                data: {
                    _token: "rO2rQ1vqNe14xcVBh8z2rmn5nqHbTopdVOk73HER",
                    id: product_id,
                    variant_id: variant_id,
                    quantity: quantity,
                    discount: discount,
                    box: box
                },
                success: function (data) {
                    if (data.status !== 'success') {
                        if (data.message) {
                            theme.Loading.hide();
                            alert(data.message);
                            if(quantity > max) {
                                quantity = max;
                                $(e).val(quantity).change();
                            }
                            location.reload();
                            return;
                        }

                        theme.PushNotify({
                            message: 'Có lỗi xảy ra.',
                            level: 'error'
                        });
                    } else {
                        if (data.qty !== 0) {
                            clearTimeout(setTimeOutG);
                            setTimeOutG = setTimeout(function (e) {
                                if ($('#discount').length) {
                                    $('#discount').submit();
                                } else {
                                    location.reload();
                                }
                            }, 1000);
                        }
                    }
                },
                fail: function (xhr, textStatus, errorThrown) {
                    theme.Loading.hide();
                    theme.PushNotify({
                        message: 'Có lỗi xảy ra. Tải lại trang và thử lại',
                        level: 'error'
                    });
                }
            });
            stop = 0;
        }

        function selectBox(x) {
            let i, j, l, ll, selElmnt, a, b, c;
            l = x.length;
            for (i = 0; i < l; i++) {
                selElmnt = x[i].getElementsByTagName("select")[0];
                ll = selElmnt.length;
                /* For each element, create a new DIV that will act as the selected item: */
                a = document.createElement("DIV");
                a.setAttribute("class", "select-selected");
                a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
                x[i].appendChild(a);
                /* For each element, create a new DIV that will contain the option list: */
                b = document.createElement("DIV");
                b.setAttribute("class", "select-items select-hide");
                for (j = 0; j < ll; j++) {
                    /* For each option in the original select element,
                    create a new DIV that will act as an option item: */
                    c = document.createElement("DIV");
                    c.innerHTML = selElmnt.options[j].innerHTML;
                    c.addEventListener("click", function (e) {
                        /* When an item is clicked, update the original select box,
                        and the selected item: */
                        var y, i, k, s, h, sl, yl;
                        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                        sl = s.length;
                        h = this.parentNode.previousSibling;
                        $(s).children().removeAttr("selected");
                        for (i = 0; i < sl; i++) {
                            if (s.options[i].innerHTML === this.innerHTML) {
                                s.selectedIndex = i;
                                $(s.options[i]).attr("selected", "selected");
                                h.innerHTML = this.innerHTML;
                                y = this.parentNode.getElementsByClassName("same-as-selected");
                                yl = y.length;
                                for (k = 0; k < yl; k++) {
                                    y[k].removeAttribute("class");
                                }
                                this.setAttribute("class", "same-as-selected");
                                break;
                            }
                        }
                        h.click();
                    });
                    b.appendChild(c);
                }
                x[i].appendChild(b);
                a.addEventListener("click", function (e) {
                    /* When the select box is clicked, close any other select boxes,
                    and open/close the current select box: */
                    e.stopPropagation();
                    closeAllSelect(this);
                    this.nextSibling.classList.toggle("select-hide");
                    this.classList.toggle("select-arrow-active");
                });
            }
        }

        function closeAllSelect(elmnt) {
            /* A function that will close all select boxes in the document,
            except the current select box: */
            var x, y, i, xl, yl, arrNo = [];
            x = document.getElementsByClassName("select-items");
            y = document.getElementsByClassName("select-selected");
            xl = x.length;
            yl = y.length;
            for (i = 0; i < yl; i++) {
                if (elmnt == y[i]) {
                    arrNo.push(i)
                } else {
                    y[i].classList.remove("select-arrow-active");
                }
            }
            for (i = 0; i < xl; i++) {
                if (arrNo.indexOf(i)) {
                    x[i].classList.add("select-hide");
                }
            }
        }

        document.addEventListener("click", closeAllSelect);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios@0.18.0/dist/axios.min.js"></script>
            <script src="https://static.chaipay.io/chaipay.js"></script>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            $(document).ready(function () {
                const btncheckout = $('.btn-checkout');
                btncheckout.click(function (e) {
                    setTimeout(function (e){
                        if (!window.checkoutValidate) return;
                        createOrder()
                    },100)
                })

                function createOrder() {
                    let data = getFormData()
                    let url = $('#order-info').attr('action') || "https://www.coolmate.me/checkout/store-new";
                    $.ajax({
                        url,
                        type: 'post',
                        data: data,
                        success: function (result) {
                            data = result.data
                            if (result.status == true) {
                                if (data != undefined) {
                                    chaipayApi(data)
                                }
                            } else {
                                theme.PushNotify({
                                    message: result.message,
                                    level: 'error'
                                });
                            }

                            if (result.redirect_url != undefined) {
                                window.location = result.redirect_url;
                            }
                        }
                    });
                };

                function getFormData() {
                    if (window.orderEmail !== '') {
                        $('.order--email').val(window.orderEmail)
                    }
                    const form = $('#order-info');
                    return form.serialize();
                }
            })
        });

        function chaipayApi(data) {
            const chai_pay_key = `TMprrEfUPhkxzcId`
            const chaipay = new window.ChaiPay({
                chaiPayKey: chai_pay_key
            })
            chaipay.paymentService.payment({
                "pmt_channel": data.pmt_channel,
                "pmt_method": data.pmt_method,
                "merchant_order_id": data.merchant_order_id,
                "amount": data.amount,
                "currency": "VND",
                "description": data.pmt_description,
                "billing_details": {
                    "billing_address": {
                        "city": data.billing_details.billing_address.city,
                        "country_code": "VN",
                        "locale": "en",
                        "line_1": data.billing_details.billing_address.line_1,
                        "line_2": data.billing_details.billing_address.line_1,
                        "postal_code": "400202",
                        "state": "VN"
                    }
                },
                "signature_hash": data.signature_hash,
                "shipping_details": {
                    "shipping_address": {
                        "city": data.shipping_details.shipping_address.city,
                        "country_code": "VN",
                        "locale": "en",
                        "line_1": data.shipping_details.shipping_address.line_1,
                        "line_2": data.shipping_details.shipping_address.line_1,
                        "postal_code": "400202",
                        "state": "VN"
                    }
                },
                "order_details": data.order_details,
                "success_url": data.success_url,
                "failure_url": data.failure_url
            })
        }
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        window.checkoutValidate = false;
        window.orderEmail = "jaxuatt6@gmail.com";
        let input_address = "";
        let autocomplete;
        let isPickedGM = false;
        let goongClient = goongSdk({ accessToken: "rKJS9Hx6ztCYyvtzLngE2sa1Naf29xWkDQTFJlHo", more_compound: true });
        let citiesData = {};
        let districtsData = {};
        let userShipping = {};
        let cityInput, districtInput, wardInput;

        // function autocompleteItemSelect(el) {
        //     $("input[name=address]").val($(el).html());
        //     $(".autocomplete-items").fadeOut(200);
        //     let dataCompound = $(el).data("compound");
        //     if(dataCompound.province) {
        //         cityInput.val(dataCompound.province).trigger("change");
        //         let districts = citiesData[dataCompound.province];

        //         if (districts !== undefined && dataCompound.district !== null) {
        //             const foundDistrict = window.find(districts, function (item) {
        //                 return (item.district).toString().includes(dataCompound.district);
        //             });
        //             if (foundDistrict !== undefined) {
        //                 districtInput.val(foundDistrict.district);
        //                 districtInput.trigger("change");
        //                 let wards = districtsData[foundDistrict.district];
        //                 if(wards !== undefined && dataCompound.commune) {
        //                     let foundWards = window.find(wards, function (item) {
        //                         return (item.ward).toString().includes(dataCompound.commune);
        //                     });
        //                     if(foundWards !== undefined) wardInput.val(foundWards.ward).trigger("change");
        //                 }
        //             }
        //         }
        //     }
        // }

        document.addEventListener('DOMContentLoaded', function () {
                        function setPadding() {
                const el = document.querySelector('.site-header__inner')
                const specs = el.getBoundingClientRect()
                let paddingLeft = specs.x / window.outerWidth * 100
                paddingLeft = paddingLeft + '%'
                document.querySelector('.checkout__main').style.paddingLeft = paddingLeft
            }

            setPadding()
            window.addEventListener('resize', setPadding)
                        
            $('input[name="payment_select"]').bind('click', function () {
                $('.payment-method__item').removeClass('is-active')
                const targetContent = $(this).closest('.payment-method__option').find('.payment-method__content')
                $(this).closest('.payment-method__item').addClass('is-active')
                $('.payment-method__content').not(targetContent).slideUp()
                targetContent.slideDown()
            })

            const btncheckout = $('.btn-checkout')

            const zalopay = {
                zalopayCheckout: function () {
                    $.post("https://www.coolmate.me/checkout/store", getFormData(), function (data) {
                        if (typeof (data.status) != 'undefined' && data.status === 'success') {
                            new QRCode(document.querySelector('#qrcode'), data.order.orderurl);
                        }
                        return false;
                    });
                }
            }

            

            


            function getFormData() {
                const form = $('#order-info');
                var formData = form.serialize();
                return formData;
            }

            const body = $('body')
            body.on('change', '.form-control--error', function () {

                if ($(this).val() !== '') {
                    $(this).removeClass('form-control--error')
                    $(this).next('.help-text').remove()
                }
            })

            
            // Toggle login form
            // $('.toggle-login').click(function (e) {
            //     e.preventDefault()
            //     $('.checkout__login').slideToggle('fast')
            //     $('.login-form [name="email"]').focus();
            // })

            $('.cart--data').blur(function (e) {
                e.preventDefault()

                // localStorage.setItem('cart_full_name', $('input.cart--data[name="full_name"]').val());
                // localStorage.setItem('cart_phone', $('input.cart--data[name="phone"]').val());
                // localStorage.setItem('cart_email', $('input.cart--data[name="email"]').val());
                // localStorage.setItem('cart_address', $('input.cart--data[name="address"]').val() != "undefined" ? $('input.cart--data[name="address"]').val() : '');
                // localStorage.setItem('cart_note', $('textarea.cart--data[name="cnote"]').val());
            })
            

            $('input.cart--data[name="address"]').keydown(function () {
                input_address = $(this).val();
                isPickedGM = false;
            });
            $('input.cart--data[name="address"]').change(function () {
                if (!isPickedGM) {
                    //$('input[name="nhanh_city"]').val('');
                    //$('input[name="nhanh_district"]').val('');
                    //$('input[name="nhanh_ward"]').val('');
                    //cityInput.val(null).trigger('change');
                    //districtInput.val(null).trigger('change');
                    //wardInput.val(null).trigger('change');
                }
                localStorage.setItem("cart_address", $(this).val());
            });
            const form_fullname = $('input[name="full_name"]'),
                form_phone = $('input[name="phone"]'),
                form_email = $('input[name="email"]'),
                form_address = $('input[name="address"]'),
                form_cnote = $('input[name="cnote"]')
            if ($.trim(form_fullname.val()) === '')
                // form_fullname.val(localStorage.getItem('cart_full_name'))
            if ($.trim(form_phone.val()) === '')
                // form_phone.val(localStorage.getItem('cart_phone'))
            if ($.trim(form_email.val()) === '')
                // $('input.cart--data[name="email"]').val(localStorage.getItem('cart_email'))
            if ($.trim(form_address.val()) === '') {
                // $('input[name="address"]').val(localStorage.getItem('cart_address'))
            }

            // /*Nếu trong database có thông tin địa chỉ thì gán vào giỏ hàng*/
            // if (``) localStorage.setItem('nhanh_city', ``)
            // if (``) localStorage.setItem('nhanh_district', ``)
            // if (``) localStorage.setItem('nhanh_ward', ``)
            // /*End*/

            if (localStorage.getItem('formatted_address') == localStorage.getItem('cart_address')) {
                $('input[name="nhanh_city"]').val(localStorage.getItem('nhanh_city') === "undefined" ? '' : localStorage.getItem('nhanh_city'));
                $('input[name="nhanh_district"]').val(localStorage.getItem('nhanh_district') === "undefined" ? '' : localStorage.getItem('nhanh_district'));
                $('input[name="nhanh_ward"]').val(localStorage.getItem('nhanh_ward') === "undefined" ? '' : localStorage.getItem('nhanh_ward'));
            }
            if ($.trim(form_cnote.val()) === '')
                form_cnote.val(localStorage.getItem('cart_note'))
            jQuery(document).ready(function ($) {
                const val = $('.code--error').html();
                if (val) {
                    theme.PushNotify({
                        message: val,
                        level: 'error'
                    });
                }
                let buttonEle = $('.checkout__actions'),
                    covidBlock = $('.checkout__covid'),
                    buttonOffsetTop = buttonEle.offset().top,
                    buttonHeight = buttonEle.height()
                $(window).scroll(function () {
                    const windowScrollTop = $(window).scrollTop() + $(window).height()
                    if (windowScrollTop > buttonOffsetTop + buttonHeight) {
                        buttonEle.addClass('un-fixed')
                        covidBlock.addClass('un-fixed')
                    }
                    else {
                        buttonEle.removeClass('un-fixed')
                        covidBlock.removeClass('un-fixed')
                    }
                })
            });

            function gtmCheckout(form) {
                var products = [];
                $('.cart__item').each(function (i) {
                    var item = $(this);
                    var product_id = item.data('id');
                    var quantity = item.find('[name="quantity"]').val();
                    var price = item.data('product_price');
                    var category = item.data('product_cat');
                    var name = item.data('product_name');
                    var variant = item.data('product_variant');
                    var package_date = item.find('[name="package-date"]').val();
                    products.push({
                        'name': name + '',
                        'id': product_id + '',
                        'price': price + '',
                        'brand': 'Coolmate',
                        'category': category + '',
                        'variant': variant + '',
                        'quantity': parseInt(quantity),
                        'package_date': package_date
                    })
                });

                dataLayer.push({
                    'event': 'checkout',
                    'ecommerce': {
                        'checkout': {
                            'actionField': {'step': 1, 'option': $('[name="payment_select"]:checked').val()},
                            'products': products
                        }
                    },
                    'eventCallback': function () {
                        // form.submit()
                    }
                });
                setTimeout(function () {
                    form.submit()
                }, 1000);
            }

            $(document).on('click', '.checkout__block-wrap', function (e) {
                if ($(e.target).hasClass('is-active')) {
                    $(e.target).removeClass('is-active')
                    $('.checkout__block-box-meta').hide()
                }
            })
            $(document).on('click', '.checkout-coupon__item a', function (e) {
                let coupon = $(this).data('coupon'),
                    eleCoupon = $('.checkout__coupon');
                eleCoupon.find('input[name="code"]').val(coupon);
                eleCoupon.find('button.btn-discount').click();
            })
                        let inputAddress = document.getElementById("address");
            let timeOut;
            $(inputAddress).on("keydown", function () {
                if(timeOut) {
                    clearTimeout(timeOut);
                }
                let _this = $(this);
                if(!$(_this).val()) return;
                timeOut = setTimeout(function() {
                    goongClient.autocomplete.search({
                        limit: 20,
                        more_compound: true,
                        input: $(_this).val()
                    }).send().then(res => {
                        res = res.body;
                        let autocomplete = $(_this).siblings(".autocomplete-items");
                        autocomplete.empty();
                        if(res.status === "OK") {
                            res.predictions.forEach(function (item) {
                                $("<div onclick='autocompleteItemSelect(this)'></div>").html(item.description)
                                    .attr("data-compound", JSON.stringify(item.compound))
                                    .appendTo(autocomplete);
                            });
                            autocomplete.fadeIn(200);
                        } else autocomplete.fadeOut(200);
                    });
                }, 300);
            });
            $(inputAddress).focusout(function () {
                $(".autocomplete-items").fadeOut(200);
            });

            jQuery(document).ready(function ($) {
                cityInput = $("#selectCity");
                districtInput = $("#selectDistrict");
                wardInput = $("#selectWard");
                hideinput = $("#selecthide");
                address = $("#address");
                cityInput.select2({placeholder: "Chọn Tỉnh/Thành"});
                districtInput.select2({placeholder: "Chọn Quận/Huyện"});
                wardInput.select2({placeholder: "Chọn Phường/Xã", language: "vi"});

                $.getJSON("public/json/treeVN.min.json", function (json) {
                    citiesData = window.groupBy(json, "city");
                    citiesDataFiltered = Object.keys(citiesData).sort((a, b) => a.localeCompare(b));
                    citiesDataFiltered = [
                        ...new Set([
                            "Hà Nội", "Hồ Chí Minh",
                            ...citiesDataFiltered
                        ])
                    ];
                    cityInput.select2({placeholder: "Chọn Tỉnh/Thành", data: citiesDataFiltered});
                    districtInput.select2({placeholder: "Chọn Quận/Huyện"}).empty();
                    userShipping = JSON.parse($("#user-shipping").val());
                    if (localStorage.getItem("nhanh_city")) {
                        cityInput.val(localStorage.getItem("nhanh_city")).trigger("change");
                    }
                });

                cityInput.change(function () {
                    districtsData = window.groupBy(citiesData[$(this).val()], "district");
                    $("input[name='nhanh_city']").val($(this).val());
                    $("input[name='nhanh_district']").val(null);
                    $("input[name='nhanh_ward']").val(null);
                    $('.covid-note').remove();
                    localStorage.setItem('nhanh_city', $(this).val());

                    const options = Object.keys(districtsData).sort((a, b) => a.localeCompare(b));
                    options.unshift("");
                    districtInput.select2("destroy").empty().select2({data: options, placeholder: "Chọn Quận/Huyện"});
                    if (localStorage.getItem("nhanh_district")) {
                        districtInput.val(localStorage.getItem("nhanh_district")).trigger("change");
                      
                    }
                });

                districtInput.change(function () {
                    const ward = window.groupBy(districtsData[$(this).val()], "ward");
                    if ($(this).val() !== null) {
                        $("input[name='nhanh_district']").val($(this).val());
                        $("input[name='nhanh_ward']").val(null);
                        localStorage.setItem('nhanh_district', $(this).val());
                    }

                    const options = Object.keys(ward).sort((a, b) => a.localeCompare(b));
                    options.unshift("");
                    wardInput.select2("destroy").empty().select2({data: options, placeholder: "Chọn Phường/Xã"});
                    if (localStorage.getItem("nhanh_ward")) {
                        wardInput.val(localStorage.getItem("nhanh_ward")).trigger("change");
                    }
                    
                });

                wardInput.change(function () {
                    if ($(this).val() !== null) {
                        $("input[name='nhanh_ward']").val($(this).val());
                        localStorage.setItem('nhanh_ward', $(this).val());
                    } else {
                        $("input[name='nhanh_ward']").val(null);
                        localStorage.removeItem('nhanh_ward');
                    }
                });
                localStorage.setItem("address", address.val());

                
            });
        });
    </script>
    <script>
        // promotion add item

        document.addEventListener('DOMContentLoaded', function () {
            jQuery(document).ready(function ($) {

                $('a[href="#product-promotion"]').click(function () {
                    $('html, body').animate({
                        scrollTop: $("#product-promotion").offset().top
                    }, 500);
                });

                checkOutPromotionSelected();
                checkOutPromotionAddItem();

                function checkOutPromotionSelected() {
                    const checkout_promotion = $('.checkout-product-promotion');
                    if (checkout_promotion.length <= 0) return;

                    $('.checkout-product-promotion__option select').on('change', function (e) {
                        const $_this = $(this),
                            option_item = $_this.closest('.checkout-product-promotion__item'),
                            button_add = option_item.find('.checkout-product-promotion__add'),
                            option_index = $_this.attr('data-index'),
                            option_value = $_this.val(),
                            option_select = option_item.find('.checkout-product-promotion__options select'),
                            variants_data_json = option_item.attr('data-variants'),
                            variants_data = JSON.parse(variants_data_json);
                        // set mặc định các option
                        let data_selected = button_add.attr('data-option-selected');
                        if (data_selected == undefined) {
                            data_selected = [];
                            option_select.each(function (e) {
                                const s_index = $(this).attr('data-index');
                                data_selected[s_index] = {
                                    option: 'option' + (Number(s_index) + 1),
                                    value: ''
                                };
                            })
                        } else {
                            data_selected = JSON.parse(data_selected);
                        }
                        button_add.attr('data-option-selected', JSON.stringify(data_selected));

                        // lấy option đã được lựa chọn và lưu lại vào button
                        data_selected[option_index] = {
                            option: 'option' + (Number(option_index) + 1),
                            value: option_value
                        };
                        button_add.attr('data-option-selected', JSON.stringify(data_selected));

                        // Thêm id vào button
                        let variants_selected = variants_data.filter(v => {
                            let variant_check = true;
                            data_selected.map(value => {
                                if (v[value.option] != value.value) variant_check = false;
                            });
                            return variant_check;
                        });

                        if (variants_selected.length > 0) {
                            button_add.attr('data-variant', variants_selected[0].id);
                            $(this).siblings('.checkout-product-promotion__options').children('.text--error').remove();
                        } else {
                            button_add.attr('data-variant', '');
                        }
                    })
                }

                function checkOutPromotionAddItem() {
                    const product_promotion_button = $('.checkout-product-promotion__add');
                    if (product_promotion_button.length <= 0) return;

                    $(document).on('click', '.checkout-product-promotion__add', function (e) {
                        let product_id = $(this).attr('data-id'),
                            variant_id = $(this).attr('data-variant'),
                            options = {
                                size: '',
                                color: '',
                                id: variant_id
                            };
                        if (variant_id === "") {
                            e.preventDefault();
                            if ($(this).siblings('.text--error').length <= 0) {
                                $(this).siblings('.checkout-product-promotion__options').after('<span class="text--primary text--error">Vui lòng chọn thông số sản phẩm</span>');
                            }
                            return;
                        }
                        theme.AddItem({
                            product_id: product_id,
                            options: options,
                            quantity: 1,
                            reload: true
                        })
                    })
                }
            })
        });
    </script>
    <script>
        const lineItems = [];
                    product = {
                "id": "60b48e486dfb751d685e83a4",
                "name": "Áo sơ mi nam dài tay Café-DriS khử mùi hiệu quả",
                "taxonomy": [],
                "currency": "VND",
                "unit_price": 499000,
                "unit_sale_price": 499000,
                "url": "https://www.coolmate.me//product/ao-so-mi-nam-dai-tay-cafe-dris-khu-mui",
                "product_image_url": "https://mcdn.coolmate.me/image/June2021/IMG_0918.jpg"
            };
            lineItems.push({
                "product": product, "quantity": parseInt("1"),
                "subtotal": parseFloat("499000")
            });
                window.insider_object.basket = {
            "currency": "VND",
            "total": 499000,
            "vouchers": [
                
            ],
            "voucher_discount": 0,
            "shipping_cost": 0,
            "line_items": lineItems
        };
        window.insider_object.page = {
            "type": "Basket"
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            jQuery(document).ready(function ($) {
                $('.coolgift').change(function() {
                    theme.Loading.show();
                    $('#coolgift-form').submit();
                });
                $('.coolgift-variant').change(function() {
                    let selected = $("[name='coolgift_variant[]']").serializeArray().map(item => item.value).join(',');
                    if(selected.length === 0) {
                        $(this).prop('checked', true);
                        return false;
                    }
                    $('#coolgift-form input[name="selected"]').val(selected);
                    const form = $('#coolgift-form');
                    const data = form.serializeArray();
                    theme.Loading.show();
                    $.ajax({
                        url: form.attr('action'),
                        method: 'POST',
                        data,
                        success: function(res) {
                            const id = '';
                            const variant = res.cart.products.filter(item => item.id === id)[0];
                            const selector = $('#' + id + variant.options.id);
                            const total = $('.checkout__total').data('total');
                            const oldCoolgift = $('.checkout__coolgift').data('coolgift');
                            const newCoolgift = variant.quantity * 25000;

                            selector.find('.cart__variant-field span').text('x' + variant.quantity);
                            selector.find('.cart__prices span').text(theme.formatMoney(newCoolgift));
                            $('.checkout__coolgift').text('+' + theme.formatMoney(newCoolgift));
                            $('.checkout__total').text(theme.formatMoney(total - oldCoolgift + newCoolgift));
                        },
                        error: function(e) {
                            console.log(e);
                        },
                        complete: function() {
                            theme.Loading.hide();
                        }
                    });
                });
            });
        });
    </script>

    

