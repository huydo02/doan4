<?php
if(Helper::is_submit('addprd')){
    $created_at = $updated_at = date('Y-m-d H:s:i');
    $prd = new product();
    $prd->setTitle(Helper::input_value('title'));
    $prd->setPrice(Helper::input_value('price'));
    $prd->setBrand(Helper::input_value('brand'));
    $prd->setContent(Helper::input_value('content'));
    $prd->setThumbnail(Helper::input_value('thumbnail'));
    $prd->setIdcat(Helper::input_value('idcat'));
    $prd->setCreated_at($created_at);
    $prd->setUpdated_at($updated_at);
    
}
if(!empty($prd) && productDB::addProduct($prd)){
    Helper::redirect_js(Helper::get_url('admin/danh-sach-san-pham.html'));
  
}

$dms = CatDB::getCat();
$brs = brandDB::getBrand();

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
                                    <h5 class="text-primary">Thêm sản phẩm</h5>
                                    <form action="" method="post">
            <div class="form-group text-left">
                <label>Tiêu đề</label>
                <input placeholder="Title" type="text" name="title" class="form-control" required>
                <span class="invalid-feedback"></span>
            </div>    
            <div class="form-group text-left">
                <label>Giá bán</label>
                <input placeholder="Price" type="text" name="price" class="form-control " required>
                <span class="invalid-feedback"></span>
            </div> 
             
            <div class="form-group text-left">
                <label>Ảnh minh họa</label>
                <input placeholder="Thumbnail" type="text" name="thumbnail" class="form-control " required>
                <span class="invalid-feedback"></span>
            </div>   

            <div class="form-group text-left">
                <label>Hãng sản xuất</label>
                <select name="brand" id="" class="form-control" required>
                    <option value="">---Chọn Hãng sản xuất---</option>
                <?php
  if (!empty($brs)):
    foreach ($brs as $br):  
  ?> 
                    <option value="<?php echo $br->getNamebrand(); ?>" class="form-control"><?php echo $br->getNamebrand(); ?></option>
                    <?php endforeach; endif; ?> 
                </select>
            </div>  
            <div class="form-group text-left">
                <label>Danh mục</label>
                <select name="idcat" id="" class="form-control" required>
                    <option value="">---Chọn danh mục---</option>
                <?php
  if (!empty($dms)):
    foreach ($dms as $dm):  
  ?> 
                    <option value="<?php echo $dm->getIdcat(); ?>" class="form-control"><?php echo $dm->getNamecat(); ?></option>
                    <?php endforeach; endif; ?> 
                </select>
            </div>  
          
            <div class="form-group text-left">
            <label> Nội dung</label>
            <textarea name="content" id=""class="form-control " rows="10" required></textarea>
            </div>
            <div class="form-group">
                <input type="hidden" name="action" value="addprd" class="form-control">
               	<button type="submit" class="btn btn-ripple btn-main-primary btn-block">Thêm sản phẩm</button>
            </div>
        </form>
<p>
    <a href="<?php echo Helper::get_url('admin/?c=listprd'); ?>">Quản lý sản phẩm</a>
</p>
							</div>
						</div>	</div>
						</div>
						<!-- End Row -->


					</div>
				</div>
			</div>