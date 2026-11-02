<?php
// ==========================================
// DEMO007: 文字列関数と配列関数の活用
// ==========================================

// 1. 日本語文字列の文字数を数える（mb_strlen）
$text = '小さく試して、つくるを学ぶ。';
echo "文字列: {$text}<br>\n";
echo "文字数: " . mb_strlen($text, 'UTF-8') . "文字<br>\n";

// 2. カンマ区切り文字列と配列の相互変換（explode / implode）
$csv = 'HTML,CSS,JavaScript,PHP';
$tags = explode(',', $csv);
echo "スラッシュ区切りに変換: " . implode(' / ', $tags) . "<br>\n";

// 3. 配列のフィルタリング（array_filter）と変換（array_map）
$scores = [45, 78, 92, 58, 84];
$passedScores = array_filter($scores, fn(int $s): bool => $s >= 60);
$labeledScores = array_map(fn(int $s): string => "{$s}点（合格）", $passedScores);

echo "合格者リスト: " . implode('、', $labeledScores) . "\n";

