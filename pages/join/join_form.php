<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dear&tail</title>
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- google font link  -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;300;400;600&display=swap" rel="stylesheet" />
  <!-- reset style code -->
  <link rel="stylesheet" href="/dearandtail/css/reset.css" />
  <!-- main style code -->
  <link rel="stylesheet" href="/dearandtail/css/style.css" />
</head>

<body>
  <div class="wrap" id="join">

    <section>
      <h4>Login</h4>
      <div class="form_box">

        <form action="/dearandtail/php/insert_mem.php" method="post" name="mem_form" enctype="multipart/form-data"
          class="mem_form com_form">
          <div class="join-box">
            <button type="button" class="next-btn">NEXT</button>

            <ul class="join-input">
              <li class="id-input">
                <input type="text" name="mem_id" id="mem_id" placeholder="아이디" id="mem_id">
                <button type="button" class="id_check">0</button>
              </li>
              <li>
                <input type="new-password" name="mem_pass" autocomplete="off" placeholder="비밀번호">
                <input type="new-password" name="mem_pass_check" placeholder="비밀번호 확인">
              </li>
              <li>
                <input type="text" name="mem_email" placeholder="이메일">
              </li>
              <li>
                <input type="text" name="mem_name" placeholder="이름">
                <input type="file" name="mem_pf">
              </li>
            </ul>
          </div>
          <div class="submit_info">
            <button type="button" id="submit_btn">회원가입</button>
            <span>회원이신가요? <a href="/zay/pages/join/login_form.php">click</a></span>
          </div>
        </form>
      </div>
    </section>

  </div>

  <script src="/dearandtail/js/main.js"></script>
</body>

</html>