// ==========================================
// DEMO010: イベント処理（addEventListener）
// ==========================================

// ボタンクリックと文字入力に反応するイベント設定の例
function setupInteractiveEvents() {
  if (typeof document === 'undefined') {
    console.log('ブラウザー上で #run-btn や #name-input のイベントを監視します。');
    return;
  }

  const button = document.querySelector('#run-btn');
  const input = document.querySelector('#name-input');
  const output = document.querySelector('#output');

  // 1. クリックイベント（click）
  if (button && output) {
    button.addEventListener('click', () => {
      output.textContent = 'ボタンがクリックされました！';
    });
  }

  // 2. 入力イベント（input：文字を打つたびにリアルタイム反応）
  if (input && output) {
    input.addEventListener('input', (event) => {
      const value = event.target.value.trim();
      output.textContent = value
        ? `こんにちは、${value}さん！（${value.length}文字）`
        : '名前を入力してください。';
    });
  }
}

setupInteractiveEvents();

