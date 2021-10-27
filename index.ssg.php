<?php require_once "head.php"; ?>
<div id="fullpage">
  <!-- 로딩화면 -->
  <div class="loading-box flex items-center justify-center">
    <img src="resource/img/loading.gif" alt="로딩.gif">
  </div>
  <!-- 홈 -->
  <section class="section relative fp-auto-height-responsive" data-anchor="home">
    <a class="cursor-pointer" href="#about-me"><img src="resource/img/btn_1_1.png" alt="하단버튼"
        class="section-item icon-down"></a>
    <!-- <h1 class="main-text section-item whitespace-nowrap">
      THE CREATIVE NOTE
    </h1> -->
    <div class="mousemove-effect-1-el flex items-center justify-center" data-mousemove-effect1-hor-res="0.03"
      data-mousemove-effect1-ver-res="0.01">
      <img class="hm-img-1" src="resource/img/main-title.png" alt="메인타이틀"></div>
    <!-- <div><img src="resource/img/main-title.png" alt="메인타이틀" class="section-item hm-img-1"></div> -->
  </section>

  <!-- 자기소개
  <section class="section relative fp-auto-height-responsive" data-anchor="about-me">
    <a class="cursor-pointer" href="#home"><img src="resource/img/btn_1_2.png" alt="상단버튼"
        class="section-item icon-up"></a>
    <div class="flex items-center justify-center"><img src="resource/img/2-1.png" alt="프로필" class="am-img-1"></div>
  </section> -->

  <!-- 자기소개 -->
  <section class="section relative fp-auto-height-responsive" data-anchor="about-me">
    <a class="cursor-pointer" href="#home"><img src="resource/img/btn_1_2.png" alt="상단버튼"
        class="section-item icon-up"></a>
    <div style="width:618px; height: 458px;">
      <img class="section-item am-img-1" src="resource/img/2-1.png" alt="프로필 사진">
    </div>
    <div class="flex items-center justify-center">
      <div class="am-img-2" style="width:363px; height:388px;"></div>
      <div class="am-img-3 flex flex-col items-center justify-center" style="width:363px; height:388px;">
        <div class="my-10">
          <a href="https://to2.kr/ckc" target="_blank" class="cursor-pointer flex flex-col items-center justify-center">
            <img src="resource/img/icon-youtube.png" alt="">
            <div class="mt-2">공부 영상</div>
          </a>
        </div>
        <div class="flex">
          <div class="mr-10">
            <a href="https://to2.kr/ckb" target="_blank" class="cursor-pointer flex flex-col items-center justify-center">
              <img src="resource/img/icon-codepen.png" alt="">
              <div class="mt-2">공부 위키</div>
            </a>
          </div>
          <div>
            <a href="https://to2.kr/cwn" target="_blank" class="cursor-pointer flex flex-col items-center justify-center">
              <img src="resource/img/icon-codepen.png" alt="">
              <div class="mt-2">모작 위키</div>
            </a>
          </div>
        </div>
      </div>
      <div class="am-img-4" style="width:363px; height:388px;"></div>
    </div>
  </section>

  <!-- 포트폴리오 -->
  <section class="section relative fp-auto-height-responsive" data-anchor="portfolio">
    <a class="cursor-pointer" href="#home"><img src="resource/img/btn_1_2.png" alt="상단버튼"
        class="section-item icon-up"></a>
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
          <div>
            <a class="pf-img cursor-pointer" href="https://schim613.github.io/jype_website/" target="_blank">
              <span>JYP 엔터테인먼트 리디자인</span>
              <img src="resource/img/pf_img1.png" alt="">
            </a>
            <div class="mt-3">▶ 기획 100%, 코딩 100%</div>
            <div class="mt-2">php 이용하여 메인페이지와 서브페이지의 상·하단바의 코드 중복을 최소화하여 효율적으로 만들었습니다.</div>
            <div></div>
          </div>
        </div>
        <div class="pf-content pf-2">
          <div>
            <a class="pf-img cursor-pointer" href="https://codepen.io/genie_an/full/bGRZEgr" target="_blank">
              <span>오설록 웹사이트 모작</span>
              <img src="resource/img/pf_img2.png" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="pf-wrap-2">
        <div class="pf-content pf-3">
          <div>
            <a class="pf-img cursor-pointer" href="https://codepen.io/genie_an/full/mdwjgzZ" target="_blank">
              <span>맥도날드 웹사이트 모작</span>
              <img src="resource/img/pf_img3.png" alt="">
            </a>
          </div>
        </div>
        <div class="pf-content pf-4">
          <div>
            <a class="pf-img cursor-pointer" href="https://to2.kr/cXc" target="_blank">
              <span>일룸 UI/UX 프로세스 페이지</span>
              <img src="resource/img/pf_img4.png" alt="">
            </a>
            <div class="mt-3">▶ 팀 프로젝트</div>
            <div class="my-2">타경쟁업체와 달리 기존 앱이 없어 온라인 구매에 어려움을 겪고 있는 기존 고객들에게 실용적이며 편리한 어플을 제공합니다. 또한 새롭게 유입하는 고객들에게 사용성을
              높이는 편리한 UI/UX를 목표로 프로젝트를 진행했습니다.</div>
            <a class="underline cursor-pointer" href="https://to2.kr/df7" target="_blank">▷ 상세페이지</a>
            <a class="underline cursor-pointer" href="https://to2.kr/da1" target="_blank">▷ 기획 PPT</a>
          </div>
        </div>
      </div>
      <div class="pf-wrap-3">
        <div class="pf-content pf-5">
          <div>
            <a class="pf-img cursor-pointer" href="resource/img/pf_img-5-1.jpg" data-lightbox="image-1"
              data-title="자라섬 재즈 페스티벌 포스터 시안1">
              <span>자라섬 재즈 페스티벌 포스터</span>
              <img src="resource/img/pf_img-5.jpg" alt="" style="width:auto; height:365px; margin-left:40px;">
            </a>
          </div>
          <div>
            <a class="pf-img hidden" href="resource/img/pf_img-5-2.jpg" data-lightbox="image-1"
              data-title="자라섬 재즈 페스티벌 포스터 시안2">
            </a>
          </div>
          <div>
            <a class="pf-img hidden" href="resource/img/pf_img-5-3.jpg" data-lightbox="image-1"
              data-title="자라섬 재즈 페스티벌 포스터 시안3">
            </a>
          </div>
        </div>
        <div class="pf-content pf-6">
          <div>
            <a class="pf-img cursor-pointer" href="https://codepen.io/genie_an/full/wveOGjO" target="_blank">
              <span>피코크 웹사이트 모작</span>
              <img src="resource/img/pf_img6.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 연락 -->
  <section class="section relative fp-auto-height-responsive" data-anchor="contact">
    <a class="cursor-pointer" href="#home"><img src="resource/img/btn_1_2.png" alt="상단버튼"
        class="section-item icon-up"></a>
    <div><img src="resource/img/4-1.png" alt="연락처" class="section-item ct-img-1"></div>
    <div><img src="resource/img/4-2.png" alt="연락폼" class="section-item ct-img-2"></div>
    <div><img src="resource/img/4-3.png" alt="스티커1" class="section-item ct-img-3"></div>
    <div><img src="resource/img/4-4.png" alt="스티커2" class="section-item ct-img-4"></div>
    <div><img src="resource/img/4-5.png" alt="스티커3" class="section-item ct-img-5"></div>
    <div class="sticker section-item ct-img-6 cursor-pointer"></div>
    <div class="sticker section-item ct-img-7 cursor-pointer"></div>
    <form target="_blank" action="https://formspree.io/f/mnqlozzw" onsubmit="sendEmailForm(this); return false;"
      method="POST">
      <div class="section-item ct-form-1">
        <input autofocus type="email" name="_replyto" placeholder="E-mail address">
      </div>
      <div class="section-item ct-form-2">
        <textarea name="message" placeholder="Contents"></textarea>
      </div>
      <div class="section-item ct-form-3">
        <button class="cursor-pointer" name="submit1" type="submit">Send</button>
      </div>
    </form>
  </section>
</div>
<?php require_once "foot.php"; ?>