<?php
header('Content-Type: text/plain');

//接收客户端提交的数据
$did = $_REQUEST['did'];

//连接数据库
$conn=mysqli_connect('127.0.0.1','root','root','meitu'); 

//SQL1：设置编码方式
$sql = "SET NAMES UTF8";
mysqli_query($conn, $sql);

//打开指定数据库
//mysqli_select_db($$conn,'cms');
//执行SQL语句
$sql="DELETE FROM meitu_cart_detail WHERE did='{$did}'";
$result=mysqli_query($conn,$sql);
if($result){
	echo '数据删除成功<br/>';
	//mysqli_affected_rows($link):上一步操作产生的受影响的记录条数
	//echo mysqli_affected_rows($link),'条记录被影响<br/>';
}else{
	echo '数据删除失败<br/>';
}
//1.通过程序向user表中插入1条记录，并且得到自增长id
//2.通过程序update表中编号小于20的用户，将其年龄改为30
//并且得到受影响的记录条数
//3.删除表中id>=10的用户，并且得到受影响的记录条数
