<?php

namespace Model;

class GameModel extends \W\Model\Model {

    // function to select all game information in the database
    public function getAllGameInfoFromDatabase() {
        $sqlRequest = '
            SELECT *
            FROM videogame
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


    public function getAllGamesByConsole($consoleId=0) {
        $sqlRequest = '
            SELECT *
            FROM videogame
            WHERE vid_console = :consoleId
        ';

        $stmt = $this->dbh->prepare($sqlRequest);
        $stmt->bindValue(':consoleId', $consoleId);

        if($stmt->execute() == false) {
			debug($stmt->errorInfo());
		} else {
			return $stmt->fetchAll();
		}

        return false;
    }

}
