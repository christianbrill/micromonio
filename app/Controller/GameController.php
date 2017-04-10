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

	// console constants
	const CONSOLE_PS = 1;
	const CONSOLE_PC = 2;
	const CONSOLE_XBOX = 3;
	const CONSOLE_MEGA = 4;
	const CONSOLE_SNES = 5;
	const CONSOLE_CUBE = 6;
	const CONSOLE_SWITCH = 7;
	const CONSOLE_BOY = 8;
	const CONSOLE_DS = 9;

	public static function getConsoleNameFromValue($consoleVal) {
		if( array_key_exists($consoleVal, self::$consoleValues)) {
			return self::$consoleValues[$consoleVal];
		}
		return 'Not a valid console.';
	}

	// array for genre constants
	public static $genreValues = array(
		1 => 'Adventure',
		2 => 'Action',
		3 => 'Horror',
		4 => 'RPG',
		5 => 'FPS',
		6 => 'Sports',
		7 => 'Simulation',
		8 => 'Strategy',
	);

	// genre constants
	const CONSOLE_ADVENTURE = 1;
	const CONSOLE_ACTION = 2;
	const CONSOLE_HORROR = 3;
	const CONSOLE_RPG = 4;
	const CONSOLE_FPS = 5;
	const CONSOLE_SPORTS = 6;
	const CONSOLE_SIMULATION = 7;
	const CONSOLE_STRATEGY = 8;

	public static function getGenreNameFromValue($genreVal) {
		if( array_key_exists($genreVal, self::$genreValues)) {
			return self::$genreValues[$genreVal];
		}
		return 'Not a valid genre.';
	}


	// =============================================================
	// functions for console page
	// =============================================================
	public function console($consoleId) {

		$gameModel = new \Model\GameModel();
		$allGames = $gameModel->getAllGamesByConsole($consoleId);
		$this->show('game/console', array(
			'allGames' => $allGames
		));

	}


	// =============================================================
	// functions for details page
	// =============================================================
	public function details($gameId) {

		$gameModel = new \Model\GameModel();
        $findOneGameById = $gameModel->find($gameId);

		$this->show('game/details', array(
			'oneGame' => $findOneGameById
		));
	}


	// =============================================================
	// functions for genre page
	// =============================================================
	public function genre() {

		$this->show('game/genre');
	}

}
