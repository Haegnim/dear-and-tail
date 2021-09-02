<?php
$login_id = $_POST['login_id'];
$login_pass = $_POST['login_pass'];

//echo $login_id, $login_pass;

include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
$sql = "SELECT * FROM popo_mem WHERE popo_mem_id='{$login_id}'";

$login_result = mysqli_query($dbConn, $sql);

// 1. 아이디 조회 및 존재 여부 파악
$id_match = mysqli_num_rows($login_result);

// var_dump($id_match);
if(!$id_match){
  echo"
    <script>
      alert('등록되지 않은 아이디 입니다.');
      location.href='/dearandtail/pages/join_form.php';
    </script>
  ";
}else{
  //테이블 데이터 값을 배열로 저장
  $login_row = mysqli_fetch_array($login_result);
  //비밀번호 문자열 추출하여 저장
  $db_pass = $login_row['popo_mem_pass'];
  //추출된 문자열과 입력된 비밀번호 문자열 비교
  if($login_pass != $db_pass){
    echo"
    <script>
      alert('비밀번호가 틀립니다.');
      history.go(-1);
    </script>
  ";
  }else{
    // session_start 함수는, 첫째 호출 이후의 데이터를 서버에 저장한다는 의미와, 둘째 이미 저장된 세션을 불러들이는 기능을 가진다
    session_start();
    $_SESSION['userid'] = $login_row['popo_mem_id'];
    $_SESSION['useridx'] = $login_row['popo_mem_idx'];
    $_SESSION['userlevel'] = $login_row['popo_mem_level'];
    echo "
       <script>
         location.href='/dearandtail/index.php';
      </script>
    ";
  }
}


?>