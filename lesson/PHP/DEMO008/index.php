<?php
// ==========================================
// DEMO008: 日付と時刻の操作（DateTimeImmutable）
// ==========================================

date_default_timezone_set('Asia/Tokyo');

// 1. 現在日時の取得とフォーマット
$now = new DateTimeImmutable('now');
$weekDays = ['日', '月', '火', '水', '木', '金', '土'];
$w = $weekDays[(int)$now->format('w')];

echo "現在の日時: " . $now->format('Y年m月d日') . "（{$w}） " . $now->format('H:i:s') . "<br>\n";

// 2. 7日後・1ヶ月後の日付を計算する
$nextWeek = $now->modify('+7 days');
$nextMonth = $now->modify('+1 month');

echo "1週間後: " . $nextWeek->format('Y-m-d') . "<br>\n";
echo "1ヶ月後: " . $nextMonth->format('Y-m-d') . "\n";

