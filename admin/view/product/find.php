<?php
     $search = Helper::input_value('search');
     $prds = ProductDB::findProducts($search);
     

?>
<div class="main-content side-content pt-0">

				<div class="container-fluid">
					<div class="inner-body">

						<!-- Page Header -->
						<div class="page-header">
					
						</div>
						<!-- End Page Header -->

						<!-- Row -->
						<!-- Row -->
						<div class="row row-sm">

							<div class="col-sm-12 col-md-12 col-xl-12">
							<div class="card custom-card" id="brcolor">
									<div class="card-footer">
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th>Mã sản phẩm</th>
														<th>Tên sản phẩm</th>
														<th>Giá bán</th>
														<th>Thumbnail</th>
														<th>Hãng sản xuất</th>
														
														<th>Ngày cập nhật</th>
                                                        <th class="wd-20p">Hành Động</th>
													</tr>
												</thead>
												
											
					  
               
												<?php
  if (!empty($prds)):
    foreach ($prds as $prd):  
  ?>                            
												<tbody>
												<tr>
<td><h6 class="mg-b-0 mb-2"><?php echo $prd->getId(); ?></h6></td>
<td><h6 class="mg-b-0 mb-2"><?php echo $prd->getTitle(); ?></h6></td>
<td><h6 class="mg-b-0 mb-2"><?php echo $prd->getPrice(); ?></h6></td>
<td><img src="<?php echo $prd->getThumbnail();?>" style="max-width: 100px;"	 alt="danh mục"></td>
<td><h6 class="mg-b-0 mb-2"><?php echo $prd->getBrand();?></h6></td>

<td><h6 class="mg-b-0 mb-2"><?php echo $prd->getUpdated_at(); ?></h6></td>
<td>
<a class="badge badge-primary" href="<?php echo Helper::get_url("admin/?c=editprd&id=" .$prd->getId()); ?>">Sửa sản phẩm</a>
<a class="badge badge-danger" href="<?php echo Helper::get_url("admin/?c=deleteprd&id=" .$prd->getId()); ?>">Xóa sản phẩm</a></small>
</td>
</tr>
</tbody>
<?php endforeach; endif; ?>
              											
											</table>
                                            <br>
<a class="badge badge-danger" href="<?php echo Helper::get_url('admin/?c=addprd'); ?>">Thêm sản phẩm</a></small>
        
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->
					</div>
				</div>
			</div>