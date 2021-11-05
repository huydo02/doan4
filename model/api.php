<?php 
require_once('helper.php');
if(!empty($_GET)){
    $id = Helper::input_value('id');
    $action = Helper::input_value('action');
	$key = Helper::input_value('key');
    $sql = 'SELECT * FROM product WHERE id = :id';
	$params =['id' => $id];
	Database::db_connect();
    $prd = Database::db_get_row1($sql,$params);
	Database::db_disconnect();
		
    switch ($action) {
		case 'add':
			addToCart($id);
			break;
			case 'delete':
		deleteItem($id);
			break;
			case 'browse':
		browsingOrder($id);
			break;
			case 'cancel':
		cancelOrder($id);
			break;
		case 'search':
			search($key);
			break;
		
	}

}
function deleteItem($id) {
	$cart = [];
	if(isset($_SESSION['cart'])) {
		$cart = $_SESSION['cart'];
	}

	for ($i=0; $i < count($cart); $i++) {
		if($cart[$i]['id'] == $id) {
		array_splice($cart, $i, 1);
			
			break;
		}
	}

	
	$_SESSION['cart'] = $cart;
}

function addToCart($id) {
	$cart = [];
	if(isset($_SESSION['cart'])) {
		$cart = $_SESSION['cart'];
	}
	$isFind = true;
	for ($i=0; $i < count($cart); $i++) {
		if($cart[$i]['id'] == $id) {
			$cart[$i]['num']++;
			$isFind = false;
			break;
		}
	}
  if($isFind){
	  global $prd;
      $prd['num'] = 1;
      $cart[] = $prd; 

	 
  }

  $_SESSION['cart'] = $cart;

}
function browsingOrder($id){
	$status =1;
	OrderDB::updateStatusOrderById($id,$status);
	
}
function cancelOrder($id){
	$status =3;
	OrderDB::updateStatusOrderById($id,$status);
	
}

function search($key){
	$result = productDB::findProducts($key);
	if($result){
		foreach ($result as $item): 
		echo '<a href="" class="product-search">
        <div class="product-search__inner">
            <div class="product-search__image product-search__image--sharktank">
                <img class=" ls-is-cached lazyloaded" src="'.$item->getThumbnail().'" data-src="https://mcdn.coolmate.me/uploads/September2021/BT5A7558_48_585x663.jpg" alt="Áo nam Casual Sweatshirt " style="">
                                                            </div>
            <div class="product-search__content" style="height: 100%;">
            <h3 class="product-search__title">
			'.$item->getTitle().'
                            </h3>
            <div class="product-search__rating">
                                    <div class="product-single__rating">
                        <span style="color: #4A90E2">
                            <span class="text--bold text--primary">4.1/5</span>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.806 4.51433H7.32683L5.903 0L4.47917 4.51433H0L3.81967 7.29167L2.08333 11.806L5.903 9.028L9.72267 11.806L7.98633 7.29167L11.806 4.51433Z" fill="#FA6400"></path>
                            </svg>
                            <span>(Xem 11 đánh giá)</span>
                        </span>
                    </div>
                            </div>
            <div class="product-search__info">
                
                <div class="product-search__prices">
                                            <span class="product-search__prices-regular">'.$item->getPrice().'đ</span>
                                                    <span class="product-search__prices-compare">
                            <del class="product-search__prices-compare">329.000đ</del><span class="text--primary">-10%</span>
                        </span>
                                                            </div>

            </div>

                <div class="product-search__hint">
                                                                                                        </div>
                                
            </div>
        </div>
    </a>
	';
		endforeach;
	}else{
		echo '<div class="grid__column">Không tìm thấy sản phẩm!</div>';
	}
	

	

}

