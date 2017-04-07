<?php

namespace Model;

class GameModel extends \W\Model\Model {

    public function __construct() {
        parent::__construct();
        $this->setPrimaryKey('vid_id');
    }

    // function to select all game information in the database
    public function getAllGameInfoFromDatabase() {
        $sqlRequest = '
            SELECT *
            FROM videogame
            ORDER BY RAND()
            LIMIT 3
        ';

        $stmt = $this->dbh->prepare($sqlRequest);

        if($stmt->execute() == false) {
			debug($stmt->errorInfo());
		} else {
			return $stmt->fetchAll();
		}

        return false;
    }


    public function getAllGamesByConsole($consoleId) {
        $sqlRequest = '
            SELECT *
            FROM videogame
            WHERE vid_console = :id
        ';

        $stmt = $this->dbh->prepare($sqlRequest);
        $stmt->bindValue(':id', $consoleId);

        if($stmt->execute() == false) {
			debug($stmt->errorInfo());
		} else {
			return $stmt->fetchAll();
		}

        return false;
    }

}
