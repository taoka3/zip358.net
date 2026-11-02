<?php
// ==========================================
// DEMO005: 配列・連想配列と foreach ループ
// ==========================================

// 1. インデックス配列
$languages = ['HTML', 'CSS', 'JavaScript', 'PHP'];

echo "<h3>学習する言語一覧</h3>\n<ul>\n";
foreach ($languages as $index => $lang) {
    $no = $index + 1;
    echo "  <li>{$no}. {$lang}</li>\n";
}
echo "</ul>\n";

// 2. 連想配列（キーと値のペア）
$course = [
    'title' => 'PHPサーバーサイド入門',
    'level' => '初級〜中級',
    'lessons' => 15,
];

echo "<h3>コース情報</h3>\n";
echo "講座名: {$course['title']}（レベル: {$course['level']} / 全{$course['lessons']}回）\n";

