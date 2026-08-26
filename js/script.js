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

// // --- 8. fvスワイパー制御 ---

// // 1. 共通の設定（swiperOptions）を定義する
// const swiperOptions = {
//   effect: "fade",
//   fadeEffect: {
//     crossFade: true, // 前のスライドが消えながら次が出る
//   },
//   loop: true,
//   speed: 16000, // スライドが動くスピード
//   allowTouchMove: false, // 手動操作を禁止
// };

// // 2. 定義した swiperOptions を使って初期化
// const fvSwiper1 = new Swiper(".p-fv-slider--1", swiperOptions);
// const fvSwiper2 = new Swiper(".p-fv-slider--2", swiperOptions);
// const fvSwiper3 = new Swiper(".p-fv-slider--3", swiperOptions);

// // --- 数珠つなぎの連動ロジック ---
// // スライドの「切り替え開始」を検知して次のスライダーにバトンを渡す
// fvSwiper1.on("slideChangeTransitionStart", () => {
//   setTimeout(() => {
//     fvSwiper2.slideNext();
//   }, 6000); // 1番目が動いてから6秒後に2番目
// });

// fvSwiper2.on("slideChangeTransitionStart", () => {
//   setTimeout(() => {
//     fvSwiper3.slideNext();
//   }, 6000); // 2番目が動いてから6秒後に3番目
// });

// fvSwiper3.on("slideChangeTransitionStart", () => {
//   setTimeout(() => {
//     fvSwiper1.slideNext();
//   }, 6000); // 3番目が動いてから6秒後に1番目に戻る
// });

// // 最初のキッカケだけ1回実行
// window.addEventListener("load", () => {
//   setTimeout(() => {
//     fvSwiper1.slideNext();
//   }, 6000);
// });

// // --- 8. fv画像制御 ---
window.addEventListener("load", () => {
  document.querySelector(".section-fv").classList.add("is-active");
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
    if (window.innerWidth >= 1024) {
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

// --- 11. 永代合同墓ページコンテンツ切り替え設定 ---
const tabButtons = document.querySelectorAll(".page-s-perpetual-care__btn");
const tabPanels = document.querySelectorAll(".page-s-perpetual-care__content");

tabButtons.forEach((button) => {
  button.addEventListener("click", () => {
    // 1. 全てのボタンとパネルから is-active を消す
    tabButtons.forEach((btn) => btn.classList.remove("is-active"));
    tabPanels.forEach((panel) => panel.classList.remove("is-active"));

    // 2. クリックされたボタンに is-active をつける
    button.classList.add("is-active");

    // 3. ボタンの data-target と同じ ID を持つパネルに is-active をつける
    const targetId = button.dataset.target;
    document.getElementById(targetId).classList.add("is-active");
  });
});

// --- 12. fvのリンクを特定セクション内に入ったら非表示 ---
document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelector(".section-fv__links");
  const introduceSection = document.querySelector(".section-introduce");
  const mm = window.matchMedia("(max-width: 1919px)");

  if (!links || !introduceSection) return;

  const observer = new IntersectionObserver(
    (entries) => {
      if (mm.matches) {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            links.classList.add("is-hidden");
          } else {
            links.classList.remove("is-hidden");
          }
        });
      } else {
        // 1920pxを超えたら隠しクラスを外す
        links.classList.remove("is-hidden");
      }
    },
    {
      // 下端から「-200px」の位置に境界線を引く
      // つまり、セクションが画面の下から○○px分せり上がってくるまで反応しない
      rootMargin: "0px 0px -50% 0px",

      // どのタイミングで反応させるか（0.1なら10%入ったら発火）
      threshold: 0.2,
    },
  );

  observer.observe(introduceSection);
});

// --- 13. 固定ボタンが画面の下端に到達したらボタンをフェードアウトする ---
window.addEventListener("scroll", function () {
  const fixButton = document.querySelector(".parts-fix-button");
  const footer = document.querySelector("footer"); // フッターのセレクタ

  if (!fixButton || !footer) return;

  const scrollHeight = document.documentElement.scrollHeight;
  const scrollPosition = window.innerHeight + window.pageYOffset;
  const footerHeight = footer.offsetHeight;

  // フッターが画面に現れたらクラスを追加
  if (scrollHeight - scrollPosition <= footerHeight) {
    fixButton.classList.add("is-hidden");
  } else {
    fixButton.classList.remove("is-hidden");
  }
});

// --- 14. 永代合同墓ページコンテンツ切り替え スクロールバージョン ---
window.addEventListener("DOMContentLoaded", () => {
  // ページ完全に読み込み後に実行（要素の高さ計算を正確にするため）
  window.addEventListener("load", () => {
    // URLのハッシュを取得
    const hash = window.location.hash;

    // ハッシュが「#content-2-sec9」だった場合
    if (hash === "#content-2-sec9") {
      // 1. タブボタンの切り替え
      const btn1 = document.querySelector(".page-s-perpetual-care__btn.btn-1");
      const btn2 = document.querySelector(".page-s-perpetual-care__btn.btn-2");
      if (btn1) btn1.classList.remove("is-active");
      if (btn2) btn2.classList.add("is-active");

      // 2. コンテンツエリアの切り替え
      const content1 = document.getElementById("content-1");
      const content2 = document.getElementById("content-2");
      if (content1) content1.classList.remove("is-active");
      if (content2) content2.classList.add("is-active");

      // 3. セクション9（id="sec-surrogate"）へのスムーススクロール
      const target = document.getElementById("sec-surrogate");
      if (target) {
        // ヘッダーが固定（追従）の場合は、その高さ分（例: 100px）をここで調整
        // --- ここでPCとSPのヘッダー高さを分岐 ---
        let headerHeight = 100; // デフォルト（PC用）の高さ

        if (window.innerWidth < 768) {
          headerHeight = 0; // スマホ（画面幅768px未満）の時の高さ
        }
        // ---------------------------------------
        const targetPosition =
          target.getBoundingClientRect().top +
          window.pageYOffset -
          headerHeight;

        // スクロール実行
        window.scrollTo({
          top: targetPosition,
          behavior: "smooth",
        });
      }
    }
  });
});

// --- 15. カードリストの切り替え ---
(function () {
  const cardLists = document.querySelectorAll(".card-list");

  if (!cardLists.length) return;

  cardLists.forEach(function (cardList) {
    const toggleBtn = cardList.querySelector(".card-list__toggle");
    const more = cardList.querySelector(".card-list__more");
    const toggleText = cardList.querySelector(".card-list__toggle-text");

    if (!toggleBtn || !more || !toggleText) return;

    // 初期状態
    more.style.height = "0px";
    toggleBtn.setAttribute("aria-expanded", "false");
    toggleText.textContent = "もっと見る";

    toggleBtn.addEventListener("click", function () {
      const isOpen = toggleBtn.getAttribute("aria-expanded") === "true";

      if (!isOpen) {
        // 開く
        more.style.height = more.scrollHeight + "px";

        toggleBtn.setAttribute("aria-expanded", "true");
        toggleText.textContent = "閉じる";
      } else {
        // 閉じる
        more.style.height = "0px";

        toggleBtn.setAttribute("aria-expanded", "false");
        toggleText.textContent = "もっと見る";
      }
    });

    // リサイズ対応
    window.addEventListener("resize", function () {
      const isOpen = toggleBtn.getAttribute("aria-expanded") === "true";

      if (isOpen) {
        more.style.height = "auto";
        more.style.height = more.scrollHeight + "px";
      }
    });
  });
})();
