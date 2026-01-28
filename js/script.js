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

      // クラスの切り替え
      drawerButtons.forEach((el) => el.classList.toggle("is-checked"));
      const isOpen = nav.classList.toggle("is-checked");

      // 背景固定の連動
      if (isOpen) {
        lockBackground();
      } else {
        unlockBackground();
      }
    });
  });

  // --- 3. ページ内リンククリック時にメニューを閉じる ---
  document
    .querySelectorAll('#js-drawer-content a[href^="#"]')
    .forEach((link) => {
      link.addEventListener("click", () => {
        drawerButtons.forEach((el) => el.classList.remove("is-checked"));
        nav.classList.remove("is-checked");
        unlockBackground();
      });
    });

  // --- 4. フェードインアニメーション (IntersectionObserver) ---
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
    // 背景固定も念のため解除
    document.body.style.position = "";
    document.body.style.top = "";
  }
});
