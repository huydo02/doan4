
<div class="main-content side-content pt-0">

				<div class="container-fluid">
					<div class="inner-body">

						<!-- Page Header -->
						<div class="page-header">
							<div>
							</div>
						</div>
						<!-- End Page Header -->
                        <h2>Thống kê hôm nay</h2>
                        <!-- Row -->
                        <div class="row row-sm">
   <div class="col-md-12">
      <div class="card custom-card">
         <div class="row row-sm">
            <div class="col-xl-3 col-lg-6 col-sm-6 pe-0 ps-0 bd-r bd-2">
               <div class="card-body text-center">
                  <h6 class="mb-0">Người dùng mới</h6>
                  <h2 class="mb-1 mt-2 number-font"><span class="counter"><?php echo statistic::statistic_today('user')?></span></h2>
                  <p class="mb-0 text-muted"><span class="mb-0 text-danger fs-30 ms-1"><i class="mdi mdi-account-multiple"></i></p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 pe-0 ps-0 bd-r bd-2">
               <div class="card-body text-center">
                  <h6 class="mb-0">Sản phẩm đã bán</h6>
                  <h2 class="mb-1 mt-2 number-font"><span class="counter"><?php echo !empty(statistic::statistic_today('products')['soluong'])?statistic::statistic_today('products')['soluong']:'0'?></span></h2>
                  <p class="mb-0 text-muted"><span class="mb-0 text-primary fs-30 ms-1"><i class="mdi mdi-cube icon-size"></i></p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 pe-0 ps-0 bd-r bd-2">
               <div class="card-body text-center">
                  <h6 class="mb-0">Số đơn hàng</h6>
                  <h2 class="mb-1 mt-2 number-font"><span class="counter"><?php echo statistic::statistic_today('orders')?></span></h2>
                  <p class="mb-0 text-muted"><span class="mb-0 text-danger fs-30 ms-1"><i class="mdi mdi-cart  "></i></p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 pe-0 ps-0">
               <div class="card-body text-center card-order">
                  <h6 class="mb-0">Thu nhập</h6>
                  <h2 class="mb-1 mt-2 number-font"><span class="counter"><?php echo !empty(statistic::statistic_today('income')['thunhap'])?Helper::format_cash(statistic::statistic_today('income')['thunhap']).'đ':'0đ'?></span></h2>
                  <p class="mb-0 text-muted"><span class="mb-0 text-primary fs-30 ms-1"><i class="mdi mdi-currency-usd icon-size "></i></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Row -->
				<!-- Row -->
                <div class="row row-sm">
            
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-order ">
											<label class="main-content-label mb-3 pt-1">Tổng người dùng </label>
											<h2 class="text-right card-item-icon card-icon">
											<i class="mdi mdi-account-multiple icon-size float-left text-primary"></i><span class="font-weight-bold"><?php echo statistic::statistic_system('user')?></span></h2>
											<p class="mb-0 mt-4 text-muted">Hôm nay<span class="float-right">50%</span></p>
										</div>
									</div>
								</div>
							</div>
							<!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-order">
											<label class="main-content-label mb-3 pt-1">Tổng sản phẩm</label>
											<h2 class="text-right"><i class="mdi mdi-cube icon-size float-left text-primary"></i><span class="font-weight-bold"><?php echo statistic::statistic_system('products')?></span></h2>
											<p class="mb-0 mt-4 text-muted">Hôm nay<span class="float-right">$7,893</span></p>
										</div>
									</div>
								</div>
							</div>
							<!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-order">
											<label class="main-content-label mb-3 pt-1">Tổng đơn hàng</label>
											<h2 class="text-right"><i class="mdi mdi-cart icon-size float-left text-primary"></i><span class="font-weight-bold"><?php echo statistic::statistic_system('orders')?></span></h2>
											<p class="mb-0 mt-4 text-muted">Hôm nay<span class="float-right">$4,678</span></p>
										</div>
									</div>
								</div>
							</div>
							<!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-order">
											<label class="main-content-label mb-3 pt-1">Tổng thu nhập</label>
											<h2 class="text-right"><i class="mdi mdi-currency-usd icon-size float-left text-primary"></i><span class="font-weight-bold"><?php echo !empty(statistic::statistic_system('income')['thunhap'])?Helper::format_cash(statistic::statistic_system('income')['thunhap']).'đ':'0đ'?></span></h2>
											<p class="mb-0 mt-4 text-muted">Hôm nay<span class="float-right">3,756</span></p>
										</div>
									</div>
								</div>
							</div>
							<!-- COL END -->
                         
						</div>
						<!-- End Row -->
     

					</div>
				</div>
			</div>
            