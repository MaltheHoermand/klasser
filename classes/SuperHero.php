<?php

class SuperHero {
    public $heroName;
    public $aliasName;
    public $superPowers;
    public $weakness;
    public $courage;
    public $morale;

    function __construct($heroName, $aliasName, $superPowers ,$weakness, $courage, $morale) {
        $this->heroName = $heroName;
        $this->aliasName = $aliasName;
        $this->superPowers = $superPowers;
        $this->weakness = $weakness;
        $this->courage = $courage;
        $this->morale = $morale;
    }
}