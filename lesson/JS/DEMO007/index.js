// ==========================================
// DEMO007: オブジェクトの基本と分割代入
// ==========================================

// 1. オブジェクトの作成（プロパティとメソッド）
const user = {
  id: 101,
  name: '鈴木 花子',
  role: 'learner',
  skills: ['HTML', 'CSS', 'JavaScript'],
  introduce() {
    return `${this.name}（学習中スキル: ${this.skills.join(' / ')}）`;
  },
};

console.log(user.introduce());

// 2. 分割代入（オブジェクトから必要なプロパティだけ取り出す）
const { name, role } = user;
console.log(`名前: ${name}, 権限: ${role}`);

// 3. スプレッド構文（...）でオブジェクトを複製＆更新する
const updatedUser = {
  ...user,
  role: 'developer',
};
console.log('更新後のオブジェクト:', updatedUser);

