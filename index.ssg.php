<?php require_once "head.php"; ?>
<div id="fullpage">
    <!-- 홈 -->
    <section class="section relative fp-auto-height-responsive" data-anchor="home">
      <a href="#about-me"><img src="resource/img/btn_1_1.png" alt="하단버튼" class="section-item icon-down"></a>
      <h1 class="main-text absolute whitespace-nowrap">
        THE CREATIVE NOTE
      </h1>
    </section>

    <!-- 자기소개 -->
    <section class="section relative fp-auto-height-responsive" data-anchor="about-me">
      <a href="#home"><img src="resource/img/btn_1_2.png" alt="상단버튼" class="section-item icon-up"></a>
      <div><img src="resource/img/2-1.png" alt="자기소개" class="section-item am-img-1"></div>
    </section>

    <!-- 포트폴리오 -->
    <section class="section relative fp-auto-height-responsive" data-anchor="portfolio">
      <a href="#home"><img src="resource/img/btn_1_2.png" alt="상단버튼" class="section-item icon-up"></a>
      <div><img src="resource/img/3-1.png" alt="포트폴리오1" class="pf-img-1"></div>
      <!-- <div><img src="resource/img/3-2.png" alt="스티커1" class="section-item pf-img-2"></div>
      <div><img src="resource/img/3-3.png" alt="스티커2" class="section-item pf-img-3"></div> -->
      <div><img src="resource/img/3-4.png" alt="스티커3" class="section-item pf-img-4"></div>
      <div><img src="resource/img/3-5.png" alt="스티커4" class="section-item pf-img-5"></div>
      <div class="mousemove-effect-1-el inline-block pf-img-2" data-mousemove-effect1-hor-res="0.01" data-mousemove-effect1-ver-res="0.01">
  <img class="block" src="resource/img/3-2.png" alt="">
      <div class="mousemove-effect-1-el inline-block pf-img-3" data-mousemove-effect1-hor-res="0.01" data-mousemove-effect1-ver-res="0.01">
  <img class="block" src="resource/img/3-3.png" alt="">
</div>
    </section>

    <!-- 연락 -->
    <section class="section relative fp-auto-height-responsive" data-anchor="contact">
      <a href="#home"><img src="resource/img/btn_1_2.png" alt="상단버튼" class="section-item icon-up"></a>
      <div><img src="resource/img/4-1.png" alt="연락처" class="section-item ct-img-1"></div>
      <div><img src="resource/img/4-2.png" alt="연락폼" class="section-item ct-img-2"></div>
      <div><img src="resource/img/4-3.png" alt="스티커1" class="section-item ct-img-3"></div>
      <div><img src="resource/img/4-4.png" alt="스티커2" class="section-item ct-img-4"></div>
      <div><img src="resource/img/4-5.png" alt="스티커3" class="section-item ct-img-5"></div>
      <form target="_blank" action="https://formspree.io/f/mnqlozzw" onsubmit="sendEmailForm(this); return false;"
        method="POST">
        <div class="absolute ct-form-1">
          <input autofocus type="email" name="_replyto" placeholder="E-mail address">
        </div>
        <div class="absolute ct-form-2">
          <textarea name="message" placeholder="Contents"></textarea>
        </div>
        <div class="absolute ct-form-3">
          <button name="submit1" type="submit">Send</button>
        </div>
      </form>
    </section>
  </div>
<?php require_once "foot.php"; ?>