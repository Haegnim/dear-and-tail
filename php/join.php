<?php

$mem_id = $_POST['mem_id'];

include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
$sql_check = "SELECT * FROM popo_mem WHERE popo_mem_id='{$mem_id}'";

$check_result = mysqli_query($dbConn, $sql_check);
$is_check = mysqli_num_rows($check_result);

// echo $is_check;

if($is_check > 0){
  echo"
  <script>
    alert('이미 가입된 회원입니다.');
    history.go(-1);
  </script>
  "; 
}else{
  $password = $_POST['mem_pass'];
//참조 : https://zetawiki.com/wiki/PHP_password_verify()


  // $mem_pass = password_hash($password, PASSWORD_DEFAULT);
  $mem_pass = $_POST['mem_pass'];
  $mem_name = $_POST['mem_name'];
  $mem_email = $_POST['mem_email'];
  $mem_regi = date('Y-m-d');
  $mem_level = 9;

  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
  $sql = "INSERT INTO popo_mem (
    popo_mem_id,
    popo_mem_pass,
    popo_mem_name,
    popo_mem_email,
    popo_mem_regi_day,
    popo_mem_level
  ) VALUES(
    '{$mem_id}',
    '{$mem_pass}',
    '{$mem_name}',
    '{$mem_email}',
    '{$mem_regi}',
    '{$mem_level}'
  )";
  mysqli_query($dbConn, $sql);
  echo"
  <script>
    alert('회원가입이 완료되었습니다.');
    location.href='/dearandtail/index.php';
  </script>
  ";
// echo $mem_id, $mem_pass, $mem_pf, $mem_name, $mem_email;
}
?>