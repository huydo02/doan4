<?php
session_start();
define('TIMEZONE', 'Asia/Ho_Chi_Minh');
date_default_timezone_set(TIMEZONE);
class Helper
{
   public static function rewrite($text)
    {
    	$text = html_entity_decode(trim($text), ENT_QUOTES, 'UTF-8');
    	$text=str_replace(" ","-", $text);
        $text=str_replace("--","-", $text);
    	$text=str_replace("@","-",$text);
        $text=str_replace("/","-",$text);
    	$text=str_replace("\\","-",$text);
        $text=str_replace(":","",$text);
    	$text=str_replace("\"","",$text);
        $text=str_replace("'","",$text);
    	$text=str_replace("<","",$text);
        $text=str_replace(">","",$text);
    	$text=str_replace(",","",$text);
        $text=str_replace("?","",$text);
    	$text=str_replace(";","",$text);
        $text=str_replace(".","",$text);
    	$text=str_replace("[","",$text);
        $text=str_replace("]","",$text);
    	$text=str_replace("(","",$text);
        $text=str_replace(")","",$text);
    	$text=str_replace("́","", $text);
    	$text=str_replace("̀","", $text);
    	$text=str_replace("̃","", $text);
    	$text=str_replace("̣","", $text);
    	$text=str_replace("̉","", $text);
    	$text=str_replace("*","",$text);$text=str_replace("!","",$text);
    	$text=str_replace("$","-",$text);$text=str_replace("&","-and-",$text);
    	$text=str_replace("%","",$text);$text=str_replace("#","",$text);
    	$text=str_replace("^","",$text);$text=str_replace("=","",$text);
    	$text=str_replace("+","",$text);$text=str_replace("~","",$text);
    	$text=str_replace("`","",$text);$text=str_replace("--","-",$text);
    	$text = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $text);
    	$text = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $text);
    	$text = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $text);
    	$text = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $text);
    	$text = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $text);
    	$text = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $text);
    	$text = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $text);
    	$text = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $text);
    	$text = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $text);
    	$text = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $text);
    	$text = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $text);
    	$text = preg_replace("/(đ)/", 'd', $text);
    	$text = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $text);
    	$text = preg_replace("/(đ)/", 'd', $text);
    	$text = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $text);
    	$text = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $text);
    	$text = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $text);
    	$text = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $text);
    	$text = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $text);
    	$text = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $text);
    	$text = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $text);
    	$text = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $text);
    	$text = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $text);
    	$text = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $text);
    	$text = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $text);
    	$text = preg_replace("/(Đ)/", 'D', $text);
    	$text = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $text);
    	$text = preg_replace("/(Đ)/", 'D', $text);
    	$text=strtolower($text);
    	return $text;
    }
    public static function get_url($url = '')
    {
        $uri = filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_STRING);
        $app_path = explode('/', $uri);
        return 'http://' . $_SERVER['HTTP_HOST'] . '/' . $app_path[1] . '/' . $url;
    }

    public static function redirect($url)
    {
        header("Location:{$url}");
        exit();
    }
    public static function redirect_js($url)
	{
		if ($url) {
			echo '<script>window.location.href="' . $url . '"</script>';
		}
    }
    public static function history_back()
	{
			echo '<script> window.history.go(-1); return false;</script>';
		
    }

    public static function input_value($inputname, $filter = FILTER_DEFAULT, $option = FILTER_SANITIZE_STRING)
    {
        $value = filter_input(INPUT_POST, $inputname, $filter, $option);
        if ($value === null) {
            $value = filter_input(INPUT_GET, $inputname, $filter, $option);
        }
        return $value;
    }

    public static function is_submit($hidden)
    {
        return (!empty(self::input_value('action')) && self::input_value('action') == $hidden);
    }

    public static function paging($link, $total_records, $current_page, $limit)
    {
        $total_page = ceil($total_records / $limit);
        // Limit current_page in 1 to total_page
        if ($current_page > $total_page) {
            $current_page = $total_page;
        } else if ($current_page < 1) {
            $current_page = 1;
        }
        $start = ($current_page - 1) * $limit;
        $html = '<ul class="pagination">';
        if ($current_page > 1 && $total_page > 1) {
            $html .= '<li class="page-item"><a class="page-link" href="' . str_replace('{page}', $current_page - 1, $link) . '">Prev</a></li>';
        }
        for ($i = 1; $i <= $total_page; $i++) {
            if ($i == $current_page) {
                $html .= '<li class="page-link bg-warning">' . $i . '</li>';
            } else {
                $html .= '<li class="page-item"><a class="page-link" href="' . str_replace('{page}', $i, $link) . '">' . $i . '</a></li>';
            }
        }
        if ($current_page < $total_page && $total_page > 1) {
            $html .= '<li class="page-item"><a class="page-link" href="' . str_replace('{page}', $current_page + 1, $link) . '">Next</a></li>';
        }
        return array(
            'start' => $start,
            'limit' => $limit,
            'html' => $html
        );
    }

    public static function format_cash($price) {
        return str_replace(",", ",", number_format($price));
    }
}

class Database
{
    private static $dsn = 'mysql:host=localhost;dbname=demo';
    private static $username = "root";
    private static $password = "";
    private static $con = null;

    public function __construct()
    {
        self::db_connect();
    }

    public function __destruct()
    {
        self::db_disconnect();
    }

    public static function db_connect()
    {
        try {
            if (is_null(self::$con)) {
                self::$con = new PDO(self::$dsn, self::$username, self::$password);
                self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                // echo "Ket noi thanh cong";               
            }
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            include_once '../errors/database_error.php';
        }
    }

    public static function db_disconnect()
    {
        if (!is_null(self::$con)) {
            $con = null;
        }
    }

    public static function db_execute($sql = '', $params = [])
    {
        if (!is_null(self::$con)) {
            $result = self::$con->prepare($sql);
            $result->execute($params);
            if ($result->rowCount() > 0) {
                $result->closeCursor();
                return true;
            }
        }
        return false;
    }

    public static function db_get_list($sql = '')
    {
        if (!is_null(self::$con)) {
            $result = self::$con->prepare($sql);
            $result->execute();
            if ($result->rowCount() > 0) {
                $rows = $result->fetchAll();
                $result->closeCursor();
                return $rows;
            }
        }
        return false;
    }

    public static function db_get_list_condition($sql = '', $params = [])
    {
        if (!is_null(self::$con)) {
            $result = self::$con->prepare($sql);
            $result->execute($params);
            if ($result->rowCount() > 0) {
                $rows = $result->fetchAll();
                $result->closeCursor();
                return $rows;
            }
        }
        return false;
    }

    public static function db_get_row($sql = '', $params = [])
    {
        if (!is_null(self::$con)) {
            $result = self::$con->prepare($sql);
            $result->execute($params);
            if ($result->rowCount() > 0) {
                $row = $result->fetch();
                $result->closeCursor();
                return $row;
            }
        }
        return false;
    }
    public static function db_get_row1($sql = '', $params = [])
    {
        if (!is_null(self::$con)) {
            $result = self::$con->prepare($sql);
            $result->execute($params);
            if ($result->rowCount() > 0) {
                $row = $result->fetch(PDO::FETCH_ASSOC);
                $result->closeCursor();
                return $row;
            }
        }
        return false;
    }
    public static function db_get_row2($sql = '')
    {
        if (!is_null(self::$con)) {
            $result = self::$con->prepare($sql);
            $result->execute();
            if ($result->rowCount() > 0) {
                $row = $result->fetch(PDO::FETCH_ASSOC);
                $result->closeCursor();
                return $row;
            }
        }
        return false;
    }

    public static function db_num_rows($sql = '')
    {
        $count = 0;
        if (!is_null(self::$con)) {
            $result = self::$con->prepare($sql);
            $result->execute();
            $count = $result->rowCount();
            $result->closeCursor();
            return $count;
        }
        return false;
    }
}

class category {
    private $idcat, $namecat, $thumbnailcat,$descriptioncat;

 public function getIdcat()
    {
        return $this->idcat;
    }

      public function setIdcat($idcat)
    {
        $this->idcat = $idcat;

        return $this;
    }

    public function getNamecat()
    {
        return $this->namecat;
    }

    public function setNamecat($namecat)
    {
        $this->namecat = $namecat;

        return $this;
    }
    public function getThumbnailCat()
    {
        return $this->thumbnailcat;
    }
    public function setThumbnailCat($thumbnailcat)
    {
        $this->thumbnailcat = $thumbnailcat;

        return $this;
    }
    public function getDescriptioncat()
    {
        return $this->descriptioncat;
    }
    public function setDescriptioncat($descriptioncat)
    {
        $this->descriptioncat = $descriptioncat;

        return $this;
    }
}

class product{
   private $id,$title,$price,$brand,$thumbnail,$content,$num,$idcat,$created_at,$updated_at;
   
    public function getId()
    {
       return $this->id;
    }
 
    public function setId($id)
    {
       $this->id = $id;
 
       return $this;
    }
    public function getTitle()
    {
       return $this->title;
    }
 
    public function setTitle($title)
    {
       $this->title = $title;
 
       return $this;
    }
    public function getPrice()
    {
       return $this->price;
    }
 
    public function setPrice($price)
    {
       $this->price = $price;
 
       return $this;
    }
    public function getNum()
    {
       return $this->num;
    }
 
    public function setNum($num)
    {
       $this->num = $num;
 
       return $this;
    }
    public function getBrand()
    {
       return $this->brand;
    }
 
    public function setBrand($brand)
    {
       $this->brand = $brand;
 
       return $this;
    }
    public function getThumbnail()
    {
       return $this->thumbnail;
    }
 
    public function setThumbnail($thumbnail)
    {
       $this->thumbnail = $thumbnail;
 
       return $this;
    }
    
   public function getContent()
   {
      return $this->content;
   }
   public function setContent($content)
   {
      $this->content = $content;

      return $this;
   }
    public function getIdcat()
    {
       return $this->idcat;
    }
 
    public function setIdcat($idcat)
    {
       $this->idcat = $idcat;
 
       return $this;
    }
    public function getCreated_at()
    {
       return $this->created_at;
    }
 
    public function setCreated_at($created_at)
    {
       $this->created_at = $created_at;
 
       return $this;
    }
    public function getUpdated_at()
    {
       return $this->updated_at;
    }
 
    public function setUpdated_at($updated_at)
    {
       $this->updated_at = $updated_at;
 
       return $this;
    }
}
class brand {
    private $idbrand,$namebrand,$logo;
    public function getNamebrand()
    {
       return $this->namebrand;
    }
 
    public function setNamebrand($namebrand)
    {
       $this->namebrand = $namebrand;
 
       return $this;
    }
    public function getIdbrand()
    {
       return $this->idbrand;
    }
 
    public function setIdbrand($idbrand)
    {
       $this->idbrand = $idbrand;
 
       return $this;
    }
    public function getLogo()
    {
       return $this->logo;
    }
 
    public function setLogo($logo)
    {
       $this->logo = $logo;
 
       return $this;
    }
}


class user{
    private $id,$fullname,$email,$phone,$address,$password,$role,$created_at;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getFullname()
    {
        return $this->fullname;
    }


    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
    public function getCreated_at()
    {
        return $this->created_at;
    }
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }
}

class order{
    private $iduser,$id,$fullname, $phone, $email, $address, $orderdate,$status;
      
    public function getIduser()
    {
        return $this->iduser;
    }
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    public function getFullname()
    {
        return $this->fullname;
    }
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }
   public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    } 
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    } 
    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
    public function getOrderdate()
    {
        return $this->orderdate;
    }
    public function setOrderdate($orderdate)
    {
        $this->orderdate = $orderdate;

        return $this;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}

class OrderDB extends Database{
    public static function getOrder(){
        self::db_connect();
        $sql = "SELECT * FROM orders ORDER BY orderdate DESC";
        if(!empty(self::db_get_list($sql))){
            foreach(self::db_get_list($sql) as $row){
                $order = new Order();
                $order->setId($row['id']);
                $order->setIduser($row['iduser']);
                $order->setFullname($row['fullname']);
                $order->setAddress($row['address']);
                $order->setEmail($row['email']);
                $order->setPhone($row['phone']);
                $order->setOrderdate($row['orderdate']);
                $order->setStatus($row['status']);
                $orders[] = $order;
            }
            return $orders;
        }
    }

    public static function getOrderByIdUser($iduser){
        self::db_connect();
        $sql = "select * from orders where iduser =:iduser ORDER BY orderdate DESC";
        $params =["iduser" => $iduser];
        
        if (!empty(self::db_get_list_condition($sql,$params))) {
            foreach (self::db_get_list_condition($sql,$params) as $row) {
                $order = new Order();
                $order->setId($row['id']);
                $order->setIduser($row['iduser']);
                $order->setFullname($row['fullname']);
                $order->setAddress($row['address']);
                $order->setEmail($row['email']);
                $order->setPhone($row['phone']);
                $order->setOrderdate($row['orderdate']);
                $order->setStatus($row['status']);
                $orders[] = $order;
            }
            return $orders;
    }
    }

    public static function getOrderById($id){
        self::db_connect();
        $sql = "select * from orders where id =:id ORDER BY orderdate DESC";
        $params =["id" => $id];
        
        if (!empty(self::db_get_list_condition($sql,$params))) {
            foreach (self::db_get_list_condition($sql,$params) as $row) {
                $order = new Order();
                $order->setId($row['id']);
                $order->setIduser($row['iduser']);
                $order->setFullname($row['fullname']);
                $order->setAddress($row['address']);
                $order->setEmail($row['email']);
                $order->setPhone($row['phone']);
                $order->setOrderdate($row['orderdate']);
                $order->setStatus($row['status']);
                return $order;
            }
           
    }
} 
//     public static function getOrderDetailById($order_id){
//         self::db_connect();
//         $sql = "SELECT * FROM order_details WHERE order_id=:order_id";
//         $params =['order_id' => $order_id];
        
//         if (!empty(self::db_get_list_condition($sql,$params))) {
//             foreach (self::db_get_list_condition($sql,$params) as $row) {
//                 $order = new Order();
//                 $order->setId($row['id']);
//                 $order->setIduser($row['iduser']);
//                 $order->setFullname($row['fullname']);
//                 $order->setAddress($row['address']);
//                 $order->setEmail($row['email']);
//                 $order->setPhone($row['phone']);
//                 $order->setOrderdate($row['orderdate']);
//                 $order->setStatus($row['status']);
//                 return $order;
//             }
           
//     }
// }
    

    public static function updateStatusOrderById($id,$status){
        self::db_connect();
        $sql ='update orders set status=:status where id = :id';
        $params = ['id' => $id, 'status' => $status];
        if(self::db_execute($sql, $params)){
            return true;
        }else{
            return false;
        }
    }

    public static function addOrder($order){
        self::db_connect();
        $sql ='insert into orders (iduser, fullname, phone,email, address, orderdate) values(:iduser,:fullname, :phone, :email, :address, :orderdate)';
        $params =['iduser' => $order->getIduser(),
            'fullname' => $order->getFullname(),
         'phone' => $order->getPhone(),
          'email' => $order->getEmail(),
          'address' => $order->getAddress(),
          'orderdate' => $order->getOrderdate()];
           if(self::db_execute($sql,$params)){
            return true;
        }else{
            return false;
        }
    }
}
class userDB extends Database{
    public static function getUserByEmail($email){
        self::db_connect();
        $sql='select * from user where email=:email ';
        $params =['email' => $email];
        $row = self::db_get_row($sql,$params);
    
        if(!empty($row)){
            $user = new user();
            $user->setId($row['id']);
            $user->setFullname($row['fullname']);
            $user->setEmail($row['email']);
            $user->setPhone($row['phone']);
            $user->setAddress($row['address']);
            $user->setPassword($row['password']);
            $user->setRole($row['role']);          
            return $user;
        }
        self::db_disconnect();
    }
    
    public static function addUser($user) {
        self::db_connect();
        $sql = 'INSERT INTO user (fullname, email,phone, password,created_at) VALUES (:fullname, :email,:phone, :password, :created_at)';
        $params =['fullname' => $user->getFullname(),
                'email' => $user->getEmail(),
                'phone' => $user->getPhone(),
                'password' => $user->getPassword(),
            'created_at' => $user->getCreated_at()];
                
               if(self::db_execute($sql,$params)){
                return true;
            }else{
                return false;
            }
    }
    public static function updateAdressUser(){}
    }

class productDB extends Database{
    public static function getProduct(){
        self::db_connect();
        $sql = 'select product.id, product.title, product.price,product.brand, product.thumbnail, product.updated_at, category.namecat 
category_name from product left join category on product.id_category = category.idcat ';
if (!empty(self::db_get_list($sql))) {
    foreach (self::db_get_list($sql) as $row) {
        $prd = new Product();
        $prd->setId($row['id']);
        $prd->setTitle($row['title']);
        $prd->setPrice($row['price']);
        $prd->setBrand($row['brand']);
        $prd->setThumbnail($row['thumbnail']);
        $prd->setIdcat($row['category_name']);
        $prd->setUpdated_at($row['updated_at']);
        $prds[] = $prd;

    }
    return $prds;
}

    }

    public static function getProductByCat($idcat){
        self::db_connect();
        $sql = "SELECT * FROM product WHERE id_category=:id_category";
        $params =['id_category' => $idcat];
        
        if (!empty(self::db_get_list_condition($sql,$params))) {
            foreach (self::db_get_list_condition($sql,$params) as $row) {
                $prd = new Product();
                $prd->setId($row['id']);
                $prd->setTitle($row['title']);
                $prd->setPrice($row['price']);
                $prd->setBrand($row['brand']);
                $prd->setThumbnail($row['thumbnail']);
                $prd->setUpdated_at($row['updated_at']);
                $prds[] = $prd;
        
            }
            return $prds;
    }
}
    public static function getProductById($id){
        self::db_connect();
        $sql='select * from product where id=:id ';
        $params =['id' => $id];
        $row = self::db_get_row($sql,$params);

        if(!empty($row)){
            $prd = new Product();
            $prd->setId($row['id']);
            $prd->setTitle($row['title']);
            $prd->setPrice($row['price']);
            $prd->setBrand($row['brand']);
            $prd->setThumbnail($row['thumbnail']);
            $prd->setUpdated_at($row['updated_at']);       
            return $prd;
        }
        self::db_disconnect();
    }
    public static function getProductByBrand($namebrand){
        self::db_connect();
        $sql = "SELECT * FROM product WHERE brand=:brand";
        $params =['brand' => $namebrand];
        
        if (!empty(self::db_get_list_condition($sql,$params))) {
            foreach (self::db_get_list_condition($sql,$params) as $row) {
                $prd = new Product();
                $prd->setId($row['id']);
                $prd->setTitle($row['title']);
                $prd->setPrice($row['price']);
                $prd->setBrand($row['brand']);
                $prd->setThumbnail($row['thumbnail']);
                $prd->setUpdated_at($row['updated_at']);
                $prds[] = $prd;
        
            }
            return $prds;
    }
    }
    public static function addProduct($prd){
        self::db_connect();
        $sql ='insert into product(title, price,brand, thumbnail, content,id_category,created_at,updated_at) values(:title, :price, :brand,:thumbnail, :content,:id_category,:created_at,:updated_at)';
        $params =['title' => $prd->getTitle(),
            'price' => $prd->getPrice(),
            'brand' => $prd->getBrand(),
            'thumbnail' => $prd->getThumbnail(),
            'content' => $prd->getContent(),
            'id_category' => $prd->getIdcat(),
            'created_at' => $prd->getCreated_at(),
            'updated_at'=> $prd->getUpdated_at()];
           if(self::db_execute($sql,$params)){
            return true;
        }else{
            return false;
        }
    }

    public static function deleteProduct($prd){
        self::db_connect();
    $sql='delete from product where id=:id';
    $params = ['id' => $prd->getId()];
    if(self::db_execute($sql,$params)){
        return true;
    }else{
        return false;
    }
    }
    public static function findProducts($condition)
    {
        self::db_connect();
        $sql = "call sp_timkiem(:condition)";
        $params = [
            'condition' => $condition
        ];
        if(!empty(self::db_get_list_condition($sql,$params)))
        {
            foreach(self::db_get_list_condition($sql,$params) as $row){
                $prd = new Product();
                $prd->setId($row['id']);
                $prd->setTitle($row['title']);
                $prd->setPrice($row['price']);
                $prd->setBrand($row['brand']);
                $prd->setContent($row['content']);
                $prd->setThumbnail($row['thumbnail']);
                $prd->setUpdated_at($row['updated_at']);   
                $prds[] = $prd;
            }
            return $prds;
        }
        return false;
    }
    
}

class brandDB extends Database{
    public static function getBrand(){
        self::db_connect();
        $sql = "select * from brand";
        if (!empty(self::db_get_list($sql))) {
            foreach (self::db_get_list($sql) as $row) {
                $br = new brand();
                $br->setIdbrand($row['idbrand']);
                $br->setNamebrand($row['namebrand']);
                $br->setLogo($row['logo']);
                $brs[] = $br;
            }
          
            return $brs;
        }
        
    }
    public static function getBrandByName($namebrand){
        self::db_connect();
        $sql='select * from brand where namebrand=:namebrand ';
        $params =['namebrand' => $namebrand];
        $row = self::db_get_row($sql,$params);

        if(!empty($row)){
            $clr = new brand();
            $clr->setIdBrand($row['idbrand']);
            $clr->setNameBrand($row['namebrand']);
            $clr->setLogo($row['logo']);       
            return $clr;
        }
        self::db_disconnect();
    }
}
class catDB extends Database{
    
    public static function getCat()
    {
        self::db_connect();
        $sql = "select * from category";
        if (!empty(self::db_get_list($sql))) {
            foreach (self::db_get_list($sql) as $row) {
                $dm = new category();
                $dm->setIdcat($row['idcat']);
                $dm->setNamecat($row['namecat']);
               $dm->setDescriptioncat($row['descriptioncat']);
               $dm->setThumbnailCat($row['thumbnailcat']);
                $dms[] = $dm;
            }
          
            return $dms;
        }
        self::db_disconnect();
    }


    public static function getCatById($idcat){
        self::db_connect();
        $sql='select * from category where idcat=:idcat ';
        $params =['idcat' => $idcat];
        $row = self::db_get_row($sql,$params);

        if(!empty($row)){
            $dm = new category();
            $dm->setIdcat($row['idcat']);
            $dm->setNamecat($row['namecat']);  
            $dm->setDescriptioncat($row['descriptioncat']);
            $dm->setThumbnailCat($row['thumbnailcat']);        
            return $dm;
        }
        self::db_disconnect();
    }

    public static function addCat($dm){
        self::db_connect();
        $sql ='insert into category(namecat,thumbnailcat,descriptioncat) values(:namecat,:thumbnailcat,:descriptioncat)';
        $params = ["namecat" => $dm->getNamecat(),
                    "thumbnailcat" =>$dm->getThumbnailCat(),
                    "descriptioncat" =>$dm->getDescriptioncat()];
        if(self::db_execute($sql,$params)){
            return true;
        }else{
            return false;
        }
    }

    public static function updateCat($dm){
        self::db_connect();
        $sql ='update category set namecat=:namecat, thumbnailcat=:thumbnailcat, descriptioncat=:descriptioncat where idcat=:idcat';
        $params=["idcat" => $dm->getIdcat(),
                "namecat" => $dm->getNamecat(),
                "thumbnailcat" =>$dm->getThumbnailCat(),
                "descriptioncat"=>$dm->getDescriptioncat()];
        if(self::db_execute($sql, $params)){
            return true;
        }else{
            return false;
        }
    }

    public static function deteleCat($dm){
        self::db_connect();
        $sql='delete from category where idcat=:idcat';
        $params =['idcat'=>$dm->getIdcat()];
        if(self::db_execute($sql,$params)){
            return true;
        }else{
            return false;
        }
    }

  

 
}
class Form_Authen{
    //-------------Authentication---------------------
    //-----Role Admin-----
    public static function set_logged($id,$email,$kieu,$hoten,$diachi) {
        $_SESSION['token'] = [
            'id'=>$id,
            'email'=>$email,
            'kieu'=>$kieu,
            'hoten'=>$hoten,
            'diachi'=>$diachi];
    }
    public static function is_login() {
        if(!empty($_SESSION['token']))
        {
            return true;
        }
        return false;
    }

    public static function set_logout() {
        if(isset($_SESSION['token']))
        {
            $_SESSION['token'] = [];   // Clear session data from memory
            unset($_SESSION['token']);
        } 
        if(isset($_SESSION['cart']))
        {
            $_SESSION['cart'] = [];   // Clear session data from memory
            unset($_SESSION['cart']);
        } 
    }

    public static function session_user_logged() {
        $user = isset($_SESSION['token'])?$_SESSION['token']:false;
        return $user;
    }

    public static function is_admin() {
        $user = self::session_user_logged();
        if(!empty($user['kieu']) && intval($user['kieu']) == 1)
        {
            return true;
        }
        return false;
    }
    public static function get_current_id(){
        $user = self::session_user_logged();
        return (isset($user['id'])?$user['id']:'');
    }

    public static function get_current_username(){
        $user = self::session_user_logged();
        return (isset($user['hoten'])?$user['hoten']:'');
    }

    public static function get_current_email(){
        $user = self::session_user_logged();
        return (isset($user['email'])?$user['email']:'');
    }
    public static function get_current_address(){
        $user = self::session_user_logged();
        return (isset($user['diachi'])?$user['diachi']:'');
    }

    public static function get_current_typeuser()
    {
        $user = self::session_user_logged();
        return (isset($user['kieu'])?intval($user['kieu']):'');
    }

    //-----Role User-----
    public static function is_user() {
            $user = self::session_user_logged();
            if(!empty($user['kieu']) && intval($user['kieu']) == 2)
            {
                return true;
            }
            return false;
    }
}

class statistic extends Database{
    public static function time_today() {

        $date = date('d-m-Y 00:00');
        $timestamp = strtotime($date);
        return $timestamp;
    
    }

    public static function statistic_today($type) {
        Database::db_connect();
        $hientai = time();
        $today = self::time_today();
        switch ($type) {
            case 'user':
              
               $sql = "select * from user where created_at > ".$today." and created_at < ".$hientai;
               $row = Database::db_num_rows($sql);
               return $row;
                        break;
            case 'products':
                $sql = "SELECT SUM(order_details.num) as soluong FROM orders left join order_details  ON orders.id = order_details.order_id WHERE orderdate > ".$today." AND orderdate < ".$hientai." AND status =  1";
                $row = Database::db_get_row2($sql);
                return $row;
                break;
            case 'orders':
               $sql ="SELECT * FROM orders WHERE orderdate > ".$today." AND orderdate < ".$hientai;
               $row = Database::db_num_rows($sql);     
               return $row;
                break;
             case 'income':
               $sql ="SELECT SUM(order_details.price) as thunhap FROM orders left join order_details  ON orders.id = order_details.order_id WHERE orderdate > ".$today." AND orderdate < ".$hientai." AND status =  1";
               $row = Database::db_get_row2($sql);
                return $row;
                break;
               
        }
    }

    public static function statistic_system($type){
        switch ($type) {
            case 'user':
               $sql = "select * from user";
               $row = Database::db_num_rows($sql);
               return $row;
                    break;
            case 'products':
                $sql = "select * from product";
                $row = Database::db_num_rows($sql);
                return $row;
                    break;
            case 'orders':
                $sql = "select * from orders";
                $row = Database::db_num_rows($sql);
                return $row;
                    break;
          case 'income':
               $sql ="SELECT SUM(order_details.price) as thunhap FROM orders left join order_details  ON orders.id = order_details.order_id WHERE  status =  1";
               $row = Database::db_get_row2($sql);
                return $row;
                break;
            }
    }
}
    //  //--------Cart------------
    //  $lifetime = 60 * 60 * 24 * 30;    // 1 months in seconds
    //  session_set_cookie_params($lifetime, '/');
    //  session_start();
 
    //  // Add an item to the cart
    //  function add_item_cart($key, $quantity) {
    //      // Create a table of products
    //      $products = array();
    //      db_connect();
    //      $sql = "select * from sanpham";
    //      $dssp = db_get_list($sql);
    //      db_disconnect();
    //      if(!empty($dssp)){
    //          foreach($dssp as $sp):
    //              $products[$sp['idsp']] = array('name' => $sp['tensp'], 'cost' => $sp['gia']);
    //          endforeach;
    //      }
 
    //      if ($quantity < 1) return;
 
    //      // If item already exists in cart, update quantity
    //      if (isset($_SESSION['cart'][$key])) {
    //          $quantity += $_SESSION['cart'][$key]['qty'];
    //          update_item_cart($key, $quantity);
    //          return;
    //      }
 
    //      // Add item
    //      $cost = $products[$key]['cost'];
    //      $total = $cost * $quantity;
    //      $item = array(
    //          'name' => $products[$key]['name'],
    //          'cost' => $cost,
    //          'qty'  => $quantity,
    //          'total' => $total
    //      );
    //      $_SESSION['cart'][$key] = $item;
    //  }
 
    //  // Update an item in the cart
    //  function update_item_cart($key, $quantity) {
    //      $quantity = (int) $quantity;
    //      if (isset($_SESSION['cart'][$key])) {
    //          if ($quantity <= 0) {
    //              unset($_SESSION['cart'][$key]);
    //          } else {
    //              $_SESSION['cart'][$key]['qty'] = $quantity;
    //              $total = $_SESSION['cart'][$key]['cost'] *
    //                      $_SESSION['cart'][$key]['qty'];
    //              $_SESSION['cart'][$key]['total'] = $total;
    //          }
    //      }
    //  }
 
    //  // Get cart subtotal
    //  function get_subtotal_cart () {
    //      $subtotal = 0;
    //      foreach ($_SESSION['cart'] as $item) {
    //          $subtotal += $item['total'];
    //      }
    //      $subtotal_f = number_format($subtotal, 2);
    //      return $subtotal_f;
    //  }
 

?>
