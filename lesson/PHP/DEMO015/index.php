<?php
// ==========================================
// DEMO015: 総合演習：ミニ一言学習ログ（セッション保存版）
// ==========================================

session_start();

if (!isset($_SESSION['logs'])) {
    $_SESSION['logs'] = [
        ['author' => '管理人', 'text' => 'PHPの基礎から応用までお疲れさまでした！', 'time' => '10:00'],
    ];
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $author = trim($_POST['author'] ?? '');
    $text   = trim($_POST['text'] ?? '');

    if ($text === '') {
        $error = '一言メッセージを入力してください。';
    } else {
        $_SESSION['logs'][] = [
            'author' => $author !== '' ? $author : '名無しさん',
            'text'   => $text,
            'time'   => date('H:i'),
        ];
    }
}

function h(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DEMO015 | 総合演習：ミニ一言学習ログ</title>
  <style>
    body { font-family: sans-serif; background: #f2f9ff; color: #183e60; max-width: 680px; margin: 32px auto; padding: 0 16px; }
    form, .log-item { background: #fff; border: 1px solid #cbdfee; border-radius: 8px; padding: 16px; margin-bottom: 12px; }
    .error { color: #c62828; font-weight: bold; }
  </style>
</head>
<body>
  <h1>ミニ一言学習ログ（PHP総合演習）</h1>

  <?php if ($error !== ''): ?>
    <p class="error"><?= h($error) ?></p>
  <?php endif; ?>

  <form method="post" action="">
    <p>
      <label>お名前：<input type="text" name="author" placeholder="ゲスト"></label>
    </p>
    <p>
      <label>学習メモ：<input type="text" name="text" size="40" placeholder="今日学んだことを記録しよう"></label>
    </p>
    <button type="submit">記録する</button>
  </form>

  <h2>記録一覧（<?= count($_SESSION['logs']) ?>件）</h2>
  <?php foreach (array_reverse($_SESSION['logs']) as $item): ?>
    <div class="log-item">
      <strong><?= h($item['author']) ?></strong> <small>(<?= h($item['time']) ?>)</small>
      <p><?= h($item['text']) ?></p>
    </div>
  <?php endforeach; ?>
</body>
</html>

