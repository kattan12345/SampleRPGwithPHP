<?php

class Enemy {
    
    const MAX_HITPOINT = 50;
    public $name;
    public $hitPoint = 50;
    public $attackPoint = 10;
    
    public function doAttack($human) {
        echo "『" . $this->name . "』の攻撃" . PHP_EOL;
        echo "【" . $human->name . "】に" . $this->attackPoint . "のダメージ" . PHP_EOL;
        
        $human->tookDamage($this-attackPoint);
    }
    
    public function tookDamage($damage) {
        
    }
}