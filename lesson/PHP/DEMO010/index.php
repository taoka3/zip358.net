<?php
// ==========================================
// DEMO010: セキュリティの基本（XSS対策と入力バリデーション）
// ==========================================

// XSS（クロスサイトスクリプティング）を防ぐエスケープ関数
function h(string $str): string
{
    return htmlspecialchars($str, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

// 入力値のバリデーション（検証）関数
function validateComment(string $input): array
{
    $errors = [];
    $trimmed = trim($input);

    if ($trimmed === '') {
        $errors[] = 'コメントを入力してください。';
    } elseif (mb_strlen($trimmed, 'UTF-8') > 50) {
        $errors[] = 'コメントは50文字以内で入力してください。';
    }

    return $errors;
}

// テスト例：悪意のあるタグが含まれた文字列でも安全に無害化される
$rawInput = '<script>alert("危険")</script>こんにちは！';
$validationErrors = validateComment($rawInput);

if (empty($validationErrors)) {
    echo '安全な出力結果: ' . h($rawInput) . "\n";
} else {
    foreach ($validationErrors as $err) {
        echo 'エラー: ' . h($err) . "\n";
    }
}

