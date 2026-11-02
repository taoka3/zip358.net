// ==========================================
// DEMO002: データ型と四則演算・文字列操作
// ==========================================

// 1. 数値（Number）の四則演算
const price = 1200;
const quantity = 3;
const taxRate = 0.1;

const subtotal = price * quantity; // 掛け算
const tax = subtotal * taxRate;
const total = subtotal + tax;      // 足し算

console.log(`小計: ${subtotal}円 / 消費税: ${tax}円 / 合計: ${total}円`);

// 割り算と余り（%）
console.log('10 ÷ 3 の商（切り捨て）:', Math.floor(10 / 3));
console.log('10 ÷ 3 の余り:', 10 % 3);

// 2. 文字列（String）の操作
const message = 'Hello, JavaScript World!';
console.log('文字数:', message.length);
console.log('大文字に変換:', message.toUpperCase());
console.log('先頭5文字:', message.slice(0, 5));

// 3. 真偽値（Boolean）と型の確認
const isMember = true;
console.log('会員フラグ:', isMember, '型:', typeof isMember);

