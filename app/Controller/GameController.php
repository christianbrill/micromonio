<?php

namespace Controller;

use Model\GameModel;
use \W\Controller\Controller;

class GameController extends Controller {

	// array for console constants
	public static $consoleValues = array(
		1 => 'PS',
		2 => 'PC',
		3 => 'XBox',
		4 => 'Megadrive',
		5 => 'SNES',
		6 => 'GameCube',
		7 => 'Nintendo Switch',
		8 => 'Game Boy',
		9 => 'Nintendo DS'
	);

	// constants
	const CONSOLE_PS = 1;
	const CONSOLE_PC = 2;
	const CONSOLE_XBOX = 3;
	const CONSOLE_MEGA = 4;
	const CONSOLE_SNES = 5;
	const CONSOLE_CUBE = 6;
	const CONSOLE_SWITCH = 7;
	const CONSOLE_BOY = 8;
	const CONSOLE_DS = 9;


	// =============================================================
	// functions for console page
	// =============================================================
	public function console() {
		
		// get games per console
		$consoleObject = new GameModel();
		$gamesByConsole = $consoleObject->getAllGamesByConsole($consoleId);

		$this->show('game/console', array(
			'allGames' => $gamesByConsole
		));
	}


	// =============================================================
	// functions for details page
	// =============================================================
	public function details() {
		$this->show('game/details');
	}


	// =============================================================
	// functions for genre page
	// =============================================================
	public function genre() {
		$this->show('game/genre');
	}

}
