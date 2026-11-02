<?php
// ==========================================
// DEMO006: 関数の作成と型宣言
// ==========================================

declare(strict_types=1);

// 1. 引数と戻り値に型宣言をつけた関数
function calcTaxIncludedPrice(int $price, float $taxRate = 0.1): int
{
    return (int)floor($price * (1 + $taxRate));
}

// 2. 挨拶メッセージを作る関数
function createGreeting(string $name = 'ゲスト'): string
{
    return "こんにちは、{$name}さん！";
}

echo createGreeting('田中') . "<br>\n";
echo createGreeting() . "<br>\n";

$itemPrice = 2400;
$total = calcTaxIncludedPrice($itemPrice);
echo "税抜 {$itemPrice}円 → 税込 {$total}円\n";

