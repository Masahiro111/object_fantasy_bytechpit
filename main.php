<?php


require_once('./classes/Human.php');
require_once('./classes/Enemy.php');
require_once('./classes/Brave.php');

$tiida = new Brave();
$goblin = new Enemy();

$tiida->name = "ティーダ";
$goblin->name = "ゴブリン";

$turn = 1; // ここを追加

//========== ここから追加する ==========
// どちらかのHPが０になるまで繰り返す
while ($tiida->hitPoint > 0 && $goblin->hitPoint > 0) {
    //========== ここまで追加する ==========

    echo "*** $turn ターン目 ***\n\n"; // ここを追加

    // 現在のHPの表示
    echo $tiida->name . "　：　" . $tiida->hitPoint . "/" . $tiida::MAX_HITPOINT . "\n";
    echo $goblin->name . "　：　" . $goblin->hitPoint . "/" . $goblin::MAX_HITPOINT . "\n";
    echo "\n";

    // 攻撃
    $tiida->doAttack($goblin);
    echo "\n";
    $goblin->doAttack($tiida);
    echo "\n";


    $turn++; // ここを追加
}

//========== ここから追加する ==========
echo "★★★ 戦闘終了 ★★★\n\n";
echo $tiida->name . "　：　" . $tiida->hitPoint . "/" . $tiida::MAX_HITPOINT . "\n";
echo $goblin->name . "　：　" . $goblin->hitPoint . "/" . $goblin::MAX_HITPOINT . "\n\n";
//========== ここまで追加する ==========