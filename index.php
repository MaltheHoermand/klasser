<?php
require_once "classes/SuperHero.php";

$superman = new SuperHero("Superman",
    "Clark Kent",
    "Kan flyve, har superkræfter, er usårlig, har radarsyn",
    "Kan ikke tåle kryptonit (mister sine superkræfter og kan dø)",
    "Beskytter mennesker",
    "Gør altid alt rigtigt"
);
print ("Egenskaber for ".$superman->heroName
    ."<br>" ."Alias: ".$superman->aliasName
    ."<br>"."Superkræfter: ".$superman->superPowers
    ."<br>"."Svaghed: ".$superman->weakness
    ."<br>"."Natur: ".$superman->courage
    ."<br>"."Motal: ".$superman->morale);

