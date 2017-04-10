<?php $this->layout('layoutBootstrap', ['title' => 'Forgot Password', 'currentPage' => 'forgot']) ?>

<?php $this->start('main_content') ?>
	<h2>Sign up here.</h2>
    <p>Sign up and sell your soul. Muhahahaha.</p>

    <form action="" method="post">
		<fieldset>
			<input type="email" class="form-control" name="emailToto" value="" placeholder="Email address" /><br />
			<input type="submit" class="btn btn-success btn-block" value="Sign up" />
		</fieldset>
	</form>
<?php $this->stop('main_content') ?>
