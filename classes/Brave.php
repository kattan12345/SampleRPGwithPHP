<?php

class Brave extends Human {
    
    const MAX_HITPOINT = 120;
    public $hitPoint = self::MAX_HITPOINT;
    public $attackPoint = 30;
    
    public function doAttack($enemy) {
        if (rand(1, 3) === 1) {
            echo "『" . $this->name . "』のスキル発動" . PHP_EOL;
            echo "『全力斬り』" . PHP_EOL;
            echo $enemy->name . "に" . $this->attackPoint * 1.5 . "のダメージ" . PHP_EOL;
            $enemy->tookDamage($this->attackPoint * 1.5);
        } else {
            parent::doAttack($enemy);
        }
    }
    
}