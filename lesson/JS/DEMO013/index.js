// ==========================================
// DEMO013: Web Storage（localStorage）を使ったデータ保存
// ==========================================

const STORAGE_KEY = 'zip358_learning_memo';

// ブラウザーの localStorage（無い環境ではメモリ上の代替オブジェクト）を利用
const storage =
  typeof localStorage !== 'undefined'
    ? localStorage
    : (() => {
        const memory = new Map();
        return {
          setItem: (k, v) => memory.set(k, String(v)),
          getItem: (k) => (memory.has(k) ? memory.get(k) : null),
          removeItem: (k) => memory.delete(k),
        };
      })();

// 1. データを保存する（オブジェクトはJSON文字列にして保存）
function saveProgress(progress) {
  storage.setItem(STORAGE_KEY, JSON.stringify(progress));
  console.log('保存しました:', progress);
}

// 2. 保存したデータを読み込む
function loadProgress() {
  const saved = storage.getItem(STORAGE_KEY);
  return saved ? JSON.parse(saved) : { completedLessons: [] };
}

saveProgress({ completedLessons: ['DEMO001', 'DEMO002', 'DEMO013'] });
console.log('読み込んだデータ:', loadProgress());

