<?php
// ==========================================
// DEMO013: クラスとオブジェクト指向の基本
// ==========================================

declare(strict_types=1);

class CourseCard
{
    public function __construct(
        private string $title,
        private string $category,
        private int $lessonCount
    ) {
    }

    public function getSummary(): string
    {
        return "【{$this->category}】{$this->title}（全{$this->lessonCount}レッスン）";
    }
}

// インスタンス（実体）を生成してメソッドを呼び出す
$htmlCourse = new CourseCard('ページをつくる基礎講座', 'HTML & CSS', 15);
$jsCourse   = new CourseCard('ブラウザーを動かす講座', 'JavaScript', 15);
$phpCourse  = new CourseCard('サーバーサイド入門講座', 'PHP', 15);

echo $htmlCourse->getSummary() . "<br>\n";
echo $jsCourse->getSummary() . "<br>\n";
echo $phpCourse->getSummary() . "<br>\n";

