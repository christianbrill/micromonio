<?php

namespace Model;

class ModifyModel extends \W\Model\Model {

    public function insertGameIntoDatabase() {
        $sqlRequest = '
            INSERT INTO videogame (vid_name, vid_year, vid_editor, vid_genre, vid_console, vid_image)
            VALUES (vid_name, vid_year, vid_editor, vid_genre, vid_console, vid_image)
        ';

        $stmt = $this->dbh->exec($sqlRequest);
    }

}
