<?php $this->layout('layout', ['title' => 'Console', 'currentPage' => 'console']) ?>

<?php $this->start('main_content') ?>

    <div style="display:flex;flex-flow:row nowrap;justify-content:space-around;">
        <h3><a href="#">PS</a></h3>
        <h3><a href="#">PC</a></h3>
        <h3><a href="#">XBox</a></h3>
        <h3><a href="#">Megadrive</a></h3>
        <h3><a href="#">SNES</a></h3>
        <h3><a href="#">GameCube</a></h3>
        <h3><a href="#">Nintendo Switch</a></h3>
        <h3><a href="#">Game Boy</a></h3>
        <h3><a href="#">Nintendo DS</a></h3>
    </div>

    <h1>Games per Console</h1>
    <table class='table'>
		<thead>
			<tr>
				<td>Poster</td>
				<td>Name</td>
				<td>Released</td>
				<td>Publisher</td>
				<td>Genre</td>
				<td>Console</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach($allGames as $allInfo) : ?>
				<tr>
					<td><img src="<?= $allInfo['vid_image'] ?>" alt="" width="250px" height="300px"></td>
					<td><?= $allInfo['vid_name'] ?></td>
					<td><?= $allInfo['vid_year'] ?></td>
					<td><?= $allInfo['vid_editor'] ?></td>
					<td><?= $allInfo['vid_genre'] ?></td>
					<td><?= $allInfo['vid_console'] ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
<?php $this->stop('main_content') ?>
