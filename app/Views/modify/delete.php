<?php $this->layout('layout', ['title' => 'Delete', 'currentPage' => 'delete']) ?>

<?php $this->start('main_content') ?>

        <?php foreach($allGames as $allInfo) : ?>
			<table class="table">
                <tr>
                    <td style="vertical-align: middle;">
                        <a href="<?= $this->url('game_details') ?>"><img src="<?= $allInfo['vid_image'] ?>" alt="<?= $allInfo['vid_name'] ?> Poster" width="230px" height="300px"></a>
                    </td>
                    <td style="vertical-align: middle;">
                        <h2 style="text-align:center"><?= $allInfo['vid_name'] ?></h2>
                    </td>
                    <td style="vertical-align: middle;">
                        <h3 style="text-align:center">Console: <?= \Controller\GameController::getConsoleNameFromValue($allInfo['vid_console']) ?></h3>
                    </td>
                    <td style="vertical-align: middle;">
                        <button type="button" name="button"><a href="#">Delete this game</a></button>
                    </td>
                </tr>
			</table>
		<?php endforeach; ?>

<?php $this->stop('main_content') ?>
