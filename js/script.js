// ドロワーメニュー開閉
document
  .querySelector("#js-drawer-button")
  .addEventListener("click", function (e) {
    e.preventDefault();

    document.querySelector("#js-drawer-button").classList.toggle("is-checked");

    document.querySelector("#js-drawer-content").classList.toggle("is-checked");
  });

// リンクで飛んだらドロワーメニューを閉じる
document
  .querySelectorAll('#js-drawer-content a[href^="#"]')
  .forEach(function (link) {
    link.addEventListener("click", function (e) {
      document
        .querySelector("#js-drawer-button")
        .classList.remove("is-checked");

      document
        .querySelector("#js-drawer-content")
        .classList.remove("is-checked");
    });
  });

// ドロワーメニュー表示でスクロール禁止
document.addEventListener("DOMContentLoaded", () => {
  const button = document.getElementById("js-drawer-button");
  const nav = document.getElementById("js-drawer-content");

  let scrollPosition = 0;

  // 背景を固定する
  const lockBackground = () => {
    scrollPosition = window.pageYOffset;

    document.body.style.position = "fixed";
    document.body.style.top = `-${scrollPosition}px`;
    document.body.style.left = "0";
    document.body.style.right = "0";
    document.body.style.width = "100%";
  };

  // 背景固定を解除して元の位置へ
  const unlockBackground = () => {
    document.body.style.position = "";
    document.body.style.top = "";
    document.body.style.left = "";
    document.body.style.right = "";
    document.body.style.width = "";

    window.scrollTo(0, scrollPosition);
  };

  button.addEventListener("click", () => {
    const isOpen = nav.classList.toggle("is-open");
    button.classList.toggle("is-checked", isOpen);

    if (isOpen) {
      lockBackground();
    } else {
      unlockBackground();
    }
  });
});

// swiperの設定
const swiper = new Swiper(".mySwiper", {
  slidesPerView: 1, // 横に1枚のスライド
  slidesPerGroup: 1, // スライド単位で移動
  spaceBetween: 30,
  loop: false,

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    type: "bullets",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// 読み込み時、スクロール時、セクションをフェードイン
document.addEventListener("DOMContentLoaded", () => {
  const targets = document.querySelectorAll(".fadein");

  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-active");
          obs.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.2,
    }
  );

  // 読み込み時に画面内の要素は即フェードイン
  targets.forEach((target) => {
    const rect = target.getBoundingClientRect();
    const inView =
      rect.top < window.innerHeight * 0.8 && // 画面の80%以内なら表示
      rect.bottom > 0;

    if (inView) {
      target.classList.add("is-active");
    } else {
      observer.observe(target);
    }
  });
});
