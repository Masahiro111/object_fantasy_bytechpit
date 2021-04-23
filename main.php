<?php


require_once('./classes/Human.php');
require_once('./classes/Enemy.php');
require_once('./classes/Brave.php');
require_once('./classes/BlackMage.php');
require_once('./classes/WhiteMage.php');

$members = array();
$members[] = new Brave('ティーダ');
$members[] = new WhiteMage('ユウナ');
$members[] = new BlackMage('ルールー');

$enemies = array();
$enemies[] = new Enemy('ゴブリン', 20);
$enemies[] = new Enemy('ボム', 25);
$enemies[] = new Enemy('モルボル', 30);


$turn = 1; // ここを追加

$isFinishFlg = false;

//========== ここから追加する ==========
// どちらかのHPが０になるまで繰り返す
while (!$isFinishFlg) {
    //========== ここまで追加する ==========

    echo "*** $turn ターン目 ***\n\n"; // ここを追加

    foreach ($members as $member) {
        echo $member->getName() . " : " . $member->getHitPoint() . "/" . $member::MAX_HITPOINT . "\n";
    }
    echo "\n";
    foreach ($enemies as $enemy) {
        echo $enemy->getName() . " : " . $enemy->getHitPoint() . "/" . $enemy::MAX_HITPOINT . "\n";
    }
    echo "\n";

    foreach ($members as $member) {
        $enemyIndex = rand(0, count($enemies) - 1);
        $enemy = $enemies[$enemyIndex];

        if (get_class($member) == "WhiteMage") {
            $member->doAttackWhiteMage($enemy, $member);
        } else {
            $member->doAttack($enemy);
        }
        echo "\n";
    }
    echo "\n";

    // 現在のHPの表示
    // echo $tiida->getName() . "　：　" . $tiida->getHitPoint() . "/" . $tiida::MAX_HITPOINT . "\n";
    // echo $goblin->getName() . "　：　" . $goblin->getHitPoint() . "/" . $goblin::MAX_HITPOINT . "\n";
    // echo "\n";

    // 攻撃
    // $tiida->doAttack($goblin);
    // echo "\n";
    // $goblin->doAttack($tiida);

    foreach ($enemies as $enemy) {
        $memberIndex = rand(0, count($members) - 1);
        $member = $members[$memberIndex];
        $enemy->doAttack($member);
    }
    echo "\n";

    // 仲間の全滅チェック
    $deathCnt = 0; // HPが0以下の仲間のかず
    foreach ($members as $member) {
        if ($member->getHitPoint() > 0) {
            $isFinishFlg = false;
            break;
        }
        $deathCnt++;
    }
    if ($deathCnt === count($members)) {
        $isFinishFlg = true;
        echo "GAME OVER ... \n\n";
        break;
    }

    // 敵の全滅チェック
    $deathCnt = 0; // HPが0以下の敵の数
    foreach ($enemies as $enemy) {
        if ($enemy->getHitPoint() > 0) {
            $isFinishFlg = false;
            break;
        }
        $deathCnt++;
    }
    if ($deathCnt === count($enemies)) {
        $isFinishFlg = true;
        echo "♪♪♪ファンファーレ♪♪♪\n\n";
        break;
    }


    $turn++; // ここを追加
}

//========== ここから追加する ==========
echo "★★★ 戦闘終了 ★★★\n\n";

// 現在のHPの表示
foreach ($members as $member) {
    echo $member->getName() . " : " . $member->getHitPoint() . "/" . $member::MAX_HITPOINT . "\n";
}
echo "\n";
foreach ($enemies as $enemy) {
    echo $enemy->getName() . " : " . $enemy->getHitPoint() . "/" . $enemy::MAX_HITPOINT . "\n";
}
echo "\n";

// echo $tiida->getName() . "　：　" . $tiida->getHitPoint() . "/" . $tiida::MAX_HITPOINT . "\n";
// echo $goblin->getName() . "　：　" . $goblin->getHitPoint() . "/" . $goblin::MAX_HITPOINT . "\n\n";
//========== ここまで追加する ==========