<?php
namespace tamagoage\PhpPracticeByChatgpt;

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
