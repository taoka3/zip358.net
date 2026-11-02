// ==========================================
// DEMO006: 関数の定義とアロー関数
// ==========================================

// 1. function 宣言による関数定義（デフォルト引数付き）
function greet(name = 'ゲスト') {
  return `こんにちは、${name}さん！`;
}

console.log(greet('佐藤'));
console.log(greet()); // 引数を省略すると「ゲスト」が使われる

// 2. アロー関数（モダンな書き方）
const calcTaxIncluded = (price, taxRate = 0.1) => {
  return Math.floor(price * (1 + taxRate));
};

console.log('1,500円の税込価格:', calcTaxIncluded(1500), '円');

// 3. 1行で書ける省略記法のアロー関数
const double = (num) => num * 2;
console.log('7の2倍は:', double(7));

