<?php $this->layout('layout', ['title' => 'Delete', 'currentPage' => 'delete']) ?>

<?php $this->start('main_content') ?>

    <nav class="navbar navbar-default">
    <div class="container-fluid">

      <form class="navbar-form navbar-left" id="searchForm">
        <div class="form-group">
          <input type="text" class="form-control" name="searchgame" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>

    </div><!-- /.container-fluid -->
    </nav>

    <?php if (isset($_GET['searchgame'])) : ?>
        <?php foreach($allGames as $allInfo) : ?>
			<div>
				<a href="<?= $this->url('game_details') ?>"><img src="<?= $allInfo['vid_image'] ?>" alt="<?= $allInfo['vid_name'] ?> Poster" width="230px" height="300px"></a>

				<h2 style="text-align:center"><a href="<?= $this->url('game_details') ?>"><?= $allInfo['vid_name'] ?></a></h2>

				<h3 style="text-align:center"><a href="<?= $this->url('game_console') ?>">Console: <?= \Controller\GameController::getConsoleNameFromValue($allInfo['vid_console']) ?></a></h3>
			</div>
		<?php endforeach; ?>
    <?php endif; ?>

<?php $this->stop('main_content') ?>
