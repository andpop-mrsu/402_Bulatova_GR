<?php

namespace GulyaBulatova\guessnumber\Controller;

use function GulyaBulatova\guessnumber\View\showGame;
use function GulyaBulatova\guessnumber\View\setting;
use function GulyaBulatova\guessnumber\View\greeting;
use function GulyaBulatova\guessnumber\View\endGame;
use function GulyaBulatova\guessnumber\View\replayGame;

function startGame()
{
    setting();
    greeting();
    showGame();
}

?>