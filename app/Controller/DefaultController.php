<?php

namespace Controller;

use Model\GameModel;
use \W\Controller\Controller;

class DefaultController extends Controller {

	/**
	 * Page d'accueil par défaut
	 */
	public function home() {

		// creation of a new GameModel object
		$gameInfo = new GameModel();
		// access to the function inside GameModel
		$allGameInformation = $gameInfo->getAllGameInfoFromDatabase();
		shuffle($allGameInformation);

		$this->show('default/home', array(
			'allGames' => $allGameInformation
		));
	}

}
