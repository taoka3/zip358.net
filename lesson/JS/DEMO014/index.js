// ==========================================
// DEMO014: 非同期処理（Promise と async / await・fetch）
// ==========================================

// 擬似的にサーバーからコース一覧を取得する非同期関数（Promise）
function fetchCoursesMock() {
  return new Promise((resolve) => {
    setTimeout(() => {
      resolve([
        { id: 'html', title: 'HTML & CSS 入門', lessons: 15 },
        { id: 'js', title: 'JavaScript 入門', lessons: 15 },
        { id: 'php', title: 'PHP 入門', lessons: 15 },
      ]);
    }, 300);
  });
}

// async / await を使って非同期処理を順番にわかりやすく書く
async function loadAndDisplayCourses() {
  try {
    console.log('コース情報を読み込み中...');
    const courses = await fetchCoursesMock();

    console.log('取得完了！コース数:', courses.length);
    for (const course of courses) {
      console.log(`- ${course.title}（全${course.lessons}レッスン）`);
    }
  } catch (error) {
    console.error('通信エラーが発生しました:', error);
  }
}

loadAndDisplayCourses();

