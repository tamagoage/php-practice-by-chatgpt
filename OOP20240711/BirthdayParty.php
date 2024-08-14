<?php
namespace tamagoage\PhpPracticeByChatgpt;

require_once __DIR__ . '/../vendor/autoload.php';

use tamagoage\PhpPracticeByChatgpt\Person;

class BirthdayParty {
    public function __construct(public array $persons)
    {
    }

    public function celebrateAll() {
        foreach ($this->persons as $person) {
            echo $person->name;
            echo $person->celebrateBirthday();
        }
    }
}

$rouge = new Person("るーじゅ", 10);
$array = [];
array_push($array, $rouge);
$rougeParty = new BirthdayParty($array);
$rougeParty->celebrateAll();