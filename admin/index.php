<?php
   include_once('../model/helper.php');
?>

<base href="<?php echo Helper::get_url('admin/'); ?>">

<?php
 if(!Form_Authen::is_admin()){
   echo '<script>alert("Bạn không có có quyền truy cập vào trang này vui lòng quay lại")</script>';
      Helper::redirect_js(Helper::get_url('?c=home'));
   }

$view = filter_input(INPUT_GET, "v");
$action = filter_input(INPUT_GET, "a");

if (empty($view) || empty($action)) {
   $view = 'common';
   $action = 'admin';
}

$path = 'view/' . $view . '/' . $action . '.php';
if (file_exists($path)) {
   include_once($path);
} else {
   header('Location:../404.php');
}
?>


