<?php
// ==========================================
// DEMO002: 四則演算・データ型と定数
// ==========================================

// 1. 定数の定義（書き換えられない値）
const TAX_RATE = 0.1;

// 2. 数値の四則演算
$price = 1500;
$count = 2;

$subtotal = $price * $count;
$tax = (int)($subtotal * TAX_RATE);
$total = $subtotal + $tax;

echo "小計: {$subtotal}円<br>\n";
echo "消費税: {$tax}円<br>\n";
echo "合計: {$total}円<br>\n";

// 3. 文字列の連結演算子（.）
$greeting = 'こんにちは' . '、' . 'PHPの世界！';
echo $greeting . "<br>\n";

// 4. var_dump() で型と中身を確認する
$isPublished = true;
var_dump($total, $greeting, $isPublished);

