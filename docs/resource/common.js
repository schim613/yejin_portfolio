// 이미지 로딩 기다리기
$('body').imagesLoaded(function() {
  SectionEffect__init();
});

// 풀페이지
new fullpage('#fullpage', {
  menu: ".top-bar .menu-1"
});

// 연락-이메일 폼
function sendEmailForm(form) {
  if ( form._replyto.value.length == 0 ) {
    alert('이메일 주소를 입력해주세요.');
    form._replyto.focus();
    return;
  }
  
  if ( form.message.value.length == 0 ) {
    alert('메세지를 입력해주세요.');
    form.message.focus();
    return;
  }
  
  form.submit();
  
  form._replyto.value = '';
  form.message.value = '';
  form.submit1.innerHTML = 'DONE!';
  form.submit1.disabled = true;
}