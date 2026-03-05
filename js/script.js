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

  // --- 2. 開閉ボタンのクリックイベント ---
  drawerButtons.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();

      drawerButtons.forEach((el) => el.classList.toggle("is-checked"));
      const isOpen = nav.classList.toggle("is-checked");

      if (isOpen) {
        lockBackground();
      } else {
        unlockBackground();
        // サブメニューのリセット
        document.querySelectorAll(".menu-item-has-children").forEach((el) => {
          el.classList.remove("is-open");
        });
      }
    });
  });

  // --- 3. ページ内リンククリック時にメニューを閉じる ---
  document
    .querySelectorAll('#js-drawer-content a[href^="#"]')
    .forEach((link) => {
      link.addEventListener("click", (e) => {
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
        // 少しでも（あるいは指定した割合が）画面に入ったら発火
        if (entry.isIntersecting) {
          entry.target.classList.add("is-active");
          obs.unobserve(entry.target); // 一度表示したら監視を終了
        }
      });
    },
    {
      // rootMarginを使って「画面の下端より少し手前」で反応させる
      rootMargin: "0px 0px -10% 0px",
      threshold: 0, // 0にすると、要素の端っこが少しでも入った瞬間に反応
    },
  );

  targets.forEach((target) => {
    observer.observe(target);
  });

  // --- 5. ヘッダー制御 ---
  const header = document.getElementById("js-header");
  const fv = document.querySelector(".js-fv");

  if (header && fv) {
    const checkScroll = () => {
      const fvHeight = fv.offsetHeight;
      const scrollTop =
        window.pageYOffset || document.documentElement.scrollTop;

      if (scrollTop > fvHeight) {
        header.classList.add("is-scrolled");
      } else {
        header.classList.remove("is-scrolled");
      }
    };
    window.addEventListener("scroll", checkScroll);
    window.addEventListener("resize", checkScroll);
    checkScroll();
  }
});

// --- 6. ブラウザの戻るボタン対策 ---
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

// --- 7. サブメニュー制御 ---
const parentMenuItems = document.querySelectorAll(
  ".header__nav-list .menu-item-has-children > a",
);
parentMenuItems.forEach((link) => {
  link.addEventListener("click", (e) => {
    if (link.getAttribute("href") === "#" || window.innerWidth <= 1200) {
      e.preventDefault();
      e.stopPropagation();
    }
  });
});

// --- 8. fvスワイパー制御 ---

// 1. 共通の設定（swiperOptions）を定義する
const swiperOptions = {
  effect: "fade",
  loop: true,
  speed: 5000, // スライドが動くスピード
  allowTouchMove: false, // 手動操作を禁止
};

// 2. 定義した swiperOptions を使って初期化
const fvSwiper1 = new Swiper(".p-fv-slider--1", swiperOptions);
const fvSwiper2 = new Swiper(".p-fv-slider--2", swiperOptions);
const fvSwiper3 = new Swiper(".p-fv-slider--3", swiperOptions);

// --- 自動・数珠つなぎループのロジック ---

function startSequentialLoop() {
  // 1番目を動かす
  if (fvSwiper1) fvSwiper1.slideNext();

  // ○○秒後に2番目を動かす
  setTimeout(() => {
    if (fvSwiper2) fvSwiper2.slideNext();
  }, 3000);

  // ○○秒後に3番目を動かす
  setTimeout(() => {
    if (fvSwiper3) fvSwiper3.slideNext();
  }, 6000);

  // ○○秒おきにこの関数自体をループ
  setTimeout(startSequentialLoop, 9000);
}

// ページ読み込み完了後に実行
window.addEventListener("load", () => {
  setTimeout(startSequentialLoop, 2000);
});

// --- 9. secスワイパー制御 ---
const secSwiper = new Swiper(".p-sec-slider", {
  loop: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: true, // ユーザーが触った後は自動再生を止める設定
  },
  speed: 2000,
  pagination: { el: ".swiper-pagination", clickable: true },
  navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
});

// --- 10. fvのリンクをバナー化のためのクラス付与 ---
document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelector(".section-fv__links");
  const container = document.querySelector(".section-fv__container");
  const header = document.querySelector(".header");

  if (!links || !header) return;

  // 初期位置の情報を保存
  const initialRect = links.getBoundingClientRect();
  const initialOffsetTop = initialRect.top + window.pageYOffset;
  const initialRight = window.innerWidth - initialRect.right;

  // 元の親（container）を覚えておく
  const originalParent = links.parentNode;

  window.addEventListener("scroll", function () {
    if (window.innerWidth >= 1025) {
      const scrollY = window.pageYOffset;
      const headerHeight = header.offsetHeight;

      if (scrollY > initialOffsetTop - headerHeight) {
        if (!links.classList.contains("is-fixed")) {
          // body直下に移動させることで、親の制限を無視する
          document.body.appendChild(links);
          links.classList.add("is-fixed");
        }
        // links.style.right = initialRight + "px";
      } else {
        if (links.classList.contains("is-fixed")) {
          // 元の場所に戻す
          originalParent.appendChild(links);
          links.classList.remove("is-fixed");
          // links.style.right = "";
        }
      }
    }
  });
});

// 第二案　バナーがフッターに被らないようにする制御
// document.addEventListener("DOMContentLoaded", function () {
//   const links = document.querySelector(".links");
//   const footer = document.querySelector("footer"); // フッターのタグ名を確認！

//   if (!links || !footer) return;

//   // フッターを監視するセンサー（Intersection Observer）
//   const observer = new IntersectionObserver(
//     (entries) => {
//       entries.forEach((entry) => {
//         if (entry.isIntersecting) {
//           // フッターが画面内に入ったら止める
//           links.classList.add("is-stopped");
//         } else {
//           // フッターが画面外（下）に消えたら追従再開
//           links.classList.remove("is-stopped");
//         }
//       });
//     },
//     {
//       rootMargin: "0px 0px 0px 0px", // 反応する位置の微調整が必要ならここ
//       threshold: 0, // 少しでもフッターが見えたら反応
//     },
//   );

//   observer.observe(footer);
// });
