<?php
// ==========================================
// DEMO014: 例外処理（try / catch）とエラーハンドリング
// ==========================================

declare(strict_types=1);

function divideNumbers(float $a, float $b): float
{
    if ($b === 0.0) {
        throw new InvalidArgumentException('0で割ることはできません。');
    }
    return $a / $b;
}

$patterns = [
    [100, 4],
    [50, 0], // 例外が発生するケース
];

foreach ($patterns as [$num1, $num2]) {
    try {
        $result = divideNumbers($num1, $num2);
        echo "{$num1} ÷ {$num2} = {$result}<br>\n";
    } catch (InvalidArgumentException $e) {
        echo "エラーを捕捉しました: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . "<br>\n";
    }
}

