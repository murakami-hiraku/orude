// ダウンロードフォーム送信後サンクスページにリダイレクト
// /js/cf7-redirect.js

document.addEventListener(
  "wpcf7mailsent",
  function (event) {
    console.log("ContactForm7 sent. ID:", event.detail.contactFormId); // ←←発火したか？
    const formId = event.detail.contactFormId;
    console.log("Form ID:", formId); // ←どのIDが渡されたか？

                            switch (formId) {
      case 808: // 資料ダウンロードフォームのID
        window.location.href = "/download-thanks";
        break;

      case 811: // お問い合わせフォームのID
        window.location.href = "/contact-thanks";
        break;

      default:
        // それ以外のフォームは何もしない（または共通ページにリダイレクト）
        break;
    }
  },
  false
);

// バリデーションエラー表示制御
document.addEventListener('wpcf7invalid', function(event) {
  const form = event.target;
  // 不備があるときだけ .show-error を付与
  form.classList.add('show-error');
});
