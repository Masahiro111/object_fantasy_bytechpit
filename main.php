<?php

// echo "処理のはじまりはじまり～！\n\n";

require_once('./classes/Human.php');
require_once('./classes/Enemy.php');
require_once('./classes/Brave.php');

$tiida = new Brave('ティーダ');
$goblin = new Enemy('ゴプリン');

$turn = 1;
while ($tiida->getHitPoint() > 0 && $goblin->getHitPoint() > 0) {

    echo "*** $turn ターン目 ***\n\n";
    // 現在のHPの表示
    if ($turn === 1) {
        echo "START ! \n";
        $turn++;
    } else {
        echo "STATUS \n";
    }
    echo $tiida->getName() . " : " . $tiida->getHitPoint() . "/" . $tiida::MAX_HITPOINT . "\n";
    echo $goblin->getName() . " : " . $goblin->getHitPoint() . "/" . $goblin::MAX_HITPOINT . "\n\n";

    $tiida->doAttack($goblin);
    echo "\n\n";

    $goblin->doAttack($tiida);
    echo "\n\n";
}

echo "★★★ 戦闘終了 ★★★\n";
echo $tiida->getName() . "　：　" . $tiida->getHitPoint() . "/" . $tiida::MAX_HITPOINT . "\n";
echo $goblin->getName() . "　：　" . $goblin->getHitPoint() . "/" . $goblin::MAX_HITPOINT . "\n\n";
