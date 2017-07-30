<?php

   mysql_connect("localhost","root","root") ;
				   
   mysql_select_db("videourl");
				   
   mysql_query("set names utf8");
   
   
   $sql="select * from utdurl";
   $re=mysql_query($sql);
 
   $arr1  = array();
   while ($row=mysql_fetch_assoc($re)) {

          $arr1[] = $row;

   }
 
   shuffle($arr1);
//var_dump($arr1);die;
//$id = $_GET['id']?$_GET['id']:"1";
//$m= $_GET['m']?$_GET['m']:"";
header("Location:".$arr1['0']['url']."/zhuanfa1/");
?>
