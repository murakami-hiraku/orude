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

  // --- 5. ヘッダー制御（DOMContentLoaded内に移動してまとめました） ---
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
const fvSwiper = new Swiper(".p-fv-slider", {
  loop: true,
  effect: "fade",
  autoplay: { delay: 4000 },
  speed: 2000,
});

// --- 9. secスワイパー制御 ---
const secSwiper = new Swiper(".p-sec-slider", {
  loop: true,
  pagination: { el: ".swiper-pagination", clickable: true },
  navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
});
