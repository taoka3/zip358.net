<?php
// ==========================================
// DEMO003: 条件分岐（if / elseif / else と match式）
// ==========================================

// 1. if / elseif / else による点数判定
$score = 82;

if ($score >= 80) {
    echo "{$score}点：優秀です！（Aランク）<br>\n";
} elseif ($score >= 60) {
    echo "{$score}点：合格です！（Bランク）<br>\n";
} else {
    echo "{$score}点：もう少し頑張りましょう（Cランク）<br>\n";
}

// 2. PHP 8以降の match式（値を返すスッキリした分岐）
$status = 'published';

$statusLabel = match ($status) {
    'draft'     => '下書き',
    'review'    => '確認中',
    'published' => '公開中',
    default     => '不明',
};

echo "記事のステータス：{$statusLabel}<br>\n";

