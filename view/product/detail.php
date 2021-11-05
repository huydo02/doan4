<link href="https://www.coolmate.me/css/product-page.css?v=6U4E6UFpvBWost25q4" rel="stylesheet" type="text/css">
<link href="https://www.coolmate.me/css/review_form.css?v=6U4E6UFpvBWost25q4" rel="stylesheet" type="text/css">
<br><br><br><br>
<?php 
$prd = productDB::getProductById(Helper::input_value('id'));
?>
<div class="site-content">
        <div class="container">
            <div class="breadcrumb">
    <ol class="page-breadcrumb breadcrumb__list flex">
        <li><a class="breadcrumb__item" href="https://www.coolmate.me">Trang chủ</a></li>
                    <li>

                            <a class="breadcrumb__item" href="https://www.coolmate.me/collection/quan-short-nam">Quần Nam</a>
                        </li>
        
    </ol>

</div>            <div class="grid grid--two-columns grid--stackable product-single__header">
                <div class="grid__column">
                    <div class="product-single__images">
    <div id="product-single-thumbnail" class="product-single__thumbnails">
        <div class="thumbnails">
                                    <img class="image  " src=" <?php echo $prd->getThumbnail();?>" alt="">        <img class="image image--main image-lazyload" data-src="">
                    </div>
      
                 
                    </div>
    
    </div>

                </div>
                <div class="grid__column">
                    <div class="product-single__summary">
    <h1 class="product-single__title">
                        <?php echo $prd->getTitle();?>
    </h1>
                
    
                <div class="relative">
                            <div class="product-single__rating">
                <a href="#reviews">
                    <span class="text--bold text--primary">4.9/5</span>
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.806 4.51433H7.32683L5.903 0L4.47917 4.51433H0L3.81967 7.29167L2.08333 11.806L5.903 9.028L9.72267 11.806L7.98633 7.29167L11.806 4.51433Z"
                              fill="#FA6400"/>
                    </svg>
                    <span>(Xem 6 đánh giá)</span>
                </a>
            </div>
            </div>
    <input type="hidden" id="product_collection"
           value="Quần Nam">
    <div class="product-single__prices">
        <input type="hidden" value="269000" id="product_price">
                    <span class="product__prices--regular" data-in-sale=""
                  data-price="269000"> <?php echo Helper::format_cash($prd->getPrice());?>đ</span>
                            <span class="product__prices--compare" data-compare-price="299000">
                <del class="product__prices--compare">299.000đ</del>
                <span class="text--primary text--bold">-11%</span>
            </span>

                                </div>

<div class="product-pricing-hint__wrapper">
                        </div>
        
        
    
   
        <div class="product-single__variants">
 
  
        

            <div class="product-single__actions" style="margin-bottom: 10px">
                            <button class="btn btn--primary btn--primary btn-addtocart" onclick="addtocart(<?php echo $prd->getId();?>)" style="width: 100%;display: block"
                        data-id="6152ddb7391f9e1b1d245e32" data-preorder="true" ><span >Thêm vào giỏ hàng</span> <svg xmlns="http://www.w3.org/2000/svg" width="17.213" height="15.928" viewBox="0 0 17.213 15.928">
    <g id="Group_2" data-name="Group 2" transform="translate(5.704 12.9)">
        <g id="Group_1" data-name="Group 1">
            <path id="Path_1" d="M171.17 402.828a1.514 1.514 0 1 0 1.514 1.514 1.516 1.516 0 0 0-1.514-1.514zm0 2.182a.669.669 0 1 1 .669-.669.669.669 0 0 1-.669.669z" fill="currentColor" data-name="Path 1" transform="translate(-169.656 -402.828)"/>
        </g>
    </g>
    <g id="Group_4" data-name="Group 4" transform="translate(11.014 12.9)">
        <g id="Group_3" data-name="Group 3">
            <path id="Path_2" d="M329.115 402.828a1.514 1.514 0 1 0 1.514 1.514 1.516 1.516 0 0 0-1.514-1.514zm0 2.182a.669.669 0 1 1 .669-.669.669.669 0 0 1-.669.669z" fill="currentColor" data-name="Path 2" transform="translate(-327.601 -402.828)"/>
        </g>
    </g>
    <g id="Group_10" data-name="Group 10">
        <g id="Group_9" data-name="Group 9">
            <path id="Path_5" d="M17.022 22.161a.842.842 0 0 0-.655-.311H3.2l-.266-1.291a.846.846 0 0 0-.491-.6l-1.852-.81a.423.423 0 0 0-.337.775l1.855.805 2.045 9.926a.848.848 0 0 0 .828.675h10.125a.423.423 0 1 0 0-.845H4.982l-.249-1.207h10.452a.848.848 0 0 0 .828-.675l1.187-5.738a.842.842 0 0 0-.178-.704zm-1.837 6.272H4.559l-1.182-5.738h12.99z" fill="currentColor" data-name="Path 5" transform="translate(0 -19.114)"/>
        </g>
    </g>
</svg>
                    <div style="margin-left: 10px;display: block;width: 100%;line-height: 0.6;font-weight: 500;" >
                                            </div>
                </button>
            
        </div>
            
    </div>
             
   
                    
    <div class="policy">
        <div class="policy__item">
            <div class="policy__icon">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 473.806 473.806"><path d="M374.456 293.506c-9.7-10.1-21.4-15.5-33.8-15.5-12.3 0-24.1 5.3-34.2 15.4l-31.6 31.5c-2.6-1.4-5.2-2.7-7.7-4-3.6-1.8-7-3.5-9.9-5.3-29.6-18.8-56.5-43.3-82.3-75-12.5-15.8-20.9-29.1-27-42.6 8.2-7.5 15.8-15.3 23.2-22.8 2.8-2.8 5.6-5.7 8.4-8.5 21-21 21-48.2 0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5-6-6.2-12.3-12.6-18.8-18.6-9.7-9.6-21.3-14.7-33.5-14.7s-24 5.1-34 14.7l-.2.2-34 34.3c-12.8 12.8-20.1 28.4-21.7 46.5-2.4 29.2 6.2 56.4 12.8 74.2 16.2 43.7 40.4 84.2 76.5 127.6 43.8 52.3 96.5 93.6 156.7 122.7 23 10.9 53.7 23.8 88 26 2.1.1 4.3.2 6.3.2 23.1 0 42.5-8.3 57.7-24.8.1-.2.3-.3.4-.5 5.2-6.3 11.2-12 17.5-18.1 4.3-4.1 8.7-8.4 13-12.9 9.9-10.3 15.1-22.3 15.1-34.6 0-12.4-5.3-24.3-15.4-34.3l-54.9-55.1zm35.8 105.3c-.1 0-.1.1 0 0-3.9 4.2-7.9 8-12.2 12.2-6.5 6.2-13.1 12.7-19.3 20-10.1 10.8-22 15.9-37.6 15.9-1.5 0-3.1 0-4.6-.1-29.7-1.9-57.3-13.5-78-23.4-56.6-27.4-106.3-66.3-147.6-115.6-34.1-41.1-56.9-79.1-72-119.9-9.3-24.9-12.7-44.3-11.2-62.6 1-11.7 5.5-21.4 13.8-29.7l34.1-34.1c4.9-4.6 10.1-7.1 15.2-7.1 6.3 0 11.4 3.8 14.6 7l.3.3c6.1 5.7 11.9 11.6 18 17.9 3.1 3.2 6.3 6.4 9.5 9.7l27.3 27.3c10.6 10.6 10.6 20.4 0 31-2.9 2.9-5.7 5.8-8.6 8.6-8.4 8.6-16.4 16.6-25.1 24.4-.2.2-.4.3-.5.5-8.6 8.6-7 17-5.2 22.7l.3.9c7.1 17.2 17.1 33.4 32.3 52.7l.1.1c27.6 34 56.7 60.5 88.8 80.8 4.1 2.6 8.3 4.7 12.3 6.7 3.6 1.8 7 3.5 9.9 5.3.4.2.8.5 1.2.7 3.4 1.7 6.6 2.5 9.9 2.5 8.3 0 13.5-5.2 15.2-6.9l34.2-34.2c3.4-3.4 8.8-7.5 15.1-7.5 6.2 0 11.3 3.9 14.4 7.3l.2.2 55.1 55.1c10.3 10.2 10.3 20.7.1 31.3zM256.056 112.706c26.2 4.4 50 16.8 69 35.8s31.3 42.8 35.8 69c1.1 6.6 6.8 11.2 13.3 11.2.8 0 1.5-.1 2.3-.2 7.4-1.2 12.3-8.2 11.1-15.6-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3 3.7-15.6 11s3.5 14.4 10.9 15.6zM473.256 209.006c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2 3.7-15.5 11-1.2 7.4 3.7 14.3 11.1 15.6 46.6 7.9 89.1 30 122.9 63.7 33.8 33.8 55.8 76.3 63.7 122.9 1.1 6.6 6.8 11.2 13.3 11.2.8 0 1.5-.1 2.3-.2 7.3-1.1 12.3-8.1 11-15.4z"/></svg>
                </a>
            </div>
            <div class="policy__title">
                <a href="#">
                    Hotline <a href="tel: 1900272737" class="text--primary" style="font-weight: bold">1900.27.27.37</a> hỗ trợ từ 8h30 - 22h mỗi ngày
                </a>
            </div>
        </div>
        <div class="policy__item">
            <div class="policy__icon">
                <a href="#">

                    <svg id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m483.687 259.454h-43.042v-116.299c0-15.475-12.59-28.064-28.064-28.064h-64.771v-27.882c0-15.003-12.206-27.208-27.208-27.208h-293.394c-15.002 0-27.208 12.205-27.208 27.208v11.997c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-11.997c0-6.731 5.477-12.208 12.208-12.208h293.393c6.731 0 12.208 5.477 12.208 12.208v236.213h-317.809v-189.051c0-4.143-3.358-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v254.23c0 15.003 12.206 27.208 27.208 27.208h17.236c3.771 20.56 21.821 36.189 43.454 36.189s39.683-15.629 43.454-36.189h119.307c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-119.14c-3.369-21.04-21.647-37.167-43.622-37.167s-40.252 16.128-43.621 37.168h-17.068c-6.731 0-12.208-5.477-12.208-12.208v-50.18h317.809v62.388h-47.749c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5h97.266c3.771 20.56 21.821 36.189 43.453 36.189s39.683-15.629 43.454-36.189h14.702c15.475 0 28.064-12.59 28.064-28.064v-99.978c.001-15.613-12.7-28.314-28.312-28.314zm-395.79 119.189c16.089 0 29.178 13.089 29.178 29.178s-13.089 29.179-29.178 29.179-29.178-13.09-29.178-29.179 13.09-29.178 29.178-29.178zm337.883 58.356c-16.089 0-29.178-13.09-29.178-29.179s13.089-29.178 29.178-29.178 29.178 13.089 29.178 29.178-13.089 29.179-29.178 29.179zm71.22-108.567h-19.959c-4.135 0-7.5-3.364-7.5-7.5s3.364-7.5 7.5-7.5h19.959zm0-30h-19.959c-12.406 0-22.5 10.094-22.5 22.5s10.093 22.5 22.5 22.5h19.959v44.313c0 7.204-5.861 13.064-13.064 13.064h-14.534c-3.369-21.04-21.647-37.167-43.622-37.167s-40.252 16.127-43.621 37.167h-34.35v-270.718h64.771c7.204 0 13.064 5.86 13.064 13.064v1.747h-50.213c-4.142 0-7.5 3.357-7.5 7.5v114.552c0 4.143 3.358 7.5 7.5 7.5h108.255c7.341 0 13.313 5.973 13.313 13.313v10.665zm-71.355-138.53v99.552h-42.713v-99.552z"/><path d="m392.772 298.432h-17.34c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5h17.34c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5z"/><path d="m217.895 182.443c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-29.982c-4.142 0-7.5 3.357-7.5 7.5v59.983c0 4.143 3.358 7.5 7.5 7.5h29.982c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-22.482v-14.991h22.482c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-22.482v-14.992z"/><path d="m276.877 182.443c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-29.982c-4.142 0-7.5 3.357-7.5 7.5v59.983c0 4.143 3.358 7.5 7.5 7.5h29.982c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-22.482v-14.991h22.482c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-22.482v-14.992z"/><path d="m100.913 182.443c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-29.982c-4.142 0-7.5 3.357-7.5 7.5v59.983c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-22.491h22.482c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-22.482v-14.992z"/><path d="m166.413 204.936v-29.992c0-4.143-3.358-7.5-7.5-7.5h-29.982c-4.142 0-7.5 3.357-7.5 7.5v59.983c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-20.195l16.242 24.356c1.445 2.168 3.823 3.34 6.247 3.34 1.43 0 2.875-.408 4.154-1.261 3.446-2.299 4.377-6.955 2.079-10.401l-12.224-18.33h5.984c4.142 0 7.5-3.358 7.5-7.5zm-15-7.5h-14.982v-14.992h14.982z"/></g></svg>
                </a>
            </div>
            <div class="policy__title">
                <a href="#">
                    Miễn phí vận chuyển <b class="text--primary">Cho đơn hàng trên 300k</b>
                </a>
            </div>
        </div>
        <div class="policy__item">
            <div class="policy__icon">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47 47"><defs></defs><title>policy</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon fill="currentColor" points="44.17 0 37 7.27 33.83 4.05 31 6.92 37 13 47 2.87 44.17 0"/><path id="Fill-2" fill="currentColor" d="M37.21,25.56V17.75L18.6,8,0,17.75v19.5L18.6,47,30,41a16.31,16.31,0,0,0,2.06,2.55A16,16,0,0,0,37.21,47a16.15,16.15,0,0,0,5.15-3.42A15.77,15.77,0,0,0,47,32.4V27.5a25.47,25.47,0,0,0-9.79-1.94Zm-20.57,16L3.92,34.9V19.8l12.73,6.67v15.1ZM8.41,17.75,18.6,12.41l10.2,5.34L18.6,23.09ZM28.28,37.52l-7.72,4V26.47L33.29,19.8v6.08a25.66,25.66,0,0,0-5.87,1.62v4.91a15.75,15.75,0,0,0,.86,5.11Zm14.8-5.11a11.79,11.79,0,0,1-3.5,8.41,12,12,0,0,1-2.37,1.83,11.93,11.93,0,0,1-5.88-10.24V30.26a21.69,21.69,0,0,1,5.89-.81,21.42,21.42,0,0,1,5.86.81Z"/></g></g></svg>                </a>
            </div>
            <div class="policy__title">
                <a href="#">
                                            <b class="text--primary">60 ngày</b> đổi trả vì bất kỳ lý do gì
                                    </a>
            </div>
        </div>
        <div class="policy__item">
            <div class="policy__icon">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43 38"><defs></defs><title>Clock</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path fill="currentColor" d="M24.38,0A18.68,18.68,0,0,0,8,10h.36A5.65,5.65,0,0,1,12,11.28,14.43,14.43,0,0,1,24.38,4.17,14.7,14.7,0,0,1,38.92,19,14.72,14.72,0,0,1,24.38,33.87a14.42,14.42,0,0,1-8.26-2.61l-1.93,3.67A18.5,18.5,0,0,0,24.38,38,18.84,18.84,0,0,0,43,19,18.83,18.83,0,0,0,24.38,0Z"/><path fill="currentColor" d="M24.07,8A2.08,2.08,0,0,0,22,10.11v8.78A2.08,2.08,0,0,0,24.07,21h6.86a2.11,2.11,0,0,0,0-4.22H26.14V10.11A2.08,2.08,0,0,0,24.07,8Z"/><path fill="currentColor" d="M13.15,21.94l-2.89.44a.56.56,0,0,1-.63-.53V15.57a1.59,1.59,0,0,0-3-.76L.2,26.79a1.56,1.56,0,0,0,1.62,2.27l2.89-.44a.56.56,0,0,1,.63.53v6.28a1.59,1.59,0,0,0,3,.76l6.5-12a1.57,1.57,0,0,0-1.67-2.27Z"/></g></g></svg>                </a>
            </div>
            <div class="policy__title">
                <a href="#">
                    Giao hàng <b class="text--primary">2-5 ngày</b> (có thể lâu hơn do Covid19)
                </a>
            </div>
        </div>
        <div class="policy__item">
            <div class="policy__icon">
                <a href="#">
                    <svg height="511pt" viewBox="0 1 511 511.999" width="511pt" xmlns="http://www.w3.org/2000/svg"><path d="M498.7 222.695c-.016-.011-.028-.027-.04-.039L289.805 13.81C280.902 4.902 269.066 0 256.477 0c-12.59 0-24.426 4.902-33.332 13.809L14.398 222.55c-.07.07-.144.144-.21.215-18.282 18.386-18.25 48.218.09 66.558 8.378 8.383 19.44 13.235 31.273 13.746.484.047.969.07 1.457.07h8.32v153.696c0 30.418 24.75 55.164 55.168 55.164h81.711c8.285 0 15-6.719 15-15V376.5c0-13.879 11.293-25.168 25.172-25.168h48.195c13.88 0 25.168 11.29 25.168 25.168V497c0 8.281 6.715 15 15 15h81.711c30.422 0 55.168-24.746 55.168-55.164V303.14h7.719c12.586 0 24.422-4.903 33.332-13.813 18.36-18.367 18.367-48.254.027-66.633zm-21.243 45.422a17.03 17.03 0 01-12.117 5.024H442.62c-8.285 0-15 6.714-15 15v168.695c0 13.875-11.289 25.164-25.168 25.164h-66.71V376.5c0-30.418-24.747-55.168-55.169-55.168H232.38c-30.422 0-55.172 24.75-55.172 55.168V482h-66.71c-13.876 0-25.169-11.29-25.169-25.164V288.14c0-8.286-6.715-15-15-15H48a13.9 13.9 0 00-.703-.032c-4.469-.078-8.66-1.851-11.8-4.996-6.68-6.68-6.68-17.55 0-24.234.003 0 .003-.004.007-.008l.012-.012L244.363 35.02A17.003 17.003 0 01256.477 30c4.574 0 8.875 1.781 12.113 5.02l208.8 208.796.098.094c6.645 6.692 6.633 17.54-.031 24.207zm0 0"/></svg>
                </a>
            </div>
            <div class="policy__title">
                <a href="#">
                    Đến <b class="text--primary">tận nơi</b> nhận hàng trả, hoàn tiền trong <b class="text--primary">24h</b>
                </a>
            </div>
        </div>
        <div class="policy__item">
            <div class="policy__icon">
                <a href="#">
                    <svg height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="M256 0C114.84 0 0 114.84 0 256s114.84 256 256 256 256-114.84 256-256S397.16 0 256 0zm0 482C131.383 482 30 380.617 30 256S131.383 30 256 30s226 101.383 226 226-101.383 226-226 226zm0 0"/><path d="M330.883 186.266c10.039-10.04 23.387-15.57 37.586-15.57 14.195 0 27.543 5.53 37.594 15.577 5.859 5.856 15.355 5.852 21.21-.007 5.856-5.86 5.852-15.36-.007-21.215-15.707-15.703-36.59-24.356-58.797-24.356-22.211 0-43.094 8.653-58.801 24.356l-.008.008c-5.86 5.859-5.855 15.351.004 21.21 5.86 5.86 15.36 5.852 21.219-.003zm0 0M105.945 186.266c10.043-10.04 23.39-15.57 37.586-15.57 14.2 0 27.547 5.53 37.598 15.577 5.86 5.856 15.355 5.852 21.21-.007 5.856-5.86 5.852-15.36-.007-21.215-15.707-15.703-36.59-24.356-58.8-24.356-22.208 0-43.09 8.653-58.798 24.356l-.007.008c-5.86 5.859-5.856 15.351.003 21.21s15.36 5.852 21.215-.003zm0 0M416.668 243H95.332c-8.281 0-15 6.715-15 15 0 97.02 78.648 175.668 175.668 175.668S431.668 355.02 431.668 258c0-8.285-6.719-15-15-15zM256 403.668c-75.95 0-137.5-57.77-144.91-130.668h289.82C393.5 345.895 331.957 403.668 256 403.668zm0 0"/></svg>
                </a>
            </div>
            <div class="policy__title">
                                    <a href="#">
                        Đổi trả <b class="text--primary">cực dễ</b> chỉ cần số điện thoại
                    </a>
                            </div>
        </div>

    </div>

       
    </div>
                </div>
            </div>
                                                            <div class="grid">
                <div class="grid__column">
                    <div class="product-single__description">
    <h3 class="product-single__heading">Mô tả chi tiết</h3>
    <div class="product-single__description-content">
    <div class="product-single__features">
        <div class="product-single__features--title">Đặc điểm sản phẩm:</div>
        <ul>
                                            <li >Chất liệu 90% Cotton, 10% Polyester; giúp bạn luôn thoáng không gây bí, khó chịu</li>
                                            <li >Quần Jogger độ dày vừa phải đảm bảo sự thoải mái trong mọi hoạt động </li>
                                            <li >Thiết kế đơn giản, kiểu dáng khoẻ khoắn với túi khoá kéo YKK </li>
                                            <li >Đai chun bo zip kèm dây tiện lợi, vừa vặn với cơ thể </li>
                                            <li >Tự hào sản xuất tại Việt Nam </li>
                    </ul>
    </div>
    </div>
</div>

                </div>
            </div>
            <div class="grid">
                <div class="grid__column">
                                        <div id="reviews" style="position: relative;pointer-events: none;opacity: 0;visibility: hidden;top: -100px"></div>
<div class="product-single__reviews product-single__section">
    <div class="product--review--rating"></div>
    <div class="review-form-popup">
        <div class="review--form loadding">
            <a href="#" class="review-form-popup__close review-form-popup--close">
                <svg height="329pt" viewBox="0 0 329.269 329" width="329pt" xmlns="http://www.w3.org/2000/svg"><path d="M194.8 164.77L323.013 36.555c8.343-8.34 8.343-21.825 0-30.164-8.34-8.34-21.825-8.34-30.164 0L164.633 134.605 36.422 6.391c-8.344-8.34-21.824-8.34-30.164 0-8.344 8.34-8.344 21.824 0 30.164l128.21 128.215L6.259 292.984c-8.344 8.34-8.344 21.825 0 30.164a21.266 21.266 0 0015.082 6.25c5.46 0 10.922-2.09 15.082-6.25l128.21-128.214 128.216 128.214a21.273 21.273 0 0015.082 6.25c5.46 0 10.922-2.09 15.082-6.25 8.343-8.34 8.343-21.824 0-30.164zm0 0" fill="currentColor"/></svg>            </a>
            <div class="review__loading ">
            </div>
            <form method="POST">
                <input type="hidden" name="_token" value="GgoSXJdBGIQWJKe5qvSxw4LvpSlfxZoS6Xgv2QAU">                <div class="review-form-popup__before">
                    <h3>Đánh giá của bạn</h3>
                </div>
                <div class="review-form-popup__container">
                    <div class="form__row">
                        <div class="form__rating flex align--center">
                            <label for="rating" data-rating="0" id="ratingLabel">Đánh giá</label>
                            <div id="review--rating" data-value="10" class="rating--star">
                                                                    <span class="rating--icon rating--icon-none"
                                        data-value="1"><svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
</span>
                                                                    <span class="rating--icon rating--icon-none"
                                        data-value="2"><svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
</span>
                                                                    <span class="rating--icon rating--icon-none"
                                        data-value="3"><svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
</span>
                                                                    <span class="rating--icon rating--icon-none"
                                        data-value="4"><svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
</span>
                                                                    <span class="rating--icon rating--icon-none"
                                        data-value="5"><svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
</span>
                                                                    <span class="rating--icon rating--icon-none"
                                        data-value="6"><svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
</span>
                                                                    <span class="rating--icon rating--icon-none"
                                        data-value="7"><svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
</span>
                                                                    <span class="rating--icon rating--icon-none"
                                        data-value="8"><svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
</span>
                                                                    <span class="rating--icon rating--icon-none"
                                        data-value="9"><svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
</span>
                                                                    <span class="rating--icon rating--icon-none"
                                        data-value="10"><svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
</span>
                                                            </div>
                        </div>
                        <input type="hidden" name="product_id" id="product_id" value="6152ddb7391f9e1b1d245e32">
                        <input type="hidden" name="variant_id" id="variant_id">
                        <input type="hidden" name="user_id" id="user_id"
                            value="">
                        <input type="hidden" name="rating" id="rating">
                        <p class="help-text"></p>
                    </div>
                    <div class="form__row form--color">
                        <label for="message">Bình luận</label>
                        <textarea name="message" class="form__control form__control--full" id="reviewMessage"
                            placeholder="Nhập bình luận của bạn..."></textarea>
                        <p class="help-text"></p>
                    </div>
                                            <div class="review-form__label mgt--20">
                            <b>Ảnh đánh giá (không bắt buộc)</b><br>
                            <span>(Tối đa 5 ảnh)</span>
                        </div>
                        <div class="needsclick dropzone-template" id="dz-container">
                            <div class="dz-message needsclick">
                                <span class="dz-message-image"></span>
                                <span class="dz-message-text">Click để thêm ảnh, hoặc kéo thả ảnh vào đây</span>
                            </div>
                        </div>
                                        <div class="separator">Giúp Coolmate có thêm đánh giá về các tiêu chí khác nữa nhé</div>
                    <div class="form__row">
                        <label for="service_rate" style="margin-bottom: 0">Dịch vụ khách hàng bạn cảm thấy:</label>
                        <span>(Theo mức độ "Tồi tệ - Thất vọng - Hài lòng - Tốt - Tuyệt vời")</span>
                        <div id="service_rating_service" data-value="10" class="rating--star">
                                                            <span class="rating--icon rating--icon-none" data-value="1">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                            <span class="rating--icon rating--icon-none" data-value="2">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                            <span class="rating--icon rating--icon-none" data-value="3">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                            <span class="rating--icon rating--icon-none" data-value="4">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                            <span class="rating--icon rating--icon-none" data-value="5">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                            <span class="rating--icon rating--icon-none" data-value="6">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                            <span class="rating--icon rating--icon-none" data-value="7">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                            <span class="rating--icon rating--icon-none" data-value="8">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                            <span class="rating--icon rating--icon-none" data-value="9">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                            <span class="rating--icon rating--icon-none" data-value="10">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                    </div>
                        <input type="hidden" name="service_rating[service]" id="service_rating_service_value">
                    </div>
                    <div class="form__row">
                        <label for="service_rate" style="margin-bottom: 0">Website mua sắm bạn cảm thấy:</label>
                        <span>(Theo mức độ "Tồi tệ - Thất vọng - Hài lòng - Tốt - Tuyệt vời")</span>
                        <div id="service_rating_website" data-value="10" class="rating--star">
                                                            <span class="rating--icon rating--icon-none" data-value="1">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                            <span class="rating--icon rating--icon-none" data-value="2">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                            <span class="rating--icon rating--icon-none" data-value="3">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                            <span class="rating--icon rating--icon-none" data-value="4">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                            <span class="rating--icon rating--icon-none" data-value="5">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                            <span class="rating--icon rating--icon-none" data-value="6">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                            <span class="rating--icon rating--icon-none" data-value="7">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                            <span class="rating--icon rating--icon-none" data-value="8">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                            <span class="rating--icon rating--icon-none" data-value="9">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                            <span class="rating--icon rating--icon-none" data-value="10">
                                <svg width="16.82" height="15.99" viewBox="0 0 16.816 15.993">
    <path class="star--full" style="transform: translate3d(6%, 10%, 0);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path class="star--half" style="transform: translate3d(6%, 10%, 0);clip-path: polygon(0 0, 50% 1%, 50% 100%, 0% 100%);" d="M7.33 0L9.6 4.6l5.07.73L11 8.9l.86 5.05-4.53-2.38-4.53 2.38.87-5.05L0 5.33l5.07-.74z" fill="#e3aa29"/>
    <path d="M8.4 1.13l2.27 4.6 5.07.73-3.67 3.57.87 5.05L8.4 12.7l-4.54 2.38.87-5.05-3.67-3.57 5.07-.74z" fill="none" stroke="#e5ab07"/>
</svg>
                            </span>
                                                    </div>
                        <input type="hidden" name="service_rating[website]" id="service_rating_website_value">
                    </div>
                    <div class="form__row checkbox-group">
                        <label for="service_rate">Bạn có sẵn sàng giới thiệu Coolmate với bạn bè chứ?</label>
                        <div class="radiobox-group radiobox-group--inline review-form-popup__radio">
                            <label class="radiobox" for="introduce_accept_1">
                                <input type="radio" id="introduce_accept_1" name="service_rating[intro]" value="1"
                                       onclick="checkBoxSelected(this.id)" checked/>
                                <span>Chắc chắn rồi</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radiobox" for="introduce_accept_2">
                            <input type="radio" id="introduce_accept_2" name="service_rating[intro]" value="0"
                                   onclick="checkBoxSelected(this.id)">
                                <span>Chắc không đâu</span>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="review-form-popup__after">
                    <div class="flex justify--end">
                        <button class="btn btn--outline btn--review btn--gray btn--size" style="position: relative">
                            <svg width="16.54" height="8.35">
    <path d="M12.56 7.95a.34.34 0 11-.47-.47l2.96-2.96H.64a.34.34 0 01-.34-.34.34.34 0 01.34-.33h14.41L12.1.87a.34.34 0 11.47-.47l3.54 3.54a.34.34 0 010 .47z" data-name="Path 67" fill="currentColor" stroke="currentColor" stroke-width=".6"/>
</svg>
<span class="loading--search"></span>
                        </button>
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

           
    <script defer src="https://www.coolmate.me/js/vendors/photoswipe.min.js"></script>
    <script defer src="https://www.coolmate.me/js/vendors/photoswipe-ui-default.min.js"></script>
    <script defer src="https://www.coolmate.me/js/vendors/slick.min.js"></script>

    <script defer type="text/javascript" src="https://www.coolmate.me/js/vendors/jquery.lazy.min.js">
    </script>

    <script type="application/json" id="product-data"
        data-quantity-limit="0">
    </script>
    <script type="application/json" id="images-data">
        [{"id":"3a074ee8","src":"\/image\/September2021\/BT5A7575.jpg"}]
    </script>
    <script type="application/json" id="images-option-data">
        [{"title":"M\u00e0u s\u1eafc","options_id":"color","options":[{"title":"Xanh R\u00eau Nh\u1ea1t","slug":"xanh-reu-nhat","label":"","image":[{"id":"9bfa65ac","src":"\/image\/October2021\/xam-4.jpg"},{"id":"aecf83b2","src":"\/image\/September2021\/xsm.jpg"},{"id":"8d30974d","src":"\/image\/September2021\/xsm-2.jpg"},{"id":"8e2f7afd","src":"\/image\/September2021\/xsm-3.jpg"},{"id":"9cf8cbd8","src":"\/image\/September2021\/IMG_7256.jpg"}]},{"title":"Xanh Navy","slug":"xanh-navy","label":"","image":[{"id":"06a6fef4","src":"\/image\/October2021\/navyf.jpg"},{"id":"846eed87","src":"\/image\/September2021\/navy2.jpg"},{"id":"693b6dbb","src":"\/image\/September2021\/navy2-2.jpg"},{"id":"a2e8f6b0","src":"\/image\/September2021\/navy-5.jpg"},{"id":"57576f6c","src":"\/image\/September2021\/IMG_7249.jpg"}]},{"title":"\u0110en","slug":"den","label":"","image":[{"id":"1af34677","src":"\/image\/September2021\/a56_51.jpg"},{"id":"2c7ba641","src":"\/image\/September2021\/den2.jpg"},{"id":"e0ccf670","src":"\/image\/September2021\/den2-3.jpg"},{"id":"527eae60","src":"\/image\/September2021\/den-3_63.jpg"},{"id":"dc97c125","src":"\/image\/September2021\/IMG_7257.jpg"}]}]}]    </script>
        <script>
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({
            'value': 269000
        });
        dataLayer.push({
            'items': {
                'id': '6152ddb7391f9e1b1d245e32',
                'google_business_vertical': 'retail'
            }
        });

        const stringToSlug = function(string) {
            if(string === undefined) return '';
            let slug;

            //Đổi chữ hoa thành chữ thường
            slug = string.toLowerCase();

            //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox có id “slug”
            return slug;
        }

        // * Lấy data variant của sản phẩm
        const getVariantsData = function() {
            let variants = JSON.parse(document.querySelector('#product-data').innerHTML);
            variants.map((v, index) => {
                if (v.hide === true) {
                    variants[index].quantity = 0;
                }
            })
            return variants;
        }

        // * lấy thông tin varian đã được chọn
        const getVariantFromOptions = function() {
            const variants_data = getVariantsData();
            let found
            let selected_values = getCurrentOptions();
            found = find(variants_data, function(variant) {
                return selected_values.every(function(values) {
                    return isEqual(stringToSlug(variant[values.index]), stringToSlug(values.value));
                })
            })
            return found
        }

        // * lấy option được chọn
        const getCurrentOptions = function() {
            let currentOptions
            const options = $('.product-single__variant--option');

            currentOptions = options.map(function(index, element) {
                let currentOption = {};
                currentOption.value = $(element).find('.product-options__item input:checked').val();
                currentOption.index = $(element).attr('data-index');
                return currentOption;
            })

            currentOptions = compact(currentOptions);

            return currentOptions
        }

        // * lấy những variant không đủ điều kiện
        const getVariantsDisabled = function() {
            const variantsData = getVariantsData(),
                quantity_limit = $('#product-data').attr('data-quantity-limit');
            return variantsData.filter((v) => {
                return v.quantity <= quantity_limit;
            })
        }

        // * lấy những variant đủ điều kiện
        const getVariantsActive = function() {
            const variantsData = getVariantsData(),
                quantity_limit = $('#product-data').attr('data-quantity-limit');
            return variantsData.filter((v) => {
                return v.quantity > quantity_limit;
            });
        }

        // * lấy review hiển thị
        const getReviews = function(page, filter) {
            let loading = $('.review_more__loading'),
                btn_more = $('.btn--more'),
                reviewList = $('.reviews--list');
            const product_id = '6152ddb7391f9e1b1d245e32';
            const loadingHtml = '<div class="text--center"><img src="https://www.coolmate.me/images/loading.svg" alt="Loading image" style="width: 30px;height: 30px"></div>';
            loading.addClass('active');
            page = page ? page : 1;
            if(page <= 1){
                reviewList.html(loadingHtml);
            }
            filter = filter ? filter : {
                star: '',
                has_picture_attached: '',
                star_order_by: 'desc'
            };
            filter = {
                ...filter,
                product_id: product_id,
                page: page,
            }

            $.ajax({
                url: "https://www.coolmate.me/reviews",
                type: 'GET',
                data: filter,
                success: function(data) {
                    let {success, html, last_page, total} = data
                    if (success) {
                        btn_more.attr('data-total_page', last_page)
                        btn_more.attr('data-page', page)

                        if (page == 1) {
                            html = html != '' ? html : `<div class="text--center">Chưa có đánh giá<br><i style="font-size: 85%">Hãy mua và đánh giá sản phẩm này nhé!</i></div>`;
                            reviewList.html(html)
                        } else reviewList.append(html)
                        $('.reviews--total strong').html(total)

                        btn_more.attr('data-product-id', filter.product_id)
                        btn_more.attr('data-star', filter.star)
                        btn_more.attr('data-star-order-by', filter.star_order_by)
                        btn_more.attr('data-has-picture-attached', filter.has_picture_attached)
                        btn_more.attr('data-order-by-picture-attached-first', filter.order_by_picture_attached_first)

                        if (Number(page) >= Number(last_page)) {
                            btn_more.hide()
                        } else {
                            btn_more.show()
                        }
                    }
                    loading.removeClass('active')
                }
            });
        };

        // Filter reviews
        const filterReview = function () {
            // reset sort select options
            $(document).on('click', '.all--reviews--filter', function (e) {
                e.preventDefault()
                $('.star-filter-section').children().prop('disabled', false)
                $('.star-filter-section').children().removeClass('is-active')
                $('.review-filter-order-by option').prop('selected', function () {
                    return this.defaultSelected;
                })
            })

            $(document).on('click', '.reviews-filter', function (e) {
                e.preventDefault();
                const page = 1,
                    _this = $(this),
                    star = _this.data('star') ? _this.data('star') : '',
                    orderReviewsDropdown = $('.review-filter-order-by'),
                    star_order_by = orderReviewsDropdown.data('order-by'),
                    isFilter = true;

                if(star !== '') {
                    $('.all--reviews--filter').removeClass('is-active')
                    orderReviewsDropdown.prop('disabled', true)
                } else {
                    $('.all--reviews--filter').addClass('is-active')
                    orderReviewsDropdown.prop('disabled', false)
                }

                let dataFilter = { star, star_order_by, isFilter };

                _this.addClass('is-active');
                _this.siblings('.reviews-filter').removeClass('is-active');
                $('.btn--more').attr('data-is-filter', "true");
                getReviews(page, dataFilter)
            })

            $(document).on('change', '.review-filter-order-by', function (e) {
                e.preventDefault()
                $('.star-filter-section').children().prop('disabled', true)
                const page = 1
                const sortReviewSelect = $('.review-filter-order-by')
                const star = sortReviewSelect.data('star')
                let order_by_picture_attached_first = ''
                let star_order_by = 'desc'
                const isFilter = true;
                switch (sortReviewSelect.val()) {
                    case "order-have-image":
                        order_by_picture_attached_first = true
                        break;
                    case "star-desc":
                        star_order_by = 'desc'
                        break;
                    case "star-asc":
                        star_order_by = 'asc'
                        break
                }
                let dataFilter = { star, order_by_picture_attached_first, star_order_by, isFilter };
                $('.btn--more').attr('data-is-filter', "true");
                getReviews(page, dataFilter)
            });
        }

        // lấy url paramenter
        const getUrlParameter = function(sParam) {
            var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
        };

        // * Lấy dữ liệu Suggestion
        const getDataSuggestion = function() {
            let size = $('#size-suggestion');
            let h = size.attr('data-height'),
                w = size.attr('data-weight'),
                isJeans = size.attr('data-is-jeans'),
                body = size.attr('data-body');

            let url = window.cool_mate_settings.APP_URL + "/tools/size_suggest";
            let data_suggetstion = {
                h: h,
                w: w,
                body: body
            }
            $.ajax({
                url: url,
                dataType: 'json',
                type: 'GET',
                data: data_suggetstion,
                success: function(res) {
                    if (res.success === true) {
                        let pant = res.data.pant;
                        let jeans = res.data.jeans;
                        let tshirt = res.data.shirt;
                        let values = $('.size-suggestion__values');
                        // $('#size-suggestion .size-suggestion__active').slideDown();
                        if(isJeans) {
                            // hiển thị size jeans
                            values.find('.jeans').html(jeans + '<span>Quần</span>');
                            $('.size-suggestion__icon.jeans .value').html(jeans);
                            $('.size-suggestion__icon.jeans').show();
                            return;
                        }
                        // hiển thị size áo
                        values.find('.tshirt').html(tshirt + '<span>Áo</span>');
                        $('.size-suggestion__icon.tshirt .value').html(tshirt);
                        $('.size-suggestion__icon.tshirt').show();
                        // hiên thị size quần
                        values.find('.short').html(pant + '<span>Quần</span>');
                        $('.size-suggestion__icon.short .value').html(pant);
                        $('.size-suggestion__icon.short').show();
                    }
                },
                error: function(data) {
                }
            })
        }

        // * Lấy dữ liệu ảnh chính
        const getImagesData = function() {
            let images = JSON.parse(document.querySelector('#images-data').innerHTML);
            return images;
        }

        // * Lấy dữ liệu ảnh chính
        const getOptionsImagesData = function(option_name = '') {
            if (option_name === '') return [];
            const images_data = JSON.parse(document.querySelector('#images-option-data').innerHTML);
            let options = [];
            images_data.map(function(v){
                if(v) options = v.options;
            })
            if(options.length <= 0) return [];

            let images_option = [];
            options.map(function(v) {
                if (stringToSlug(option_name) === stringToSlug(v.title) || option_name == v.id) images_option = v;
            });

            if (images_option.length <= 0) return [];

            const {image} = images_option;
            return image;
        }

        // * Update lại giá sản phẩm dựa trên variant
        const updatePrices = function(variant) {
            let {
                compare_price,
                regular_price
            } = variant
            const bgOnePrice = localStorage.getItem("BG_ONE_CAMPAIGN");
            const $price = $('.product__prices--regular')
            const $sale_price = $('.product__prices--compare .product__prices--compare');
            let $perecnt = $sale_price.siblings('span.text--bold');
            let percent = compare_price > regular_price ? Math.ceil(100 - (regular_price / compare_price * 100)) + '%' : 0;

            if(parseInt(regular_price) <= bgOnePrice && cool_mate_settings.BG_ONE_CAMPAIGN == true && $($price).data("in-sale") != 1) {
                $price.html(theme.formatMoney(0));
                $sale_price.html(theme.formatMoney(regular_price))
                if(percent){
                    $perecnt.html('-' + percent);
                }
            } else {
                $price.html(theme.formatMoney(regular_price));
                $sale_price.html(theme.formatMoney(compare_price));
                if(percent){
                    $perecnt.html('-' + percent);
                }
            }
        }
        // * Update thông tin nut Add to cart
        const updateAddToCart = function(variant) {
            const $button = $('.btn-addtocart'),
                buttonActive = $('.active--addtocat');

            const quantity_limit = $('#product-data').attr('data-quantity-limit');

            if (variant) {
                const {quantity} = variant;
                if ($('.product-preview__variant').length > 0 && $('.product-preview__variant-item').length === 0) {
                    $button.find('span').text('Sản phẩm hết hàng')
                    $button.prop('disabled', true)
                    buttonActive.find('.label').text('Sản phẩm hết hàng')
                    buttonActive.prop('disabled', true)
                } else {
                    if (quantity <= quantity_limit) {
                        $button.find('span').text('Biến thể ' + variant.title + ' Hết hàng')
                        $button.prop('disabled', true)
                        buttonActive.find('.label').text('Biến thể ' + variant.title + ' Hết hàng')
                        buttonActive.prop('disabled', true)
                    } else {
                        let text = 'MUA';
                        if ($button.attr('data-preorder') === 'true') {
                            text = 'ĐẶT TRƯỚC';
                        }
                        $button.find('span').text(text + ' ' + variant.title)
                        $button.attr('disabled', false)
                        buttonActive.find('.label').text(variant.title)
                        buttonActive.attr('disabled', false)
                    }
                }
                $('.product-single__prices').show()
            } else {
                $button.find('span').text(' Hàng không có sẵn')
                $button.prop('disabled', true)
                buttonActive.find('.label').text('Hàng không có sẵn')
                buttonActive.prop('disabled', true)
                $('.product-single__prices').hide()
            }
        }

        // * Thay đổi max số lượng sản phẩm có thể thêm vào giỏ hàng 
        const updateMaxQuantity = function(variant) {
            if (typeof variant !== "object") return;
            $('.quantity-button').removeClass('is-disabled');
            let max = variant.quantity > 0 ? variant.quantity : 1;
            const input = $('.product-single__variant-quantity input[type="number"]');
            if (input.val() > max) input.val(max);
            input.attr('max', max);

        }

        // * thay đổi option trong header product
        const updateOptionProductHeader = function(option) {
            const option_index = option.parents('.product-single__variant--option').data('index'),
                option_value = option.val(),
                ele_header = $('.single-product__header').find('[data-index="' + option_index + '"]');
            ele_header.find('.option').removeClass('is-active');
            $('.single-product__header .option').removeClass('is-disabled');
            ele_header.find('.option[data-value="' + option_value + '"]').addClass('is-active');

            $(".product-options__item.is-disabled").each(function(e) {
                const _this = $(this);
                const value = _this.find('input').val();
                const index = _this.parents('.product-single__variant--option').data('index');
                const header = $('.single-product__header').find('[data-index="' + index + '"]');
                header.find('.option[data-value="' + value + '"]').addClass('is-disabled');
            })
        }

        // * disabled option không đủ điều kiện
        const updateOptionDisabled = function() {
            const variants_active = getVariantsActive(),
                variantsOptionElement = $('.product-single__variant--option'),
                optionItemElement = $('.product-options__item');

            let current_option = getCurrentOptions();

            if(current_option.filter( v => !v.value).length > 1) return;

            current_option.forEach(function(option, index) {
                current_option[index].options = variants_active.filter(function(value) {
                    let check = true;

                    for(let i = 1;i <= index;i++){
                        if(value['option' + i]  === current_option[i - 1]['value'] && check){
                            check = true;
                        }else{
                            check = false;
                        }
                    }

                    return check;
                });
            });

            optionItemElement.addClass('is-disabled');
            variantsOptionElement.each(function(e) {
                const _this = $(this),
                    option_index = _this.attr('data-index');

                current_option.map(function(option) {
                    if (option.index === option_index) {
                        option.options.map(function(v) {
                            _this.find('input[value="' + v[option_index] + '"]').parents('.product-options__item').removeClass('is-disabled');
                        })
                    }
                })
            })
        }

        // * Thay đổi hình ảnh theo option được chọn
        const updateImageByOption = function(option) {
            if($('#product-single-thumbs').attr('data-image-option') == 'false') return;
            const value = option.val();
            const images_option = getOptionsImagesData(value);
            if (images_option.length <= 0 || images_option == undefined) return;
            let html = '';

            images_option.map((v, i) => {
                const src = theme.GetImage(v.src, '160_181');
                html += `<a href="#" class="image" 
                                data-image-id="${v.id}" 
                                data-index="${i + 1}"
                                style="background-image: url('${src}');"></a>`;
            });

            const count_image = images_option.length;

            const thumbs = $('#product-single-thumbs');

            thumbs.attr('data-image-default', 'false');
            thumbs.attr('data-image-option', 'true');
            thumbs.attr('data-option-name', value);
            thumbs.find('.product-single__gallery').html(html);
            let image = thumbs.find('.product-single__gallery').children('.image').first();
            handleImageThumbnail(image);

            $('#product-single-thumbnail .images-count').html('<span>1</span>/' + count_image);
        }

        // * Thêm thông tin google khi nhấn thêm sản phẩm vào giỏ hàng
        const gaTriggerAddtoCart = function(ctaButton) {
            const product_id = ctaButton.data('id')
            const quantity = $('input[name="quantity"]').val()
            const variant_label = ctaButton.closest('.product-single__summary').find(
                '.product-preview__variant-item.is-active input').val()
            const product_name = ctaButton.closest('.product-single__summary').find('.product-single__title').text()
            const product_category = ctaButton.closest('.product-single__summary').find('#product_collection').val()
            const product_price = ctaButton.closest('.product-single__summary').find('#product_price').val()
            dataLayer.push({
                "event": "addToCart",
                "ecommerce": {
                    "currencyCode": "VND",
                    "add": {
                        "products": [{
                            "id": product_id,
                            "name": product_name.replace(/['"]+/g, ''),
                            "price": product_price,
                            "brand": "Coolmate",
                            "category": product_category,
                            "variant": variant_label, //optional, if there is a variant of the product
                            "quantity": quantity
                        }]
                    }
                }
            });
        }

        const changeUrlParameterByOptionColor = function(option) {
            const option_name = option.attr('name');

            if (!option_name.includes('color')) return;

            const option_value = option.val();
            let url = new URL(window.location);
            let search_params = url.searchParams;
            search_params.set('color', option_value);
            url.search = search_params.toString();
            let new_url = url.toString();

            window.history.pushState({}, '', new_url);
        }

        const sizeSuggetstionActiveByOption = function(options) {
            options.each(function (e){
                const option = $(this);
                const size_suggetstion_active = option.parents('.product-single__variant--option').find(
                    '.product-options__variant--meta[data-size="' + option.val() + '"]');
                size_suggetstion_active.siblings().removeClass('is-active');
                size_suggetstion_active.addClass('is-active');
            })
        }

        const handleDefaultOptionActive = function (){
            const option = $('.product-options__item input:checked');
            sizeSuggetstionActiveByOption(option);
            // updateOptionProductHeader(option);
        }

        const optionSwitch = function() {
            const option = $('.product-options__item input');
            if (option.length < 0) return;

            option.on('change', function(e) {
                e.preventDefault();
                const _this = $(this);
                updateOptionDisabled();
                updateImageByOption(_this);
                updateOptionProductHeader(_this);
                sizeSuggetstionActiveByOption(_this);

                let current_option = getCurrentOptions();
                if(current_option.filter( v => !v.value).length >= 1) return;

                $('.product-single__options').removeClass('is-error');
                const variant = getVariantFromOptions();
                updateAddToCart(variant);
                if (!variant) return;

                updateMaxQuantity(variant);
                updatePrices(variant);

                $('input[name="id"]').val(variant.id);
            })
        }

        const changeOptionInHeader = function() {
            const ele = '.single-product__header .option';
            $(document).on('click', ele, function(e) {
                e.preventDefault();
                const _this = $(this),
                    value = _this.data('value'),
                    option = _this.parents('.options__item').data('index'),
                    input = $('.product-single__variant--option[data-index="' + option + '"] input[value="' +  value + '"]');
                _this.addClass('is-active');
                _this.siblings().removeClass('is-active');
                input.first().parent().trigger('click');
            });
        }

        const relatedProducts = function() {
            $('.product-single__related-list').slick({
                slidesToShow: 4,
                prevArrow: '<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"><g transform="rotate(180 11 11)"><circle cx="11" cy="11" r="11" data-name="Ellipse 39" fill="#fff"/><g data-name="next (1)"><path d="M11 0a11 11 0 1 0 11 11A11 11 0 0 0 11 0zm3.143 12.917L10.08 16.98l-1.918-1.917L12.226 11 8.162 6.937 10.08 5.02l4.063 4.063L16.06 11z" data-name="Path 195" fill="#e2e2e2"/></g></g></svg></button>',
                nextArrow: '<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"><g><circle cx="11" cy="11" r="11" data-name="Ellipse 39" fill="#fff"/><g data-name="next (1)"><path d="M11 0a11 11 0 1 0 11 11A11 11 0 0 0 11 0zm3.143 12.917L10.08 16.98l-1.918-1.917L12.226 11 8.162 6.937 10.08 5.02l4.063 4.063L16.06 11z" data-name="Path 195" fill="#e2e2e2"/></g></g></svg></button>',
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            centerMode: true
                        }
                    },
                    {
                        breakpoint: 400,
                        settings: {
                            slidesToShow: 1,
                            centerMode: true
                        }
                    }
                ]
            })
        }

        // * header quick add 
        const headerQuickAddToCart = function(e) {
            let header = $('.product-single__header');
            if (header.length <= 0) return;

            header_offset = header.offset().top + header.height();

            $(window).scroll(function(e) {
                if ($(this).scrollTop() > header_offset) {
                    $('.single-product__header').addClass('is-active');
                } else {
                    $('.single-product__header').removeClass('is-active');
                }
            })

            $(document).on('click', '.active--addtocat', function(e) {
                $('.btn-addtocart').click()
            })
        }

        const changeImageThumbnail = function(image,index,length) {
            $('#product-single-thumbnail .thumbnails .image--main').css({
                'background-image': 'url("' + theme.GetImage(image[0].src) + '")'
            });
        }

        const changeImageDefault = function(_this) {
            const images_option = getImagesData();
            const image_id = _this.attr('data-image-id'),
                index = _this.attr('data-index');

            const image = images_option.filter((v,i) => {
                return v.id == image_id;
            });

            _this.siblings().removeClass('is-current');
            _this.addClass('is-current');

            $('#product-single-thumbnail .images-count span').html(index);

            changeImageThumbnail(image,index,images_option.length);
        }

        const changeImageOptions = function(_this, option_name) {
            const images_option = getOptionsImagesData(option_name),
                image_id = _this.attr('data-image-id'),
                index = _this.attr('data-index');


            const image = images_option.filter((v,i) => {
                return v.id == image_id;
            });

            _this.siblings().removeClass('is-current');
            _this.addClass('is-current');

            $('#product-single-thumbnail .images-count span').html(index);

            changeImageThumbnail(image,index,images_option.length);
        }

        // * Xử lý update image thumbnail theo image thumbs
        const handleImageThumbnail = function (_this) {
            const thumbnail = _this.parents('#product-single-thumbs'),
                option_default = thumbnail.attr('data-image-default'),
                images_option = thumbnail.attr('data-image-option'),
                option_name = thumbnail.attr('data-option-name'),
                video = $('#product-single--video');

            if (video.length > 0 && video.hasClass('is-active')){
                video.trigger('click');
            }

            if (images_option == 'true' && option_default != 'true') {
                changeImageOptions(_this, option_name);
            } else {
                changeImageDefault(_this);
            }
        }
        // * đổi trạng thái image
        const imageSwitch = function() {
            $(document).on('click', '#product-single-thumbs .product-single__gallery .image', function(e) {
                e.preventDefault();
                const _this = $(this);
                handleImageThumbnail(_this);
            });
        }

        const changeQuantity = function() {

            $(document).on('click', '.quantity-up', function(e) {
                e.preventDefault();

                const input = $('.product-single__variant-quantity input[type="number"]');
                const max = input.attr('max');
                $('.quantity-down').removeClass('is-disabled');
                let oldValue = parseFloat(input.val());

                if (oldValue >= max) {
                    $('.quantity-up').addClass('is-disabled');
                    var newVal = max;
                } else {
                    var newVal = oldValue + 1;
                }

                input.val(newVal);
                input.trigger("change");

            });

            $(document).on('click', '.quantity-down', function(e) {
                e.preventDefault();
                const input = $('.product-single__variant-quantity input[type="number"]');
                const min = input.attr('min');
                $('.quantity-up').removeClass('is-disabled');
                let oldValue = parseFloat(input.val());

                if (oldValue <= min) {
                    $('.quantity-down').addClass('is-disabled');
                    var newVal = min;
                } else {
                    var newVal = oldValue - 1;
                }

                input.val(newVal);
                input.trigger("change");
            });
        }

        const addTocart = function() {
            $(document).on('click', '.btn-addtocart', function(e) {
                e.preventDefault()

                let current_option = getCurrentOptions();
                if(current_option.filter( v => !v.value).length >= 1) {

                    $('.product-single__options').addClass('is-error');

                    theme.PushNotify({
                      message: 'Vui lòng chọn biến thể sản phẩm!',
                      level: 'error'
                    })
                    theme.scrollTo('.product-single__summary');
                    return;
                }

                const product_id = $(this).data('id')
                const quantity = $('input[name="quantity"]').val()
                const variant_id = $(this).closest('.product-single__summary').find('[name="id"]').val()
                let data = {}
                $('.product-single__radius').map(function(index, item) {
                    const option = $(item).data('id')
                    const value = $(item).find('.product-single__variant--radius:checked').val()
                    data[option] = value
                })
                data['id'] = variant_id
                theme.AddItem({
                    product_id: product_id,
                    options: data,
                    quantity: Number(quantity),
                    reload: cool_mate_settings.RELOAD_AFTER_AJAX_CALLED == 1
                })

                gaTriggerAddtoCart($(this));
            });
        }

        const photoSwipe = function() {
            var pswpElement = document.querySelectorAll('.pswp')[0];

            const thumbnail = $('#product-single-thumbs'),
                option_default = thumbnail.attr('data-image-default'),
                images_option = thumbnail.attr('data-image-option'),
                option_name = thumbnail.attr('data-option-name'),
                index = thumbnail.find('.image.is-current').attr('data-index');

            let images = [];
            if (images_option == 'true' && option_default != 'true') {
                images = getOptionsImagesData(option_name);
            } else {
                images = getImagesData();
            }

            if (images.length <= 0) return;
            // build items array
            let items = []

            images.map((v) => {
                items.push({
                    src: theme.GetImage(v.src),
                    w: 1200,
                    h: 1200
                }, )
            });


            // define options (if needed)
            var options = {
                // optionName: 'option value'
                // for example:
                index: Number(index) - 1, // start at first slide
            };

            // Initializes and opens PhotoSwipe
            var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
            gallery.init();
        }

        const photoSwipeTrigger = function() {
            $(document).on('click', '#view-large', function(e) {
                e.preventDefault();
                photoSwipe();
            });
        }

        const orderFormRange = function() {
            let check_mouse = false;
            let order = $('#size-suggestion input');

            let eMousedown = theme.isMobile() ? 'touchstart' : 'mousedown';
            let eMouseup = theme.isMobile() ? 'touchend' : 'mouseup';
            let eMousemove = theme.isMobile() ? 'touchmove' : 'mousemove';

            order.on(eMousedown, function(e) {
                check_mouse = true;
            });

            order.on(eMousemove, function(e) {
                if (check_mouse == true) {
                    let $this = $(this);
                    let value = $this.val();
                    if ($this.attr('name') == 'c-height') {
                        $this.siblings().children('.size-suggestion__size').html(value + 'cm')
                        $('#size-suggestion').attr('data-height', value);
                    }
                    if ($this.attr('name') == 'c-weight') {
                        $this.siblings().children('.size-suggestion__size').html(value + 'kg')
                        $('#size-suggestion').attr('data-weight', value);
                    }
                }
            })


            order.on(eMouseup, function(e) {
                check_mouse = false;
            })
        }

        const productSizeSuggestion = function() {

            $(document).on('click', '.size-suggestion__button', function(e) {
                e.preventDefault();
                let $this = $(this);
                $this.toggleClass('is-active');
                $('#size-suggestion').slideToggle();
            })

            $(document).on('change', '#size-suggestion input', function(e) {
                let $this = $(this);
                let value = $this.val();
                if ($this.attr('name') == 'c-height') {
                    $this.siblings().children('.size-suggestion__size').html(value + 'cm')
                    $('#size-suggestion').attr('data-height', value);
                }
                if ($this.attr('name') == 'c-weight') {
                    $this.siblings().children('.size-suggestion__size').html(value + 'kg')
                    $('#size-suggestion').attr('data-weight', value);
                }
                getDataSuggestion();
            })

            $(document).on('click', '#size-suggestion .size-suggestion__body-size', function(e) {
                e.preventDefault();
                $(this).siblings().removeClass('is-active');
                $(this).addClass('is-active');
                let value = $(this).attr('data-size');
                $('#size-suggestion').attr('data-body', value);
                getDataSuggestion();
            });

            $(document).on('click', '.size-suggestion__close', function(e) {
                e.preventDefault();
                $('.size-suggestion__button').removeClass('is-active')
                $('#size-suggestion').slideUp();
            })

            $(document).on('click', function(e) {
                if (!$(e.target).parents('#size-suggestion').hasClass('is-active') && $(e.target).hasClass(
                        '.size-suggestion__button')) {
                    $('.size-suggestion__button').removeClass('is-active')
                    // $('#size-suggestion').slideUp();
                    $('#size-suggestion').removeClass('is-active');
                }
            })

            orderFormRange();
        }

        function clickVoteProduct() {
            $(document).on('click','.product--vote-open',function (e){
                e.preventDefault();
                const $_this = $(this);
                $_this.parent().addClass('is-comment');
                let local = localStorage.getItem("coolxprint_vote_name");

                if(local != null){
                    $_this.siblings('.product__vote-form').find('input').val(local);
                    runVote($_this.siblings('.product__vote-form').find('.product--vote-button'));
                }
            });
            $(document).on('click','.product--vote-button',function (e){
                e.preventDefault();
                runVote($(this));
            })
        }

        function runVote($_this) {
          const product_id = $_this.attr('data-product-id'),
              designer_id = $_this.attr('data-designer-id'),
              input = $_this.siblings('input');
          let perent = $_this.parents('.is-comment');
          if (input.val() === "") return;
          perent.removeClass('is-comment');
          localStorage.setItem("coolxprint_vote_name", $_this.siblings('input').val());
          const url = 'https://www.coolmate.me/vote-product-of-designer' + '?designer_id=' + designer_id + '&product_id=' + product_id;
          $.ajax({
              url: url,
              type: "GET",
              cache: false,
          }).done(function (res) {
              if (res.success) {
                  theme.PushNotify({
                      message: res.message,
                      level: 'message'
                  });
                  perent.addClass('is-vote');
                  let number = perent.siblings('.product__vote-number').children('span').html();
                  perent.siblings('.product__vote-number').children('span').html(Number(number) + 1);
                  perent.parents('.product__vote').siblings('.product__vote-text').remove();
              } else {
                  $_this.addClass('is-disable');
              }
          }).fail(() => {
              }
          ).always(() => {
              }
          )
      }

        function checkVotedProduct() {
            let voteBtn = $(".product--vote-button");
            const votedProducts = JSON.parse(localStorage.getItem("VOTED_PRODUCTS")) ? JSON.parse(localStorage.getItem("VOTED_PRODUCTS")) : [];
            if(voteBtn.length > 0) {
                voteBtn = voteBtn[0];
                const productID = $(voteBtn).data("product-id");
                if(votedProducts.indexOf(productID) !== -1) {
                    $(voteBtn).parents(".product__vote-button").addClass("is-vote")
                        .children(".product__vote-label").removeClass("product--vote-open")
                        .addClass("is-vote");
                }
            }
        }

        const switchImageThumbnailWithDrag = function () {
            let start_event = false;
            let start_mouse_offset = 0;
            let data_check = '#product-single-thumbnail .thumbnails';
            let image_current = '#product-single-thumbs .product-single__gallery .image.is-current';

            // event mouse
            let mousedown = 'mousedown',
                mousemove = 'mousemove',
                mouseleave = 'mouseleave',
                mouseup = 'mouseup';

            if (theme.isMobile()) {
                mousedown = 'touchstart';
                mousemove = 'touchmove';
                mouseleave = 'touchcancel';
                mouseup = 'touchend';
            }

            $(document).on(mousedown, data_check, function (e) {
                e.preventDefault();
                start_mouse_offset = mousedown === 'touchstart' ? e.changedTouches[0].clientX : e.pageX;

                start_event = true;
                $(this).addClass('keep');
            });

            $(document).on(mousemove, data_check, function (e) {
                e.preventDefault();
                if (start_event === true) {
                    let pageX = mousemove === 'touchmove' ? e.changedTouches[0].clientX : e.pageX;
                    let transition_position = pageX - start_mouse_offset;
                    $(this).css('transform','translateX(' + transition_position + 'px)');
                }
            });

            $(document).on(mouseleave, data_check, function (e) {
                e.preventDefault();
                start_event = false;
                $(this).removeClass('keep');
                $(this).removeAttr('style');
            });

            $(document).on(mouseup, data_check, function (e) {
                e.preventDefault();
                const _this = $(this);
                const image_current = $('#product-single-thumbs .product-single__gallery .is-current');
                const time_animation = 300;

                start_event = false;

                _this.removeClass('keep');
                _this.removeAttr('style');
                _this.addClass('is-load');

                let pageX = mouseup === 'touchend' ? e.changedTouches[0].clientX : e.pageX;
                let check_touch_position = start_mouse_offset - pageX > 0 ? -100 : +100;

                if (start_mouse_offset - pageX > 50 || start_mouse_offset - pageX < -50) {
                    if (start_mouse_offset <= pageX) {
                        _this.addClass('left');
                        _this.removeAttr('style');
                        setTimeout(function(e){
                            if(image_current.prev().length <= 0){
                                image_current.siblings().last().trigger('click');
                            }else{
                                image_current.prev().trigger('click');
                            }
                        },time_animation)

                    } else {
                        _this.addClass('right');
                        _this.removeAttr('style');
                        setTimeout(function(e){
                            if(image_current.next().length <= 0){
                                image_current.siblings().first().trigger('click');
                            }else{
                                image_current.next().trigger('click');
                            }
                        },time_animation)

                    }
                }
                setTimeout(function(e){
                    _this.removeClass('is-load');
                    _this.removeClass('right');
                    _this.removeClass('left');
                    _this.addClass('keep');
                },300)

            });
        }

        function reviews() {
          $(".product--review--rating").on('click', '.btn--rating', function () {
              $('.review-form-popup').addClass('is-open');
              const oldScore = $('#ratingLabel').data('rating');
              $("input[name='rating']").val(oldScore);
              $("#review--rating > span").each(function (key, item) {
                  if ($(item).attr("data-value") <= oldScore) {
                      $(item).addClass("selected");
                  } else $(item).removeClass("selected");
              });
          });

            $(".reviews--list").on('click', '.btn-variant-rating, .btn-variant-rating-mobile', function () {
                $('.review-form-popup').addClass('is-open');
                const oldScore = $(this).data('review-score');
                $("input[name='rating']").val(oldScore);
                $("#review--rating > span").each(function (key, item) {
                    if ($(item).attr("data-value") <= oldScore) {
                        $(item).addClass("selected");
                    } else $(item).removeClass("selected");
                });
                const reviewTarget = $(this).data('review-target');
                $("#reviewMessage").html($(reviewTarget).html());
                $("#ratingLabel").attr("data-rating", $(this).data('review-score'));
                const variantId = $(this).data('variant-id');
                $('#variant_id').val(variantId);
            });

          $(document).on('click', function (e) {
              let container = $('.review-form-popup');
              if (container.attr('class') === $(e.target).attr('class')) {
                  container.removeClass('is-open');
              }
          });

          $(document).on('click', '.review-form-popup--close', function (e) {
              e.preventDefault();
              let container = $('.review-form-popup');
              container.removeClass('is-open');
          })


          $('#review--rating span, #service_rating_service span, #service_rating_website span').on('mouseover', function () {
              var onStar = parseInt($(this).data('value'), 10);
              $(this).parent().children('span.rating--icon').each(function (e) {
                  if (e < onStar) {
                      $(this).addClass('hover');
                  } else {
                      $(this).removeClass('hover');
                  }
              });
          }).on('mouseout', function () {
              $(this).parent().children('span.rating--icon').each(function (e) {
                  $(this).removeClass('hover');
              });
          });
          $('#review--rating span, #service_rating_service span, #service_rating_website span').on('click', function (e) {
              var onStar = parseInt($(this).data('value'), 10);

              var stars = $(this).parent().children('span.rating--icon');
              for (i = 0; i < stars.length; i++) {
                  $(stars[i]).removeClass('selected');
              }
              for (i = 0; i < onStar; i++) {
                  $(stars[i]).addClass('selected');
              }
              let id = $(e.currentTarget).parent("div").attr("id");
              var ratingValue = parseInt($('#' + id + ' span.selected').last().data('value'), 10);
              if ($(e.currentTarget).parent("div").attr("id") === "service_rating_service") {
                  $('#service_rating_service_value').attr('value', ratingValue);
              } else if ($(e.currentTarget).parent("div").attr("id") === "service_rating_website") {
                  $('#service_rating_website_value').attr('value', ratingValue);
              } else $('#rating').attr('value', ratingValue);
          });
      }

      function reviewProduct() {
          var container = $('.review--form form');
          // loading = $('.review__loading')
          container.find('button.btn--review').on('click', function (e) {
              e.preventDefault()
              var _this = this
              $(_this).prop('disabled', true)
              $(_this).children('.loading--search').addClass('active');
              let data = container.serialize() + "&fullname=" + ``;
              data += "&email=" + ``;
              $.ajax({
                  url: "https://www.coolmate.me/reviews",
                  type: 'POST',
                  data: data,
                  success: function (data) {
                      if ($.isEmptyObject(data.error)) {
                          theme.PushNotify({
                              message: 'Đánh giá được gửi thành công',
                              level: 'message'
                          });
                          $('span.rating--icon.selected').removeClass('selected')
                          $('.review--form').slideToggle()
                          $('.help-text').empty()
                          $('#rating').attr('value', '')
                          $('input[name^="media"]').remove();
                          $('.dz-preview').remove();
                          $('.needsclick').show();
                          $('.review-form-popup').removeClass('is-open');
                          window.location.reload();
                      } else {
                          container.find('.form__control--error').removeClass('form__control--error')
                          container.find('.help-text').html('')
                          $.each(data.error, function (key, value) {
                              var _this = container.find('[name="' + key + '"]')
                              _this.addClass('form__control--error');
                              _this.next('.help-text').html(value[0])
                          });
                      }
                      $(_this).prop('disabled', false)
                      $("#service-rating").hide();
                      $(_this).children('.loading--search').removeClass('active')
                  }
              });
          })
      }

      const loadmoreReview = function() {
        $(document).on('click', '.btn--more', function (e) {
            e.preventDefault();
            let page = $(this).attr('data-page'),
                star = $(this).attr('data-star'),
                product_id = $(this).data('product-id'),
                star_order_by = $(this).data('star-order-by'),
                has_picture_attached = $(this).data('has-picture-attached'),
                order_by_picture_attached_first = $(this).data('order-by-picture-attached-first'),
                isFilter = $(this).data('is-filter');
            page = Number(page) + 1
            let filter = {
                product_id,
                star,
                star_order_by,
                has_picture_attached,
                order_by_picture_attached_first,
                isFilter
            }
            $(this).data('page', page);
            getReviews(page, filter);
            });
      }

        // * Show popup hướng dẫn chọn size
        const showPopupSizeGuide = function () {
            $('.btn[data-popup]').click(function() {
                const target =  $(this).data('popup')
                $('.popup[data-popup="' + target + '"]').addClass('popup--active')
                $('html, body').addClass('no-scroll')
            })

            $('.popup__close').click(function() {
                $('.popup').removeClass('popup--active')
                $('html, body').removeClass('no-scroll')
            })
            $(document).on('click',function (e) {
                if($(e.target).hasClass('popup--active')){
                    $(e.target).removeClass('popup--active')
                }
            })
        }

        const reviewImageFull = function (e){

          $(document).on('click','.gallery__item .image',function (e){
              e.preventDefault();
              const _this = $(this),
                  elementGallery = _this.parents('.product-rating__gallery'),
                  elementImages = elementGallery.find('.image'), 
                  index = _this.attr('data-index');

              var pswpElement = document.querySelectorAll('.pswp')[0];

              let items = [];


              elementImages.each(function (e){
                  items.push({
                      src: theme.GetImage($(this).attr('data-image')),
                      w: 1200,
                      h: 1200
                  }, )
              })
              // define options (if needed)
              var options = {
                  index: index,
              };
              // Initializes and opens PhotoSwipe
              var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
              gallery.init();
          })

            $(document).on('click','.review--images .review--images_item',function (e){
                e.preventDefault();
                const _this = $(this),
                    elementGallery = _this.parents('.review--images'),
                    elementImages = elementGallery.find('.review--images_item'),
                    index = _this.attr('data-index');

                var pswpElement = document.querySelectorAll('.pswp')[0];

                let items = [];


                elementImages.each(function (e){
                    items.push({
                        src: $(this).attr('data-med'),
                        w: 1200,
                        h: 1200
                    }, )
                })
                // define options (if needed)
                var options = {
                    index: index,
                };
                // Initializes and opens PhotoSwipe
                var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
                gallery.init();
            })

        }

        document.addEventListener('DOMContentLoaded', function() {
            jQuery(document).ready(function($) {
                updateOptionDisabled();
                optionSwitch();
                imageSwitch();
                headerQuickAddToCart();
                addTocart();
                changeQuantity();
                changeOptionInHeader();
                photoSwipeTrigger();
                productSizeSuggestion();
                clickVoteProduct();
                checkVotedProduct();
                // switchImageThumbnailWithDrag();
                showPopupSizeGuide();
                handleDefaultOptionActive();
                getReviews();
                reviews();
                reviewProduct();
                loadmoreReview();
                filterReview();
                reviewImageFull();
                $('.image-lazyload').Lazy();
            });
        });

    </script>