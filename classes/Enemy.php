<?php

class Enemy extends Lives
{
    const MAX_HITPOINT = 50;
    // private $name;
    // private $hitPoint = 50;
    // private $attackPoint = 10;

    public function __construct($name, $attackPoint)
    {
        // $this->name = $name;
        // $this->attackPoint = $attackPoint;
        $hitPoint = 50;
        $intelligence = 0;
        parent::__construct($name, $hitPoint, $attackPoint, $intelligence);
    }

    // public function getName()
    // {
    //     return $this->name;
    // }

    // public function getHitPoint()
    // {
    //     return $this->hitPoint;
    // }

    // public function getAttackPoint()
    // {
    //     return $this->attackPoint;
    // }

    // public function doAttack($humans)
    // {

    //     // チェック１：自身のHPが0かどうか
    //     if ($this->hitPoint <= 0) {
    //         return false;
    //     }

    //     $humanIndex = rand(0, count($humans) - 1); // 添字は0から始まるので、-1する
    //     $human = $humans[$humanIndex];

    //     echo "「" . $this->getName() . "」の攻撃！\n";
    //     echo "「" . $human->getName() . "」に" . $this->attackPoint . "のダメージ！\n";
    //     $human->tookDamage($this->attackPoint);
    // }

    // public function tookDamage($damage)
    // {
    //     $this->hitPoint -= $damage;
    //     if ($this->hitPoint < 0) {
    //         $this->hitPoint = 0;
    //     }
    // }
}
