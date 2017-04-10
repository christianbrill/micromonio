<?php

namespace Model;

class ModifyModel extends \W\Model\Model {

    // function to add a game to the database
    // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function insertGameIntoDb() {

        if (!empty($_GET)) {
            $name = isset($_GET['name']) ? trim(strip_tags($_GET['name'])) : '';
            $year = isset($_GET['year']) ? trim(strip_tags($_GET['year'])) : 0;
            $publisher = isset($_GET['publisher']) ? trim(strip_tags($_GET['publisher'])) : '';
            $genre = isset($_GET['genre']) ? trim(strip_tags($_GET['genre'])) : '';
            $console = isset($_GET['console']) ? trim(strip_tags($_GET['console'])) : '';
            $image = isset($_GET['image']) ? trim(strip_tags($_GET['image'])) : '';
        }

        $sqlRequest = '
        INSERT INTO videogame (vid_name, vid_year, vid_editor, vid_genre, vid_console, vid_image)
        VALUES (:name, :year, :publisher, :genre, :console, :image)
        ';

        $stmt = $this->dbh->prepare($sqlRequest);
        $stmt->bindValue(':name', $name, \PDO::PARAM_STR);
        $stmt->bindValue(':year', $year, \PDO::PARAM_STR);
        $stmt->bindValue(':publisher', $publisher, \PDO::PARAM_STR);
        $stmt->bindValue(':genre', $genre, \PDO::PARAM_STR);
        $stmt->bindValue(':console', $console, \PDO::PARAM_STR);
        $stmt->bindValue(':image', $image, \PDO::PARAM_STR);

        $stmt->execute();
    }


    // function to get all games
    // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function getAllGames() {

        $sqlRequest = '
            SELECT *
            FROM videogame
        ';

        $stmt = $this->dbh->prepare($sqlRequest);

        if($stmt->execute() == false) {
			debug($stmt->errorInfo());
		} else {
			return $stmt->fetchAll();
		}

        return false;
    }



    // function to get all games
    // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function deleteGameFromDatabase($gameId) {

        $sqlRequest = '
            DELETE FROM videogame
            WHERE vid_id = :gameId
        ';

        $stmt = $this->dbh->prepare($sqlRequest);
        $stmt->bindValue(':gameId', $gameId, \PDO::PARAM_INT);
        $stmt->execute();
    }

}
