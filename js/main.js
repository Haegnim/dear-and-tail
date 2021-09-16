function mainconClick() {
  const todaycard = document.querySelectorAll(".card");
  const pre = document.querySelector(".pre");
  const nex = document.querySelector(".nex");
  // const cardX = card[0].offsetWidth;
  let offset = 0;
  pre.addEventListener("click", function () {
    offset -= 1;
    mainconSlide(offset);
  });
  nex.addEventListener("click", function () {
    offset -= 1;
    mainconSlide(offset);
  });
}
mainconClick();

function mainconH() {
  const todaycard = document.querySelectorAll(".card");
  const conBox = document.querySelector(".con-box");
  const conBoxX = conBox.offsetHeight;
  for (let i = 0; i < todaycard.length; i++) {
    todaycard[i].style.height = conBoxX + "px";
    const cardX = todaycard[0].offsetHeight;
    console.log(cardX);
  }
}
mainconH();
function mainconSlide(offset) {
  const todaycard = document.querySelectorAll(".card");
  const conBox = document.querySelector(".con-box");
  const conBoxX = conBox.offsetHeight;
  const todayList = document.querySelector(".today-list");
  const movepoint = offset % todaycard.length;
  todayList.style.transform = `translateY(${conBoxX * movepoint}px)`;
  navActive(movepoint);
}

function navActive(num) {
  const navbtn = document.querySelectorAll(".nav-button li a");
  const navbtnArr = Array.from(navbtn);

  navbtnArr.forEach((a) => {
    a.classList.remove("active");
  });
  // console.log(num);
  navbtn[Math.abs(num)].classList.add("active");
}

function consBoxX() {
  const conTwoBox = document.querySelector(".con-twobox");
  const consBox = document.querySelectorAll(".cons-box");
  const conTwoBoxX = conTwoBox.offsetWidth;
  // console.log(conTwoBoxX / 2);
  const consBoxArr = Array.from(consBox);
  consBoxArr.forEach((div) => {
    div.style.width = `${conTwoBoxX / 2}px`;
  });
}
consBoxX();
function resize() {
  window.addEventListener("resize", function () {
    consBoxX();
  });
}
resize();

function consBoxClick() {
  let offset = 0;
  const morePre = document.querySelector(".more-pre");
  const moreNex = document.querySelector(".more-nex");
  morePre.addEventListener("click", function () {
    offset += 1;
    consBoxSlide(offset);
  });
  moreNex.addEventListener("click", function () {
    offset -= 1;
    consBoxSlide(offset);
  });
}
consBoxClick();
function consBoxSlide(offset) {
  const conTwoBox = document.querySelector(".con-twobox");
  const consBox = document.querySelectorAll(".cons-box");
  const conList = document.querySelector(".con-list");
  const conTwoBoxX = conTwoBox.offsetWidth;
  const movepoint = offset % (consBox.length / 2);

  conList.style.transform = `translateX(${conTwoBoxX * movepoint}px)`;
}
// function navClick() {
//   const navbtn = document.querySelectorAll(".nav-button li a");
//   for (let i = 0; i <= navbtn.length; i++) {
//     navbtn[i].classList.remove("active");
//     navbtn[i].addEventListener("click", function () {
//       navbtn[i].classList.add("active");
//     });
//   }
// }
// navClick();
function hambergerClick() {
  const hamberger = document.querySelector(".th-line");
  // const tabnav = document.querySelector(".hide-nav");

  hamberger.addEventListener("click", function () {
    // tabnav.classList.toggle("on");
    hamberger.classList.toggle("on");
  });
}
hambergerClick();

function showloginpage() {
  const login = document.querySelector(".login");
  const subcon = document.querySelector(".sub-con");
  const loginpage = document.querySelector(".loginpage");

  login.addEventListener("click", function () {
    loginpage.classList.toggle("on");
    subcon.classList.toggle("on");
  });
}
showloginpage();
