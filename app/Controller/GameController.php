<?php

namespace Controller;

use \W\Controller\Controller;

class GameController extends Controller {

	// functions for console page
	public function console() {
		$this->show('game/console');
	}

	// functions for details page
	public function details() {
		$this->show('game/details');
	}

	// functions for genre page
	public function genre() {
		$this->show('game/genre');
	}

}
