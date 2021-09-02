<?php require_once "head.php"; ?>
<div id="fullpage">
  <!-- 홈 -->
  <section class="section relative fp-auto-height-responsive" data-anchor="home">
    <a class="cursor-pointer" href="#about-me"><img src="resource/img/btn_1_1.png" alt="하단버튼" class="section-item icon-down"></a>
    <h1 class="main-text absolute whitespace-nowrap">
      THE CREATIVE NOTE
    </h1>
  </section>

  <!-- 자기소개 -->
  <section class="section relative fp-auto-height-responsive" data-anchor="about-me">
    <a class="cursor-pointer" href="#home"><img src="resource/img/btn_1_2.png" alt="상단버튼" class="section-item icon-up"></a>
    <div><img src="resource/img/2-1.png" alt="자기소개" class="section-item am-img-1"></div>
  </section>

  <!-- 포트폴리오 -->
  <section class="section relative fp-auto-height-responsive" data-anchor="portfolio">
    <a class="cursor-pointer" href="#home"><img src="resource/img/btn_1_2.png" alt="상단버튼" class="section-item icon-up"></a>
    <div class="mousemove-effect-1-el section-item pf-img-1" data-mousemove-effect1-hor-res="0.03"
      data-mousemove-effect1-ver-res="0.03">
      <img class="block" src="resource/img/3-2.png" alt="스티커-마름모"></div>
    <div class="mousemove-effect-1-el section-item pf-img-2" data-mousemove-effect1-hor-res="0.02"
      data-mousemove-effect1-ver-res="0.02">
      <img class="block" src="resource/img/3-3.png" alt="스티커-별"></div>
    <div class="mousemove-effect-1-el section-item pf-img-3" data-mousemove-effect1-hor-res="0.01"
      data-mousemove-effect1-ver-res="0.01">
      <img class="block" src="resource/img/3-4.png" alt="스티커-모형"></div>
    <div class="mousemove-effect-1-el section-item pf-img-4" data-mousemove-effect1-hor-res="0.01"
      data-mousemove-effect1-ver-res="0.01">
      <img class="block" src="resource/img/3-5.png" alt="스티커-커서"></div>
    <div class="portfolio flex">
      <div class="pf-wrap-1">
        <div class="pf-content pf-1">
          <div>포폴1
            <a class="pf-img cursor-pointer" href="https://picsum.photos/id/231/1000/500" data-lightbox="image-1" data-title="마음에 드는 배너라서, 살짝 리디자인 해봤습니다.">
              <img src="https://picsum.photos/id/231/320/190" alt="">
            </a>
          </div>
        </div>
        <div class="pf-content pf-2">
          <div>포폴2
            <a class="pf-img cursor-pointer" href="https://picsum.photos/id/232/500/400" data-lightbox="image-1" data-title="이미지2">
              <img src="https://picsum.photos/id/232/320/190" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="pf-wrap-2">
        <div class="pf-content pf-3">
          <div>포폴3
            <a class="pf-img cursor-pointer" href="https://picsum.photos/id/233/400/600" data-lightbox="image-1" data-title="이미지3">
              <img src="https://picsum.photos/id/233/320/190" alt="">
            </a>
          </div>
        </div>
        <div class="pf-content pf-4">
          <div>포폴4
            <a class="pf-img cursor-pointer" href="https://picsum.photos/id/234/800/400" data-lightbox="image-1" data-title="이미지4">
              <img src="https://picsum.photos/id/234/320/190" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="pf-wrap-3">
        <div class="pf-content pf-5">
          <div>포폴5
            <a class="pf-img cursor-pointer" href="https://picsum.photos/id/235/400/400" data-lightbox="image-1" data-title="이미지5">
              <img src="https://picsum.photos/id/235/320/190" alt="">
            </a>
          </div>
        </div>
        <div class="pf-content pf-6">
          <div>포폴6
            <a class="pf-img cursor-pointer" href="https://picsum.photos/id/236/720/400" data-lightbox="image-1" data-title="이미지6">
              <img src="https://picsum.photos/id/236/320/190" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 연락 -->
  <section class="section relative fp-auto-height-responsive" data-anchor="contact">
    <a class="cursor-pointer" href="#home"><img src="resource/img/btn_1_2.png" alt="상단버튼" class="section-item icon-up"></a>
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
        <button class="cursor-pointer" name="submit1" type="submit">Send</button>
      </div>
    </form>
  </section>
</div>
<?php require_once "foot.php"; ?>