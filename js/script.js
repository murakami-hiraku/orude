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

// スワイパーの設定
const swiper = new Swiper(".fv-swiper", {
  direction: "vertical",
  slidesPerView: "auto",
  loop: false,
  speed: 25000,
  allowTouchMove: true,

  // コンテンツの高さに基づいてスクロールを有効にする
  watchSlidesProgress: true,

  // 【重要】フリーモードの設定を細かく調整
  freeMode: {
    enabled: true,
    momentum: false, // 指を離した後の「慣性」をオフにする（これでじわじわ動かなくなる）
    minimumVelocity: 0.02,
  },

  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },

  scrollbar: {
    el: ".swiper-scrollbar",
    draggable: true,
    hide: false,
    snapOnRelease: false, // 指を離した時にスライド位置に吸い付かせない
  },

  mousewheel: true,
});

// --- 停止・制御処理 ---

// 1. タッチした瞬間に、アニメーションを「物理的に」止める
swiper.on("touchStart", () => {
  swiper.autoplay.stop();
  const wrapper = swiper.wrapperEl;
  const matrix = window.getComputedStyle(wrapper).transform;
  // 現在の正確な位置を固定する（これがズレとじわじわの防止に効きます）
  wrapper.style.transform = matrix;
  swiper.setTransition(0);
});

// 2. 指を離した瞬間、勝手に動かないように改めて固定する
swiper.on("touchEnd", () => {
  swiper.setTransition(0);
  // もし自動再生を再開させたくない場合はここで止めたままにする
  // 再開させたい場合は swiper.autoplay.start() ですが、リニアなので挙動が難しくなります
});

// 3. スクロールバー操作中のズレを防止
swiper.on("setTranslate", () => {
  // 手動操作中はTransitionを強制的に0にする
  if (swiper.autoplay.running === false) {
    swiper.setTransition(0);
  }
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
