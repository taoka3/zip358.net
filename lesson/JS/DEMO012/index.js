// ==========================================
// DEMO012: 例外処理（try / catch）とJSONデータ操作
// ==========================================

// 1. オブジェクトをJSON文字列に変換する（JSON.stringify）
const lessonData = {
  course: 'JavaScript',
  lessonNumber: 12,
  completed: true,
};

const jsonString = JSON.stringify(lessonData, null, 2);
console.log('JSON文字列に変換:\n', jsonString);

// 2. JSON文字列を安全にパースする関数（try / catch）
function parseJsonSafely(rawText) {
  try {
    const data = JSON.parse(rawText);
    return { ok: true, data };
  } catch (error) {
    console.error('JSONの解析に失敗しました:', error.message);
    return { ok: false, data: null };
  }
}

// 正常なJSONの読み込み
console.log('正常データ:', parseJsonSafely(jsonString));

// 壊れたJSON文字列を渡してもプログラムが止まらないことを確認
console.log('不正データ:', parseJsonSafely('{ invalid json }'));

