<?php
// ==========================================
// DEMO012: JSONデータの変換とファイルの読み書き
// ==========================================

$lessons = [
    ['id' => 'DEMO001', 'title' => 'いろいろな表示の仕方と変数'],
    ['id' => 'DEMO002', 'title' => '四則演算・データ型と定数'],
    ['id' => 'DEMO012', 'title' => 'JSONデータの変換とファイル操作'],
];

// 1. 配列をJSON文字列に変換する（日本語をそのまま読みやすく整形）
$jsonText = json_encode($lessons, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// 2. 一時ファイルに書き込み、再度読み込む
$tempFile = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'zip358_demo012.json';
file_put_contents($tempFile, $jsonText, LOCK_EX);

$loadedJson = file_get_contents($tempFile);
$decodedData = json_decode($loadedJson, true);

echo "<h3>JSON文字列の出力</h3>\n";
echo "<pre>" . htmlspecialchars($loadedJson, ENT_QUOTES, 'UTF-8') . "</pre>\n";

echo "<h3>配列に復元したデータの件数: " . count($decodedData) . "件</h3>\n";

