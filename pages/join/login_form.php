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
  <div class="wrap">
    <?php
      include $_SERVER["DOCUMENT_ROOT"]."/dearandtail/include/header.php";  
      ?>
    <main class="contant center">
      <section class="main-con">
        <h4 class="blind">메인 대표 콘텐츠</h4>
        <div class="today">
          <button class="pre"></button>
          <div class="con-box">
            <ul class="today-list">
              <!-- today card start -->
              <li class="card">
                <div class="backimg">
                  <span class="hot">best</span>
                  <span class="hot">best</span>
                  <div class="textbox">
                    <h5>1번</h5>
                    <span>by bam</span>
                  </div>
                  <img src="/dearandtail/img/test.jpg" alt="" />
                </div>
                <b>TODAY HOT</b>
              </li>
              <!-- end of today card -->
              <!-- today card start -->
              <li class="card">
                <div class="backimg">
                  <span class="hot">best</span>
                  <span class="hot">best</span>
                  <div class="textbox">
                    <h5>2번</h5>
                    <span>by bam</span>
                  </div>
                  <img src="/dearandtail/img/test.jpg" alt="" />
                </div>
                <b>TODAY HOT</b>
              </li>
              <!-- end of today card -->
              <!-- today card start -->
              <li class="card">
                <div class="backimg">
                  <span class="hot">best</span>
                  <span class="hot">best</span>
                  <div class="textbox">
                    <h5>3번</h5>
                    <span>by bam</span>
                  </div>
                  <img src="/dearandtail/img/test.jpg" alt="" />
                </div>
                <b>TODAY HOT</b>
              </li>
              <!-- end of today card -->
              <!-- today card start -->
              <li class="card">
                <div class="backimg">
                  <span class="hot">best</span>
                  <span class="hot">best</span>
                  <div class="textbox">
                    <h5>3번</h5>
                    <span>by bam</span>
                  </div>
                  <img src="/dearandtail/img/test.jpg" alt="" />
                </div>
                <b>TODAY HOT</b>
              </li>
              <!-- end of today card -->
              <!-- today card start -->
              <li class="card">
                <div class="backimg">
                  <span class="hot">best</span>
                  <span class="hot">best</span>
                  <div class="textbox">
                    <h5>3번</h5>
                    <span>by bam</span>
                  </div>
                  <img src="/dearandtail/img/test.jpg" alt="" />
                </div>
                <b>TODAY HOT</b>
              </li>
              <!-- end of today card -->
            </ul>
          </div>
          <button class="nex"></button>
        </div>
      </section>
      <section id="login">
        <form action="/dearandtail/php/login.php" name="login_form" method="post" name="mem_form"
          class="login_form com_form">
          <p class="login">
            <label for="mem_id">아이디</label><input type="text" name="login_id" id="mem_id" placeholder="아이디" ">
          </p>
          <p>
            <label>비밀번호</label><input type=" new-password" name="login_pass" autocomplete="off" placeholder="비밀번호">
          </p>

          <div class="submit_info">
            <button type="button" id="login_btn">로그인</button>
            <span>회원이 아니신가요? <a href="/dearandtail/pages/join/join_form.php">click</a></span>
          </div>
        </form>

      </section>
    </main>
    <?php
      include $_SERVER["DOCUMENT_ROOT"]."/dearandtail/include/footer.php";  
      ?>
  </div>

  <script src="/dearandtail/js/main.js"></script>
</body>

</html>