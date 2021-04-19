<?php

class Human
{

    // プロパティ
    const MAX_HITPOINT = 100; // 最大ＨＰの定義　定数
    private $name; // 人間の名前
    private $hitPoint = 100; // 現在のＨＰ
    private $attackPoint = 20; // 攻撃力

    public function __construct($name, $hitPoint = 100, $attackPoint = 20)
    {
        $this->name = $name;
        $this->hitPoint = $hitPoint;
        $this->attackPoint = $attackPoint;
    }

    // メソッド
    public function doAttack($enemy)
    {
        echo "[" . $this->getName() . "] の攻撃！\n";
        echo "【" . $enemy->getName() . "】に" . $this->attackPoint
            . $enemy->tookDamage($this->attackPoint);
    }

    public function tookDamage($damage)
    {
        $this->hitPoint -= $damage;

        if ($this->hitPoint < 0) {
            $this->hitPoint = 0;
        }
    }

    public function recoveryDamage($heal, $target)
    {
        $this->hitPoint += $heal;
        if ($this->hitPoint > $target::MAX_HITPOINT) {
            $this->hitPoint = $target::MAX_HITPOINT;
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
