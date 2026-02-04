document.addEventListener("DOMContentLoaded", () => {
  const nav = document.getElementById("js-drawer-content");
  const drawerButtons = document.querySelectorAll(
    "#js-drawer-button, #js-close-button",
  );
  let scrollPosition = 0;

  // --- 1. 背景固定・解除の関数定義 ---
  const lockBackground = () => {
    scrollPosition = window.pageYOffset;
    document.body.style.position = "fixed";
    document.body.style.top = `-${scrollPosition}px`;
    document.body.style.left = "0";
    document.body.style.right = "0";
    document.body.style.width = "100%";
  };

  const unlockBackground = () => {
    document.body.style.position = "";
    document.body.style.top = "";
    document.body.style.left = "";
    document.body.style.right = "";
    document.body.style.width = "";
    window.scrollTo(0, scrollPosition);
  };

  // --- 2. 開閉ボタンのクリックイベント (統合) ---
  drawerButtons.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();

      drawerButtons.forEach((el) => el.classList.toggle("is-checked"));
      const isOpen = nav.classList.toggle("is-checked");

      if (isOpen) {
        lockBackground();
      } else {
        unlockBackground();
        // ＼追加！／ ドロワーを閉じる時にサブメニューの状態もリセット
        document.querySelectorAll(".menu-item-has-children").forEach((el) => {
          el.classList.remove("is-open");
          const sub = el.querySelector(".sub-menu");
          if (sub) sub.style.display = "none";
        });
      }
    });
  });

  // --- 3. ページ内リンククリック時にメニューを閉じる ---
  document
    .querySelectorAll('#js-drawer-content a[href^="#"]')
    .forEach((link) => {
      link.addEventListener("click", (e) => {
        // サブメニューの親ボタン（#）なら、ドロワーを閉じる処理を行わない
        if (link.getAttribute("href") === "#") {
          return;
        }

        drawerButtons.forEach((el) => el.classList.remove("is-checked"));
        nav.classList.remove("is-checked");
        unlockBackground();
      });
    });

  // --- 4. フェードインアニメーション ---
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
    { threshold: 0.2 },
  );

  targets.forEach((target) => {
    const rect = target.getBoundingClientRect();
    const inView = rect.top < window.innerHeight * 0.8 && rect.bottom > 0;
    if (inView) {
      target.classList.add("is-active");
    } else {
      observer.observe(target);
    }
  });
});

// --- 5. ブラウザの戻るボタン対策 ---
window.addEventListener("pageshow", () => {
  const nav = document.getElementById("js-drawer-content");
  const drawerButtons = document.querySelectorAll(
    "#js-drawer-button, #js-close-button",
  );

  if (nav && drawerButtons) {
    nav.classList.remove("is-checked");
    drawerButtons.forEach((btn) => btn.classList.remove("is-checked"));
    document.body.style.position = "";
    document.body.style.top = "";
  }
});

// --- 6. サブメニュー制御 (jQuery) ---
jQuery(function ($) {
  // セレクタを限定し、伝播を止める
  $('.header__nav-list .menu-item-has-children > a[href="#"]').on(
    "click",
    function (e) {
      e.preventDefault();
      e.stopPropagation(); // イベントの親への伝播を防止

      const $parent = $(this).parent();
      const $subMenu = $(this).next(".sub-menu");

      $parent.toggleClass("is-open");
      $subMenu.stop().slideToggle(300); // 300ms程度が自然
    },
  );
});

// --- 7. fvスワイパー制御 ---
const fvSwiper = new Swiper(".p-fv-slider", {
  loop: true,
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  speed: 2000,
});

// --- 8. secスワイパー制御 ---
const secSwiper = new Swiper(".p-sec-slider", {
  loop: true,
  autoplay: false,
  slidesPerView: 1,
  slidesPerGroup: 1,
  spaceBetween: 20,
  // 【ここがポイント】手動スワイプ・ドラッグを禁止にする
  allowTouchMove: false,

  observer: true,
  observeParents: true,

  // centeredSlides: true,
});
