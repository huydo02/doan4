<?php
$dm = catDB::getCatById(Helper::input_value('id'));
if(Helper::is_submit('editcat')){
    $dm->setIdcat(Helper::input_value('id'));
    $dm->setNamecat(Helper::input_value('namecat'));
    if(!empty($dm) && catDB::updateCat($dm)){
        Helper::redirect_js(Helper::get_url('admin/danh-muc.html'));
    } Helper::redirect_js(Helper::get_url('admin/danh-muc.html'));
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
<form action="" method="post">
<table>
    <tr>
        <td>Tên danh mục</td>
        <td>
            <input type="text" name="namecat" id="" value="<?php echo !empty($dm)?$dm->getNamecat():'' ?>">
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="hidden" name="action" value="editcat">
            <input type="submit" value="Sửa danh mục">
        </td>
    </tr>
</table>
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