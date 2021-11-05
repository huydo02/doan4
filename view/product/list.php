<br><br><br><br>
<?php

if(isset($_GET['idcat'])){
    $prds = productDB::getProductByCat(Helper::input_value('idcat'));
    $dm = catDB::getCatById(Helper::input_value('idcat'));
if(!empty($dm)){
$title ='Danh sách sản phẩm thuộc danh mục '. $dm->getNamecat();
}
}else if(isset($_GET['brand'])){
    $prds = productDB::getProductBybrand(Helper::input_value('brand'));
   
    $dms = CatDB::getCat();
    $clr = brandDB::getBrandByName(Helper::input_value('brand'));
    if(!empty($clr)){
        $title ='Danh sách sản phẩm thuộc hãng '. $clr->getNamebrand();
        }   

}
?>
<div class="site-content">
        <div class="container">
        <div class="collection-header__filter">
            <div class="flex">
                <h2 class="text--bold" style="text-transform: uppercase"><?php echo !empty($dm)?$dm->getNamecat():'' ?> </h2>
            </div>
        </div>
        <div class="collection-variant-filter">
            <div class="collection-variant-filter__title">
                Xem theo:
            </div>
            <div class="collection-header__sub-cat">
                                                    <div class="collection-design collection-design__one--row">
              <div class="collection-design__header">
          <div class="flex justify--between align--start">
            <div class="collection-title">
              Kiểu dáng
            </div>
          </div>
        </div>
            <div class="collection-design__list">
                                                      <button class="collection-design__item " data-slug="dai-tay" data-slug_checked="">
                              <span class="collection-design__item--title">Dài tay</span>
                          </button>
                                              <button class="collection-design__item " data-slug="ngan-tay" data-slug_checked="">
                              <span class="collection-design__item--title">Ngắn tay</span>
                          </button>
                        </div>
    </div>
      <div class="collection-design collection-design__one--row">
              <div class="collection-design__header">
          <div class="flex justify--between align--start">
            <div class="collection-title">
              Chất liệu
            </div>
          </div>
        </div>
            <div class="collection-design__list">
                                                      <button class="collection-design__item " data-slug="modal-go-soi" data-slug_checked="">
                              <span class="collection-design__item--title">Modal (Gỗ sồi)</span>
                              <span class="collection-design__item--sub-title">Mát như lụa</span>  
                          </button>
                                              <button class="collection-design__item " data-slug="bamboo-tre" data-slug_checked="">
                              <span class="collection-design__item--title">Bamboo (Tre)</span>
                              <span class="collection-design__item--sub-title">Mát, kháng khuẩn</span>  
                          </button>
                                              <button class="collection-design__item " data-slug="cafe" data-slug_checked="">
                              <span class="collection-design__item--title">Café</span>
                              <span class="collection-design__item--sub-title">Khử mùi, nhanh khô</span>  
                          </button>
                        </div>
    </div>
                                  <div class="collection-design collection-design__one--row">
    <div class="collection-design__header">
        <div class="flex justify--between align--start">
            <div class="collection-title">
                Sắp xếp
            </div>
        </div>
    </div>
    <div class="collection-design__list">
                    <button class="variant-filter__item collection-sort-act  is-active "
                    data-sort="created_at">
                <span class="variant-filter__item--title">
                    Mới nhất
                </span>
            </button>
                    <button class="variant-filter__item collection-sort-act "
                    data-sort="bestseller">
                <span class="variant-filter__item--title">
                    Bán chạy
                </span>
            </button>
                    <button class="variant-filter__item collection-sort-act "
                    data-sort="price-asc">
                <span class="variant-filter__item--title">
                    Giá thấp đến cao
                </span>
            </button>
                    <button class="variant-filter__item collection-sort-act "
                    data-sort="price-desc">
                <span class="variant-filter__item--title">
                    Giá cao đến thấp
                </span>
            </button>
                    <button class="variant-filter__item collection-sort-act "
                    data-sort="percent">
                <span class="variant-filter__item--title">
                    % giảm giá nhiều
                </span>
            </button>
            </div>
</div>            </div>
        </div>
        <div class="collection-filter__keyword">
                    </div>
        <div id="small" class="products-list">
                            <div class="grid product-grid grid--four-columns grid--nospace" data-thumbnail="375_425"
                     data-list="ao-so-mi-nam" data-total_page="1"
                     data-current_page="1">
                     
                   <?php  if (!empty($prds)):
    foreach ($prds as $prd):  
  ?>                   
                     
                     <div class="grid__column">
    <div class="product " id="6125e4a6b4d6960c3b7a9392" data-product="mu-bucket-hat-theu-care-share-handwriting-mau-be" style="height: 100%">
        <div class="product__inner">
            <div class="product__image  product__image--new">
                <a href="<?php echo Helper::get_url('?c=detail&id='.$prd->getId()); ?>">
                                            <img class="lazyload image--hover" src="https://www.coolmate.me/images/placeholder-image.png"  data-src='https://mcdn.coolmate.me/uploads/August2021/2-1-(3)_585x663.jpg' alt="Mũ Bucket Hat thêu Care &amp; Share Handwriting - màu be">
                        <img class="lazyload image--main" src="https://www.coolmate.me/images/placeholder-image.png"  data-src='<?php echo $prd->getThumbnail();?>' alt="Mũ Bucket Hat thêu Care &amp; Share Handwriting - màu be">
                                    </a>
                                                            </div>
            <div class="product__content" style="height: 100%;">
            <h3 class="product__title">
                                    <a href="<?php echo Helper::get_url('?c=detail&id='.$prd->getId()); ?>"> <?php echo $prd->getTitle(); ?></a>
                            </h3>
            <div class="product__rating">
                                    <div class="product-single__rating">
                        <a href="<?php echo Helper::get_url('?c=detail&id='.$prd->getId()); ?>#reviews" style="color: #4A90E2">
                            <span class="text--bold text--primary">4.7/5</span>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.806 4.51433H7.32683L5.903 0L4.47917 4.51433H0L3.81967 7.29167L2.08333 11.806L5.903 9.028L9.72267 11.806L7.98633 7.29167L11.806 4.51433Z" fill="#FA6400"/>
                            </svg>
                            <span>(Xem 3 đánh giá)</span>
                        </a>
                    </div>
                            </div>
            <div class="product__info">
                <div class="product__prices">
            <span class="product__prices--regular" data-in-sale="" data-price="169000"><?php echo $prd->getPrice(); ?></span>
            








</div>
                
            </div>
                
                <div class="product-pricing-hint__wrapper">
                                                                                                        </div>
                                

                                    <div class="product__variants" data-variants='[{"_id":"61432610a257971a2e4b48f2","id":"51428320","product_id":"6125e4a6b4d6960c3b7a9392","title":"","regular_price":169000,"compare_price":0,"quantity":112,"barcode":"","weight":"","length":"","width":"","sku":"","height":"","option1":"","option2":"","option3":"","option4":"","image":"","sizechart":"","sync_product":[{"label":"MLT_Hand-B_(T\u1ed3n 0)_M\u0169 Bucket Hat th\u00eau Care &amp; Share Handwriting - Be","value":"33981629"}],"youtube_video":"","hide":false,"available":true,"product_title":"M\u0169 Bucket Hat th\u00eau Care & Share \bHandwriting - m\u00e0u be","syncable":true,"updated_at":"2021-10-21 15:15:16","created_at":"2021-08-26 08:40:12"}]' style="height: auto">
                                                                                                                                    <a href="<?php echo Helper::get_url('?c=detail&id='.$prd->getId()); ?>" class="product__add"
                                           data-image="https://www.coolmate.me/images/placeholder/product-1.png"
                                           data-variant="51428320">
                                            <span>Chọn mua</span>
                                        </a>
                                                                                        </div>

                        </div>
        </div>
    </div>
</div>
<?php endforeach; endif; ?>                                                                              
        </div>
                </div>
</div>