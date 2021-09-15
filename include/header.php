<?php
      session_start();
      
      if(isset($_SESSION['useridx'])){
        $useridx = $_SESSION['useridx'];
      }else{
        $useridx = "";
      }

      if(isset($_SESSION['userid'])){
        $userid = $_SESSION['userid'];
      }else{
        $userid = "";
      }
      
      if(isset($_SESSION['userprofile'])){
        $userprofile = $_SESSION['userprofile'];
      }else{
        $userprofile = "";
      }
      
      if(isset($_SESSION['userlevel'])){
        $userlevel = $_SESSION['userlevel'];
      }else{
        $userlevel = "";
      }

    // echo $userprofile, $userid;
    ?>

<header>
  <div class="center">
    <span class="logo"></span>
    <nav>
      <div class="nav-user">
        <div class="user">
          <div class="type-logo">
            <img src="/dearandtail/img/type.png" alt="" />
          </div>
          <div class="login">
            <?php if(!$userid){ ?>
            <!-- 로그아웃 시 보여질 UI -->
            <a href="/dearandtail/pages/join/join_form.php">join</a>
            <a href="#" class="login">login</a>
            <img src="/dearandtail/img/test.jpg" alt="">
            <?php }else{ 
            if($userlevel == 1){       
        ?>
            <!-- 로그인 시 보여질 UI -->
            <a href="/dearandtail/php/logout.php">logout</a>
            <a href="#"><?=$userid?></a>
            <a href="/zay/pages/admin/admin.php" class="admin_link"><i class="fa fa-cog"></i></a>
            <?php }else{ ?>

            <!-- 로그인 시 보여질 UI -->
            <a href="/dearandtail/php/logout.php">logoout</a>
            <a href="#"><?=$userid?></a>
            <img src="/dearandtail/img/test.jpg" alt="">

            <?php }} ?>
            <!-- <a href="/dearandtail/pages/join/join_form.php">logoout</a>
            <a href="/dearandtail/pages/join/join_form.php">join</a>
            <a href="/dearandtail/pages/join/login_form.php">login</a>
            <img src="/dearandtail/img/test.jpg" alt="" /> -->
          </div>
        </div>
        <div class="th-line">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="navigation">
        <ul class="nav-button">
          <li><a href="" class="active">Best</a></li>
          <li><a href="">New</a></li>
          <li><a href="">Exploring</a></li>
          <li><a href="">Fallow</a></li>
          <li><a href="">Bookmark</a></li>
        </ul>
        <form class="nav-search">
          <div class="inputbox">
            <input type="text" name="" id="" />
            <i></i>
            <b>Search</b>
          </div>
          <select class="cate">
            <option value="#">animal</option>
            <option value="#">ㄱㅗ야ㅇㅇ이 없없어어</option>
            <option value="#">ㄱㅗ야ㅇㅇ이 없없어어</option>
            <option value="#">ㄱㅗ야ㅇㅇ이 없없어어</option>
            <option value="#">ㄱㅗ야ㅇㅇ이 없없어어</option>
          </select>
        </form>
      </div>
    </nav>
  </div>
</header>