<?php
$dms = CatDB::getCat();
if(Helper::is_submit('addDm')){
    $dm = new category();
	$dm->setNamecat(Helper::input_value('namecat'));
    $dm->setDescriptioncat(Helper::input_value('descriptioncat'));
    $dm->setThumbnailCat(Helper::input_value('thumbnailcat'));
}
if(!empty($dm) && CatDB::addCat($dm)){
    Helper::redirect_js(Helper::get_url('admin/?c=listcat'));
}
?>


<div class="main-content side-content pt-0">

				<div class="container-fluid">
					<div class="inner-body">

						<!-- Page Header -->
						<div class="page-header">
							<div>
							</div>
						</div>
						<!-- End Page Header -->

						<!-- Row -->
						<div class="row row-sm">

						<div class="col-lg-12 col-md-12">
							    	<div class="card custom-card">
									<div class="card-body">
                                    <h5 class="text-primary">Sửa danh mục</h5>
<form action="" method="POST">
<div class="form-group text-left">
                <label>Tiêu đề</label>
                <input placeholder="Title" type="text" name="namecat" class="form-control" >
                <span class="invalid-feedback"></span>
            </div>  
            <div class="form-group text-left">
                <label>Ảnh minh họa</label>
                <input placeholder="Thumbnailcat" type="text" name="thumbnailcat" class="form-control" >
                <span class="invalid-feedback"></span>
            </div> 
            <div class="form-group text-left">
            <label> Mô tả</label>
            <textarea name="descriptioncat" id=""class="form-control " rows="10" value=""></textarea>
            </div>
            <div class="form-group">
                <input type="hidden" name="action" value="addDm" class="form-control">
               	<button type="submit" class="btn btn-ripple btn-main-primary btn-block">Thêm danh mục</button>
            </div>

           
</form>
<p>
    <a href="<?php echo Helper::get_url('admin/.'); ?>">Quản lý danh mục</a>
</p>
							</div>
						</div>	</div>
						</div>
						<!-- End Row -->


					</div>
				</div>
			</div>