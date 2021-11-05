<?php
   include_once('model/helper.php');
?>

<base href="<?php  echo Helper::get_url(''); ?>">

<?php
$view = filter_input(INPUT_GET, "v");
$action = filter_input(INPUT_GET, "a");
if (empty($view) || empty($action)) {
   $view = 'common';
   $action = 'home';
}

$path = 'view/' . $view . '/' . $action . '.php';
if (file_exists($path)) {
   include_once($path);
} else {
   header('Location:404.php');
}
?>

