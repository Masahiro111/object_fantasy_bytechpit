<?php

// echo "処理のはじまりはじまり～！\n\n";

require_once('./classes/Human.php');
require_once('./classes/Enemy.php');
require_once('./classes/Brave.php');

$tiida = new Brave();
$goblin = new Enemy();

$tiida->name = "ティーダ";
$goblin->name = "ゴブリン";

$turn = 1;
while ($tiida->hitPoint > 0 && $goblin->hitPoint > 0) {

    echo "*** $turn ターン目 ***\n\n";
    // 現在のHPの表示
    if ($turn === 1) {
        echo "START ! \n";
        $turn++;
    } else {
        echo "STATUS \n";
    }
    echo $tiida->name . " : " . $tiida->hitPoint . "/" . $tiida::MAX_HITPOINT . "\n";
    echo $goblin->name . " : " . $goblin->hitPoint . "/" . $goblin::MAX_HITPOINT . "\n\n";

    $tiida->doAttack($goblin);
    echo "\n\n";

    $goblin->doAttack($tiida);
    echo "\n\n";
}

echo "★★★ 戦闘終了 ★★★\n";
echo $tiida->name . "　：　" . $tiida->hitPoint . "/" . $tiida::MAX_HITPOINT . "\n";
echo $goblin->name . "　：　" . $goblin->hitPoint . "/" . $goblin::MAX_HITPOINT . "\n\n";
