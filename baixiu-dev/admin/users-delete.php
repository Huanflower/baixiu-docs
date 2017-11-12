<?php
/**
 * @Author: Marte
 * @Date:   2017-10-16 20:59:11
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-10-18 08:17:06
 */

require_once'../functions.php';

if (empty($_GET['id'])) {
  die('没有提交ID过来');
}

$id = $_GET['id'];

// 执行删除数据的语句
xiu_execute('delete from users where id in (' . $id . ');');

header('Location: /admin/users.php');
