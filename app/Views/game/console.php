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

    <?php foreach($allGames as $allInfo) : ?>
        <p><?= $allInfo['vid_name'] ?></p>
    <?php endforeach; ?>

<?php $this->stop('main_content') ?>
