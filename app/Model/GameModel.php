<?php

namespace Model;

class GameModel extends \W\Model\Model {

    public function __construct() {
        parent::__construct();
        $this->setPrimaryKey('vid_id');
    }

    // function to select all game information in the database
    // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
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



    // function to get one game by ID
    // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function getOneGameById($gameId) {
        // $sqlRequest = '
        //     SELECT *
        //     FROM videogame
        //     WHERE vid_id = :gameId
        // ';
        //
        // $stmt = $this->dbh->prepare($sqlRequest);
        // $stmt->bindValue(':gameId', $gameId, \PDO::PARAM_INT);

        
    }



    // get all games by console ID
    // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function getAllGamesByConsole($consoleId) {
        $sqlRequest = '
            SELECT *
            FROM videogame
            WHERE vid_console = :console
        ';

        $stmt = $this->dbh->prepare($sqlRequest);
        $stmt->bindValue(':console', $consoleId, \PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll();
    }

}
