<?php $this->layout('layoutBootstrap', ['title' => 'Edit Password', 'currentPage' => 'reset']) ?>

<?php $this->start('main_content') ?>
	<h2>Sign up here.</h2>
    <p>Sign up and sell your soul. Muhahahaha.</p>

    <form action="" method="post">
		<fieldset>
			<input type="password" class="form-control" name="passwordToto1" value="" placeholder="New password" /><br />
			<input type="password" class="form-control" name="passwordToto2" value="" placeholder="Confirm your password" /><br />
			<input type="submit" class="btn btn-success btn-block" value="Change Password" />
		</fieldset>
	</form>
<?php $this->stop('main_content') ?>
