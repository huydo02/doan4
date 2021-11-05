<?php
$id = Helper::input_value('id');
$order = OrderDB::getOrderById($id);
$total = 0;
if (!empty($order)) {
    $sql = 'SELECT * FROM order_details WHERE order_id=:order_id';
    $params = ['order_id' => $id];
    Database::db_connect();

    $order_detail = Database::db_get_list_condition($sql, $params);
   
} else {
    echo '<script>alert("Đơn hàng không tồn tại")</script>';
    Helper::redirect_js(Helper::get_url('admin/don-hang.html'));
    die();
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
            <div class="ol-lg-6 col-md-6">
                    <div class="card custom-card">
                        <div class="card-body">
 
                            <ul class="list-group">
                            <h5>Thông tin nhận hàng</h5>
                            <li class="list-group-item">Tên người nhận: <b
                                        ><?php echo $order->getFullName(); ?></b></li>
                            <li class="list-group-item">Địa chỉ Email: <b
                                        ><?php echo $order->getEmail(); ?></b></li>
                            <li class="list-group-item">Số điện thoại: <b
                                        ><?php echo $order->getPhone(); ?></b></li>
                            <li class="list-group-item">Hình thức thanh toán: <b
                                        >COD</b></li>
                            <li class="list-group-item">Địa chỉ giao hàng: <b
                                        ><?php echo $order->getAddress(); ?></b>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ol-lg-6 col-md-6">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="text-center">
                                <h2>CHI TIẾT ĐƠN HÀNG #<?= $id ?></h2>
                                <p><?php echo date('H:s:i d-m-Y ',$order->getOrderdate()); ?></p>
                                <div class="mgb--20" style="font-size: 18px">Trạng thái đơn hàng:</div><br>
                               <?php if ($order->getStatus() == 1) {
                                        echo '<button class="btn btn-success">
                                    <span>Đã xác nhận</span>
                                </button><br><a onclick=" huy('.$order->getId().')">Hủy đơn hàng</a>';
                                    } else if ($order->getStatus() == 2) {
                                        echo '<button class="btn btn-primary" onclick=" duyet('.$order->getId().')">
                                                <span>Xác nhận</span>
                                    </button> <button class="btn btn-light" onclick=" huy('.$order->getId().')">Hủy</button>';
                                    } else if ($order->getStatus() == 3) {
                                        echo '<button class="btn btn-light">
                                        <span>Đã bị hủy</span>
                                    </button><br><br><a class="badge badge-warning">Xóa đơn hàng</a>';
                                    }
                                                ?>
                                
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Đơn giá</th>

                                            <th>Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php foreach ($order_detail as $item) : ?>
                                                <?php
                                                $total += $item['num'] * $item['price'];
                                                $prd = productDB::getProductById($item['product_id']); ?>
                                        <tr>
                                            <td style="font-style: italic;background-color: #f2f2f2;">
                                                <a href="" target="_blank">
                                                    <?php echo $prd->getTitle() ?>
                                                </a>
                                            </td>
                                            <td style="font-style: italic;background-color: #f2f2f2;"><?php echo $item['num'] ?></td>
                                            <td style="font-style: italic;background-color: #f2f2f2;"><?php echo number_format($item['price'], 0, '', '.') ?>đ</td>

                                            <td style="font-style: italic;background-color: #f2f2f2;"><?php echo number_format($item['num'] * $item['price'], 0, '', '.') ?>đ</td>
                                        </tr>

                                    <?php endforeach; ?>
                                    <tr>
                                <th colspan="3">Tổng thanh toán</th>
                                <th style="text-align: right;"
                                    class="text--bold"><?=number_format($total, 0, '', '.')?>đ</th>
                            </tr>
                                    </tbody>
                                </table>
                            </div>
                          
                        </div>
                        </div>
                    </div>
              
            </div>
            <!-- End Row -->


        </div>
    </div>
</div>

<script>
    function duyet(id) {
        $.get('../model/api.php', {
            'id': id,
            'action': 'browse'
        }, function(data) {
            location.reload()
        })
    }

    function huy(id) {
        $.get('../model/api.php', {
            'id': id,
            'action': 'cancel'
        }, function(data) {
            location.reload()
        })
    }
</script>