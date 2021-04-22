<?php


require_once('./classes/Human.php');
require_once('./classes/Enemy.php');
require_once('./classes/Brave.php');

$tiida = new Brave("ティーダ");
$goblin = new Enemy("ゴブリン");


$turn = 1; // ここを追加

//========== ここから追加する ==========
// どちらかのHPが０になるまで繰り返す
while ($tiida->getHitPoint() > 0 && $goblin->getHitPoint() > 0) {
    //========== ここまで追加する ==========

    echo "*** $turn ターン目 ***\n\n"; // ここを追加

    // 現在のHPの表示
    echo $tiida->getName() . "　：　" . $tiida->getHitPoint() . "/" . $tiida::MAX_HITPOINT . "\n";
    echo $goblin->getName() . "　：　" . $goblin->getHitPoint() . "/" . $goblin::MAX_HITPOINT . "\n";
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
echo $tiida->getName() . "　：　" . $tiida->getHitPoint() . "/" . $tiida::MAX_HITPOINT . "\n";
echo $goblin->getName() . "　：　" . $goblin->getHitPoint() . "/" . $goblin::MAX_HITPOINT . "\n\n";
//========== ここまで追加する ==========