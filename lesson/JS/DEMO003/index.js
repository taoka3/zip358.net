// ==========================================
// DEMO003: 条件分岐（if / else と switch）
// ==========================================

// 1. if / else if / else による点数判定
const score = 85;

if (score >= 80) {
  console.log(`${score}点：大変よくできました！（A判定）`);
} else if (score >= 60) {
  console.log(`${score}点：合格です！（B判定）`);
} else {
  console.log(`${score}点：もう一度復習しましょう（C判定）`);
}

// 2. 三項演算子（条件 ? 真のとき : 偽のとき）
const age = 20;
const ticketType = age >= 18 ? '大人料金' : '子ども料金';
console.log(`年齢 ${age}歳 → ${ticketType}`);

// 3. switch文による信号機の分岐
const signal = 'green';

switch (signal) {
  case 'red':
    console.log('止まれ');
    break;
  case 'yellow':
    console.log('注意して止まれ');
    break;
  case 'green':
    console.log('進め');
    break;
  default:
    console.log('不明な信号です');
    break;
}

