<?php 
$order = OrderDB::getOrder();

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
                                    <div class="table-responsive">
               <table class="table table-bordered table-hover mb-0 text-nowrap">
                  <thead>
                     <tr class=" ">
                        <th>Mã đơn</th>
                        <th>Tên người mua</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        
                        <th>Trạng thái</th>
                        <th></th>                      
                     </tr>
                    </thead>
                    <tbody> 
                     <?php if(!empty($order)){?>
                    <?php foreach($order as $item){?>          
     <tr>
       <th>#<?php echo $item->getId()?></th>
       <td><?php echo $item->getFullname()?></td>
       <td>0<?php echo $item->getPhone()?></td>
       <td><?php echo $item->getAddress()?></td>
       <td><?php if($item->getStatus()==1){
           echo '<a class="badge badge-success" >Đã duyệt</a>';
       }else if($item->getStatus()==2){
        echo '<a class="badge badge-primary" onclick="duyet('.$item->getId().')">Duyệt</a> <a class="badge badge-light" onclick="huy('.$item->getId().')">Hủy</a>';
       }else if($item->getStatus()==3){
        echo '<a class="badge badge-light" >Đã hủy</a>';
       }
       ?></td>
        <td><a class="badge badge-warning" href="<?php echo Helper::get_url('admin/don-hang/'.$item->getId().'.html')?>">Xem chi tiết</a></td>
    </tr>
    
    <?php }}?>
                  </tbody>
               </table>
            </div>
							</div>
                            <nav>
	<ul class="pagination">
		<li class="page-item disabled">
		  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
		</li>
		<li class="page-item active"><a class="page-link" href="#">1</a></li>
		<li class="page-item " aria-current="page">
		  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
		</li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
		  <a class="page-link" href="#">Next</a>
		</li>
	</ul>
</nav>  
						</div>
                    
                    </div>
						</div>
						<!-- End Row -->


					</div>
				</div>
			</div>
            
            <script>
                function duyet(id){
                    $.get('../model/api.php', {
				'id': id,
				'action': 'browse'
			}, function(data) {
				location.reload()
			})
                }
                function huy(id){
                    $.get('../model/api.php', {
				'id': id,
				'action': 'cancel'
			}, function(data) {
				location.reload()
			})
                }
            </script>