<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>디자이너 안예진 포트폴리오</title>

  <!-- 제이쿼리 불러오기 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.19/lodash.min.js"></script>

  <!-- imagesloaded -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>

  <!-- 풀페이지 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.css">

  <!-- 테일윈드 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.4/tailwind.min.css">

  <!--light box-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

  <!--sticker-->
  <script src="resource/sticker.min.js"></script>

  <!-- 사이트 공통 JS -->
  <script src="js/common.js" defer></script>

  <!-- 사이트 공통 CSS -->
  <link rel="stylesheet" href="css/common.css">
</head>

<body>
  <div class="site-wrap">
  <header class="top-bar">
    <div class="flex h-full">
      <a class="flex items-center cursor-pointer relative" data-menuanchor="home" href="#home">
        <img src="resource/img/logo_0_1.png" alt="로고" class="logo">
        <img src="resource/img/home.png" alt="홈표시" class="home hidden">
      </a>

      <div class="flex-grow"></div>

      <ul class="menu-1 flex items-center">
        <li data-menuanchor="about-me">
          <a href="#about-me" class="cursor-pointer">
            <span>ABOUT ME</span>
            <svg class="svg-1 active-line" width="190" height="100" viewBox="0 0 194 102" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M183.401 74.6121C152.201 83.3634 120.029 86.3306 87.7828 86.3306C75.5873 86.3306 62.4023 87.8139 50.4017 85.0971C41.2186 83.0182 32.1826 80.0204 23.8484 75.503C18.4729 72.5893 12.8325 69.4065 8.15634 65.3607C4.51723 62.2121 3.3177 58.0168 2.35927 53.2995C0.574196 44.5136 5.69222 38.9416 12.1543 33.7687C21.0791 26.6244 31.005 22.143 41.7727 18.795C74.9024 8.49402 110.989 5.26774 145.021 12.319C156.101 14.6149 167.435 17.5332 176.971 24.0718C181.973 27.5015 189.016 34.3024 191.264 40.1419C192.26 42.7287 191.797 46.0128 191.797 48.708C191.797 51.8968 192.605 56.5707 190.997 59.5014C187.527 65.829 179.853 71.6452 173.673 74.7492C161.947 80.6388 150.684 85.0567 137.691 86.8789C122.509 89.008 106.695 88.7428 91.381 88.7977C78.9479 88.8423 66.9597 87.5542 54.5996 86.6048C46.9495 86.0171 39.7396 86.6387 32.4108 83.8979C28.5927 82.47 24.8885 80.6994 21.1498 79.0665C16.6146 77.0858 13.3326 70.691 10.7217 66.5599C4.80603 57.1999 6.83045 47.8704 12.8873 39.3881C27.2646 19.2533 52.3687 12.7343 74.8893 7.69325C98.731 2.35651 125.294 -0.403277 149.485 4.71222C157.407 6.38736 164.553 8.46162 170.908 13.6896C177.942 19.4771 185.227 24.6851 189.265 33.0834C190.807 36.2895 191.197 38.5842 191.197 42.095C191.197 47.1456 191.955 52.7881 189.731 57.4798C187.616 61.9442 184.081 65.5786 180.536 68.8557C171.264 77.4264 161.342 85.4788 151.584 93.4577C146.905 97.2838 141.59 102.481 136.025 98.6659"
                stroke="#C20101" stroke-width="4" stroke-linecap="round" />
            </svg>
          </a>
        </li>
        <li data-menuanchor="portfolio">
          <a href="#portfolio" class="cursor-pointer">
            <span>PORTFOLIO</span>
            <svg class="svg-1 active-line" width="190" height="100" viewBox="0 0 194 102" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M183.401 74.6121C152.201 83.3634 120.029 86.3306 87.7828 86.3306C75.5873 86.3306 62.4023 87.8139 50.4017 85.0971C41.2186 83.0182 32.1826 80.0204 23.8484 75.503C18.4729 72.5893 12.8325 69.4065 8.15634 65.3607C4.51723 62.2121 3.3177 58.0168 2.35927 53.2995C0.574196 44.5136 5.69222 38.9416 12.1543 33.7687C21.0791 26.6244 31.005 22.143 41.7727 18.795C74.9024 8.49402 110.989 5.26774 145.021 12.319C156.101 14.6149 167.435 17.5332 176.971 24.0718C181.973 27.5015 189.016 34.3024 191.264 40.1419C192.26 42.7287 191.797 46.0128 191.797 48.708C191.797 51.8968 192.605 56.5707 190.997 59.5014C187.527 65.829 179.853 71.6452 173.673 74.7492C161.947 80.6388 150.684 85.0567 137.691 86.8789C122.509 89.008 106.695 88.7428 91.381 88.7977C78.9479 88.8423 66.9597 87.5542 54.5996 86.6048C46.9495 86.0171 39.7396 86.6387 32.4108 83.8979C28.5927 82.47 24.8885 80.6994 21.1498 79.0665C16.6146 77.0858 13.3326 70.691 10.7217 66.5599C4.80603 57.1999 6.83045 47.8704 12.8873 39.3881C27.2646 19.2533 52.3687 12.7343 74.8893 7.69325C98.731 2.35651 125.294 -0.403277 149.485 4.71222C157.407 6.38736 164.553 8.46162 170.908 13.6896C177.942 19.4771 185.227 24.6851 189.265 33.0834C190.807 36.2895 191.197 38.5842 191.197 42.095C191.197 47.1456 191.955 52.7881 189.731 57.4798C187.616 61.9442 184.081 65.5786 180.536 68.8557C171.264 77.4264 161.342 85.4788 151.584 93.4577C146.905 97.2838 141.59 102.481 136.025 98.6659"
                stroke="#C20101" stroke-width="4" stroke-linecap="round" />
            </svg>
          </a>
        </li>
        <li data-menuanchor="contact">
          <a href="#contact" class="cursor-pointer">
            <span>CONTACT</span>
            <svg class="svg-1 active-line" width="190" height="100" viewBox="0 0 194 102" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M183.401 74.6121C152.201 83.3634 120.029 86.3306 87.7828 86.3306C75.5873 86.3306 62.4023 87.8139 50.4017 85.0971C41.2186 83.0182 32.1826 80.0204 23.8484 75.503C18.4729 72.5893 12.8325 69.4065 8.15634 65.3607C4.51723 62.2121 3.3177 58.0168 2.35927 53.2995C0.574196 44.5136 5.69222 38.9416 12.1543 33.7687C21.0791 26.6244 31.005 22.143 41.7727 18.795C74.9024 8.49402 110.989 5.26774 145.021 12.319C156.101 14.6149 167.435 17.5332 176.971 24.0718C181.973 27.5015 189.016 34.3024 191.264 40.1419C192.26 42.7287 191.797 46.0128 191.797 48.708C191.797 51.8968 192.605 56.5707 190.997 59.5014C187.527 65.829 179.853 71.6452 173.673 74.7492C161.947 80.6388 150.684 85.0567 137.691 86.8789C122.509 89.008 106.695 88.7428 91.381 88.7977C78.9479 88.8423 66.9597 87.5542 54.5996 86.6048C46.9495 86.0171 39.7396 86.6387 32.4108 83.8979C28.5927 82.47 24.8885 80.6994 21.1498 79.0665C16.6146 77.0858 13.3326 70.691 10.7217 66.5599C4.80603 57.1999 6.83045 47.8704 12.8873 39.3881C27.2646 19.2533 52.3687 12.7343 74.8893 7.69325C98.731 2.35651 125.294 -0.403277 149.485 4.71222C157.407 6.38736 164.553 8.46162 170.908 13.6896C177.942 19.4771 185.227 24.6851 189.265 33.0834C190.807 36.2895 191.197 38.5842 191.197 42.095C191.197 47.1456 191.955 52.7881 189.731 57.4798C187.616 61.9442 184.081 65.5786 180.536 68.8557C171.264 77.4264 161.342 85.4788 151.584 93.4577C146.905 97.2838 141.59 102.481 136.025 98.6659"
                stroke="#C20101" stroke-width="4" stroke-linecap="round" />
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </header>
    <main>