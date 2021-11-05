<?php
    $dms = CatDB::getCat();
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
														<th>Mã DM</th>
														<th>Tên DM</th>
														<th>Mô tả</th>
														<th>Ảnh minh họa</th>
                                                        <th>Hành Động</th>
													</tr>
												</thead>
												
											
					  
               
<?php
  if (!empty($dms)):
    foreach ($dms as $dm):  
?>                            
												<tbody>
												<tr>
<td>
<h6 class="mg-b-0 mb-2"><?php echo $dm->getIdcat(); ?></h6>

</td>

<td><h6 class="mg-b-0 mb-2"><?php echo $dm->getNamecat(); ?></h6></td>
<td>
	<div class="wrapper-content">
	<p class="mg-b-0 mb-2"><?php echo $dm->getDescriptioncat(); ?></p>
	</div></td>
<td><img src="<?php echo $dm->getThumbnailcat();?>" style="max-width: 100px;"	 alt="danh mục"></td>

<td>
<a class="btn btn-sm btn-info" href="<?php echo Helper::get_url("admin/?c=editcat&id=" .$dm->getIdcat()); ?>"><i class="fe fe-edit-2"></i></a>
<a class="btn btn-sm btn-danger" href="<?php echo Helper::get_url("admin/?c=deletecat&id=" .$dm->getIdcat()); ?>"><i class="fe fe-trash"></i></a>
</td>
</tr>
</tbody>
<?php endforeach; endif; ?>
               
              											
											</table>
                                            <br>
<a class="badge badge-danger" href="<?php echo Helper::get_url('admin/?c=addcat'); ?>">Thêm danh mục</a></small>
        
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->
					</div>
				</div>
			</div>