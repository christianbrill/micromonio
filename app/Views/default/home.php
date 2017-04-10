<?php $this->layout('layout', ['title' => 'Home', 'currentPage' => 'home']) ?>

<?php $this->start('main_content') ?>
	<img src="https://cdn-images-1.medium.com/max/1190/1*bD9nGMBuGWBdawdmrMmzVA.png" alt="video game collage" width="100%">

	<h1 style="font-size:4em; text-align:center;">Welcome, wayward traveler!</h1>
	<p>You're looking for awesome video games? You want to add, edit, or delete games all within the confines of your own amazing database? Then this is the right place for you! Because it's your own freaking thing! You created it, so be proud and happy experimenting!</p>

	<div style="display:flex;flex-flow:row nowrap;justify-content:space-around; margin:50px 0;">
		<?php foreach($allGames as $allInfo) : ?>
			<div>
				<a href="<?= $this->url('game_details', array('gameId'=>\Controller\GameController::getConsoleNameFromValue($allInfo['vid_id']))) ?>"><img src="<?= $allInfo['vid_image'] ?>" alt="<?= $allInfo['vid_name'] ?> Poster" width="230px" height="300px"></a>

				<h2 style="text-align:center"><a href="<?= $this->url('game_details', array('gameId'=>\Controller\GameController::getConsoleNameFromValue($allInfo['vid_id']))) ?>"><?= $allInfo['vid_name'] ?></a></h2>

				<h3 style="text-align:center"><a href="<?= $this->url('game_console', array('conId'=>$allInfo['vid_console'], 'conName'=>\Controller\GameController::getConsoleNameFromValue($allInfo['vid_console']))) ?>">Console: <?= \Controller\GameController::getConsoleNameFromValue($allInfo['vid_console']) ?></a></h3>
			</div>
		<?php endforeach; ?>
	</div>
<?php $this->stop('main_content') ?>
