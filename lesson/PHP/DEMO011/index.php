<?php
// ==========================================
// DEMO011: セッション（$_SESSION）を使ったアクセスカウンター
// ==========================================

session_start();

// リセットボタンが押されたらカウントを初期化
if (isset($_POST['reset'])) {
    $_SESSION['visit_count'] = 0;
}

// セッション変数をカウントアップ
$_SESSION['visit_count'] = ($_SESSION['visit_count'] ?? 0) + 1;
$count = (int)$_SESSION['visit_count'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>DEMO011 | セッション管理の基本</title>
</head>
<body>
  <h1>セッション（$_SESSION）による状態保持</h1>
  <p>このページを訪問（再読み込み）した回数：<strong><?= $count ?>回</strong></p>

  <form method="post" action="">
    <button type="submit">もう一度カウント（再読み込み）</button>
    <button type="submit" name="reset" value="1">カウントをリセット</button>
  </form>
</body>
</html>

