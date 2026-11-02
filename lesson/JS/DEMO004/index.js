// ==========================================
// DEMO004: 繰り返し処理（for と while）
// ==========================================

// 1. for文：1から10までの合計を計算する
let sum = 0;
for (let i = 1; i <= 10; i++) {
  sum += i;
}
console.log('1から10までの合計:', sum);

// 2. 偶数だけを表示する（continue の活用）
const evenNumbers = [];
for (let i = 1; i <= 10; i++) {
  if (i % 2 !== 0) {
    continue; // 奇数のときはスキップ
  }
  evenNumbers.push(i);
}
console.log('1〜10の偶数:', evenNumbers.join(', '));

// 3. while文：カウントダウン処理
let count = 3;
while (count > 0) {
  console.log(`カウントダウン: ${count}`);
  count--;
}
console.log('スタート！');

