// ==========================================
// DEMO011: タイマー処理と日時オブジェクト（Date）
// ==========================================

// 1. 現在の日時を整形して返す関数
function formatCurrentDateTime(now = new Date()) {
  const year = now.getFullYear();
  const month = String(now.getMonth() + 1).padStart(2, '0');
  const day = String(now.getDate()).padStart(2, '0');
  const hours = String(now.getHours()).padStart(2, '0');
  const minutes = String(now.getMinutes()).padStart(2, '0');
  const seconds = String(now.getSeconds()).padStart(2, '0');

  return `${year}/${month}/${day} ${hours}:${minutes}:${seconds}`;
}

console.log('現在時刻:', formatCurrentDateTime());

// 2. setTimeout（指定ミリ秒後に1回だけ実行）
setTimeout(() => {
  console.log('1秒が経過しました（setTimeout）');
}, 1000);

// 3. setInterval（一定間隔で繰り返し実行し、3回で停止する例）
let tickCount = 0;
const timerId = setInterval(() => {
  tickCount++;
  console.log(`定期実行 (${tickCount}/3):`, formatCurrentDateTime());

  if (tickCount >= 3) {
    clearInterval(timerId);
    console.log('タイマーを停止しました（clearInterval）');
  }
}, 500);

