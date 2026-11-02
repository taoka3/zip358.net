<?php
// ==========================================
// DEMO004: 繰り返し処理（for と while）
// ==========================================

// 1. for文で1から10までの合計を求める
$sum = 0;
for ($i = 1; $i <= 10; $i++) {
    $sum += $i;
}
echo "1から10までの合計: {$sum}<br>\n";

// 2. ループを使ってHTMLリストを自動生成する
echo "<ul>\n";
for ($step = 1; $step <= 5; $step++) {
    echo "  <li>レッスン STEP {$step}</li>\n";
}
echo "</ul>\n";

// 3. while文によるカウントダウン
$remain = 3;
while ($remain > 0) {
    echo "残り {$remain} 回<br>\n";
    $remain--;
}

