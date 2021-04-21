<?php

class Human
{

    // プロパティ
    const MAX_HITPOINT = 100; // 最大ＨＰの定義　定数
    private $name; // 人間の名前
    private $hitPoint = 100; // 現在のＨＰ
    private $attackPoint = 20; // 攻撃力

    public function __construct($name)
    {
        $this->name = $name;
    }

    // メソッド
    public function doAttack($enemy)
    {
        echo "[" . $this->name . "] の攻撃！\n";
        echo "【" . $enemy->name . "】に" . $this->attackPoint
            . $enemy->tookDamage($this->attackPoint);
    }

    public function tookDamage($damage)
    {
        $this->hitPoint -= $damage;

        if ($this->hitPoint < 0) {
            $this->hitPoint = 0;
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHitPoint()
    {
        return $this->hitPoint;
    }

    public function getAttackPoint()
    {
        return $this->attackPoint;
    }
}
