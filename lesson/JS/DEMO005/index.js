// ==========================================
// DEMO005: 配列の基本と操作
// ==========================================

// 1. 配列の作成と要素の取得（インデックスは0から始まる）
const languages = ['HTML', 'CSS', 'JavaScript'];
console.log('最初の言語:', languages[0]);
console.log('要素の数:', languages.length);

// 2. 末尾への追加（push）と取り出し（pop）
languages.push('PHP');
console.log('PHPを追加後:', languages);

// 3. 特定の要素が含まれているか調べる（includes）
if (languages.includes('JavaScript')) {
  console.log('JavaScriptは学習リストに含まれています');
}

// 4. for...of 文で配列を順番に取り出す
for (const [index, lang] of languages.entries()) {
  console.log(`STEP ${index + 1}: ${lang}`);
}

