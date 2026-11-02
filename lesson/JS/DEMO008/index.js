// ==========================================
// DEMO008: 配列の高階関数（map・filter・reduce）
// ==========================================

const items = [
  { name: 'HTML入門書', price: 1800, inStock: true },
  { name: 'JavaScript実践ガイド', price: 2600, inStock: true },
  { name: 'PHPサーバー開発', price: 2400, inStock: false },
];

// 1. filter：在庫あり（inStock === true）の商品だけを抽出
const availableItems = items.filter((item) => item.inStock);
console.log('在庫ありの商品:', availableItems);

// 2. map：商品名と税込価格の文字列リストに変換
const priceLabels = availableItems.map((item) => {
  const taxIncluded = Math.floor(item.price * 1.1);
  return `${item.name}（税込 ${taxIncluded}円）`;
});
console.log('表示ラベル一覧:', priceLabels);

// 3. reduce：在庫あり商品の合計金額（税抜）を計算
const totalAmount = availableItems.reduce((sum, item) => sum + item.price, 0);
console.log('在庫あり商品の合計金額（税抜）:', totalAmount, '円');

