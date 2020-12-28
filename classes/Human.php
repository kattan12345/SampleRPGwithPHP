<?php

class Human {
    
    const MAX_HITPOINT = 100;
    
    public $name;
    public $hitPoint = 100;
    public $attackPoint = 20;
    
    public function doAttack($enemy) {
        echo "『" . $this->name . "』の攻撃" . PHP_EOL;
        echo "【" . $enemy->name . "】に" . $this->attackPoint . "のダメージ" . PHP_EOL;
        $enemy->tookDamage($this.attackPoint);
    }
    
    public function tookDamage() {
        
    }
}