<?php
/**
 * @Author: Marte
 * @Date:   2017-10-15 22:52:08
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-10-16 10:27:13
 */
//$email = $_GET['email'];
//$email = $_GET['callback'];
//$email = 'w@zce.me';

//没有提交邮箱的情况
if(empty($_GET['email'])){
    exit();
}
// $email = $_GET['email'];
$email = $_GET['callback'];

require '../../config.php';
$conn = mysqli_connect(BAIXIU_DB_HOST, BAIXIU_DB_USER, BAIXIU_DB_PASS, BAIXIU_DB_NAME);
if(!$conn){
  exit();
}
$query = mysqli_query($conn, "select * from users where email = '{$email}' limit 1;");
if(!$query){
 exit();
}

$user = mysqli_fetch_assoc($query);
$avatar=$user['avatar'];
echo $avatar;


