<?php $this->layout('layout', ['title' => 'Details', 'currentPage' => 'details']) ?>

<?php $this->start('main_content') ?>

    <?php foreach ($oneGame as $oneGameInfo) : ?>

        <div>
            <figure>
                <img src="<?= $oneGameInfo['vid_image'] ?>" alt="<?= $oneGameInfo['vid_name'] ?> Poster">
            </figure>
            <p>Release Year: <?= $oneGameInfo['vid_year'] ?></p>
            <p>Publisher: <?= $oneGameInfo['vid_editor'] ?></p>
            <p>Genre: <?= \Controller\GameController::getGenreNameFromValue($allInfo['vid_genre']) ?></p>
            <p>Console: <?= \Controller\GameController::getConsoleNameFromValue($allInfo['vid_console']) ?></p>
        </div>

        <button type="button" name="button" id="edit-game"><a href="#">Edit Game</a></button>
        <button type="button" name="button" id="delete-game"><a href="#">Delete Game</a></button>

    <?php endforeach; ?>

<?php $this->stop('main_content') ?>
