<?php
function dbconn(){
$host_name="localhost";
$db_user_id ="root";
$db_pw="autoset";
$db_name="wego";
$db_type ="mysql";
// $mysqli = new mysqli($host_name , $db_user_id , $db_pw , $db_name );
$connect=@mysqli_connect($host_name, $db_user_id, $db_pw);
// mysqli_query(, $connect);
mysqli_query($connect, "set names utf8");
mysqli_select_db($connect, $db_name);
// mysqli_set_charset ( $connect, "set names utf8");
if(!$connect)die("연결에 실패".mysql_error());
return $connect;
}
 
//에러메세지 출력
function Error($msg)
{
  echo"
  <script>
  window.alert('$msg');
  history.back(1);
  </script>
  ";
  exit; //위 에러 메세지만 띄우기
}
?>