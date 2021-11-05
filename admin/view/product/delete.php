<?php
if(Helper::is_submit('deleteprd')){
    $prd = new product();
    $prd->setId(Helper::input_value('id'));
    
    if(!empty($prd) && productDB::deleteProduct($prd)){
        Helper::redirect_js(Helper::get_url('admin/?c=listprd'));
    }
    
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
                                    <h5>Xác nhận thông tin</h5>
<h6>Bạn có muốn xóa sản phẩm này không ?</h6>
<form action="" method="post">
    <table>
        <tr>
            <td>
                <input type="hidden" name="action" value="deleteprd">
                <input type="submit" value="Chấp nhận">
            </td>
            <td>
                <a href="<?php echo Helper::get_url('admin/?c=listprd'); ?>">Không</a>
            </td>
        </tr>
    </table>
</form>
							</div>
						</div>	</div>
						</div>
						<!-- End Row -->


					</div>
				</div>
			</div>