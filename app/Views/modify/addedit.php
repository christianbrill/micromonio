<?php $this->layout('layout', ['title' => 'Add/Edit', 'currentPage' => 'addedit']) ?>

<?php $this->start('main_content') ?>

    <form id="inputForm">
        <div class="form-group">
            <label for="name">Game Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="releaseYear">Release Year</label>
            <input type="number" class="form-control" id="releaseYear" placeholder="Release Year">
        </div>

        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input type="text" class="form-control" id="publisher" placeholder="Publisher">
        </div>

        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" id="genre" placeholder="Genre">
        </div>

        <div class="form-group">
            <label for="console">Console</label>
            <input type="text" class="form-control" id="console" placeholder="Console">
        </div>

        <div class="form-group">
            <label for="image">Game Poster URL</label>
            <input type="text" class="form-control" id="image" placeholder="Game Poster URL">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>

<?php $this->stop('main_content') ?>
