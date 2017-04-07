<?php

namespace Model;

class ModifyModel extends \W\Model\Model {

    $searchedId = $_GET['id'];

    public function getAllGames($searchedId) {
        $sqlRequest = '
            SELECT *
            FROM videogame
            WHERE vid_id = :id
        ';

        $stmt = $this->dbh->prepare($sqlRequest);
        $stmt->bindValue(':id', $searchedId);

        if($stmt->execute() == false) {
			debug($stmt->errorInfo());
		} else {
			return $stmt->fetchAll();
		}

        return false;
    }

    }

    public function insertGameIntoDatabase() {
        $sqlRequest = '
            INSERT INTO videogame (vid_name, vid_year, vid_editor, vid_genre, vid_console, vid_image)
            VALUES (vid_name, vid_year, vid_editor, vid_genre, vid_console, vid_image)
        ';

        $stmt = $this->dbh->exec($sqlRequest);
    }

}
