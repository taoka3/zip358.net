// ==========================================
// DEMO009: DOM操作の基本（要素の取得・書き換え・クラス操作）
// ==========================================

// ブラウザー環境で実行されたときにDOM要素を操作するサンプル関数
function updatePageHeading(newTitle, isHighlighted = true) {
  if (typeof document === 'undefined') {
    console.log('[Node実行確認] 変更予定のタイトル:', newTitle);
    return;
  }

  // 1. 要素を取得する
  const heading = document.querySelector('h1');
  if (!heading) return;

  // 2. テキストを書き換える
  heading.textContent = newTitle;

  // 3. スタイルやクラスを切り替える
  heading.style.color = '#187bb9';
  heading.classList.toggle('is-active', isHighlighted);

  // 4. 新しい要素を作って追加する
  const badge = document.createElement('span');
  badge.textContent = ' [更新済み]';
  heading.appendChild(badge);
}

updatePageHeading('JavaScriptで書き換えた見出し');

