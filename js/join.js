function joinListX() {
  const joinList = document.querySelector(".join-input");
  const joinbox = document.querySelectorAll(".join-input li");
  const joinboxX = joinbox[0].offsetWidth;
  const joinListX = joinList.offsetWidth;

  const joinboxs = joinboxX * joinbox.length;
  console.log(joinbox);
  console.log(joinboxX);
  console.log(joinboxs);
  joinList.style.width = `${joinboxX * joinbox.length}px`;
}
joinListX();

function nextClick() {
  const joinList = document.querySelector(".join-input");
  const joinbox = document.querySelectorAll(".join-input li");
  const joinboxX = joinbox[0].offsetWidth;
  const nexBtn = document.querySelector(".next-btn");

  let offset = 0;
  nexBtn.addEventListener("click", function () {
    if (offset < 0) {
      offset = 0;
    } else if (offset >= joinbox.length - 1) {
      offset = joinbox.length - 1;
      submitClick();
    } else if (offset >= joinbox.length - 2) {
      offset += 1;
      nexBtn.innerText = "회원가입";
    } else {
      offset += 1;
      nexBtn.style.display = "block";
    }
    movepoint = offset;
    joinList.style.transform = `translateX(-${joinboxX * movepoint}px)`;
  });
}
nextClick();

function submitClick() {
  document.mem_form.submit();
}

submitBtn.addEventListener("click", function () {
  console.log(check);
  if (!document.mem_form.mem_id.value) {
    alert("아이디를 입력해 주세요");
    document.mem_form.mem_id.focus();
    return;
  }
  if (!document.mem_form.mem_pass.value) {
    alert("비밀번호를 입력해 주세요");
    document.mem_form.mem_pass.focus();
    return;
  }
  if (!document.mem_form.mem_pass_check.value) {
    alert("비밀번호 확인을 입력해 주세요");
    document.mem_form.mem_pass_check.focus();
    return;
  }
  if (
    document.mem_form.mem_pass.value != document.mem_form.mem_pass_check.value
  ) {
    alert("비밀번호와 비밀번호 확인이 다릅니다.");
    document.mem_form.mem_pass_check.focus();
    return;
  }

  const extensions = ["jpg", "png", "jpeg", "PNG", "JPG", "JPEG"];
  const imgValue = document.mem_form.mem_pf.value;
  const imgExt = imgValue.split(".");
  // console.log(imgExt[1]);

  if (!extensions.includes(imgExt[1])) {
    alert("jpg, png, jpeg 형식의 이미지를 올려주세요.");
    return;
  }
  if (!document.mem_form.mem_name.value) {
    alert("이름을 입력해 주세요");
    document.mem_form.mem_name.focus();
    return;
  }
  if (!document.mem_form.mem_email.value) {
    alert("이메일을 입력해 주세요");
    document.mem_form.mem_email.focus();
    return;
  }
  if (!check) {
    alert("아이디 중복체크를 해주세요");
    return;
  }
  document.mem_form.submit();
});
