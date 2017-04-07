<?php

namespace Controller;

use Model\ModifyModel;
use \W\Controller\Controller;

class ModifyController extends Controller {

	// functions for add/edit page
	public function addedit() {

		$addObject = new ModifyModel();
		$addGame = $addObject->insertGameIntoDatabase();

		$this->show('modify/addedit');
	}

	// functions for delete page
	public function delete() {
		$this->show('modify/delete');
	}

}
