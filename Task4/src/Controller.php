<?php

namespace GulyaBulatova\guessnumber\Controller;

use function GulyaBulatova\guessnumber\Model\setting;
use function GulyaBulatova\guessnumber\View\MenuGame;
use function GulyaBulatova\guessnumber\DataBase\openDatabase;

function startGame()
{
    setting();
    openDatabase();
    MenuGame();
}
