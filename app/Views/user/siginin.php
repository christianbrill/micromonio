<?php $this->layout('layout', ['title' => 'Signin', 'currentPage' => 'signin']) ?>

<?php $this->start('main_content') ?>
	<h2>Sign in here.</h2>
    <p>Then you will have access to all kinds of great things.</p>

    <form action="" method="post">
		<fieldset>
			<input type="email" class="form-control" name="emailToto" value="" placeholder="Email address" /><br />
			<input type="password" class="form-control" name="passwordToto1" value="" placeholder="Your password" /><br />
			<input type="submit" class="btn btn-success btn-block" value="Sign in" />
		</fieldset>
	</form>
<?php $this->stop('main_content') ?>
