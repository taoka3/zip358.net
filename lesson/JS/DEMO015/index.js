// ==========================================
// DEMO015: 総合演習：タスク管理（ToDoリスト）クラスの実装
// ==========================================

class TodoManager {
  constructor() {
    this.todos = [];
    this.nextId = 1;
  }

  // タスクを追加する
  add(title) {
    const trimmed = String(title).trim();
    if (!trimmed) {
      throw new Error('タスク名を入力してください');
    }
    const newTodo = {
      id: this.nextId++,
      title: trimmed,
      completed: false,
    };
    this.todos.push(newTodo);
    return newTodo;
  }

  // 完了・未完了を切り替える
  toggle(id) {
    const target = this.todos.find((todo) => todo.id === id);
    if (target) {
      target.completed = !target.completed;
    }
    return target;
  }

  // 現在の進捗サマリーを返す
  getSummary() {
    const total = this.todos.length;
    const done = this.todos.filter((todo) => todo.completed).length;
    return {
      total,
      done,
      remaining: total - done,
    };
  }
}

// 動作確認
const app = new TodoManager();
app.add('HTMLの基本タグを学ぶ');
app.add('JavaScriptの配列と関数を試す');
app.add('PHPでフォーム処理を作る');

// 1番目と2番目のタスクを完了にする
app.toggle(1);
app.toggle(2);

console.log('全タスク一覧:', app.todos);
console.log('学習の進捗:', app.getSummary());

