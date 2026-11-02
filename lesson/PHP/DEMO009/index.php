<?php
// ==========================================
// DEMO009: フォームデータの受け取り（$_GET と $_POST）
// ==========================================

// POST送信された名前を取得（未送信なら空文字）
$submittedName = $_POST['user_name'] ?? '';
$safeName = htmlspecialchars(trim($submittedName), ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>DEMO009 | PHPでフォームを受け取る</title>
</head>
<body>
  <h1>フォーム送信と $_POST の受け取り</h1>

  <?php if ($safeName !== ''): ?>
    <p><strong>こんにちは、<?= $safeName ?>さん！サーバーでデータを受け取りました。</strong></p>
  <?php else: ?>
    <p>下のフォームに名前を入力して送信ボタンを押してください。</p>
  <?php endif; ?>

  <form method="post" action="">
    <label for="user_name">お名前：</label>
    <input id="user_name" type="text" name="user_name" value="<?= $safeName ?>" placeholder="例：山田">
    <button type="submit">送信する</button>
  </form>
</body>
</html>

