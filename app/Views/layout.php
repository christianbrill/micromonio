<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container">
		<header>
			<h1><?= $this->e($title) ?></h1>

			<!-- Navbar -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li <?php if($currentPage == 'home'): ?> class="active" <?php endif; ?>><a href="<?= $this->url('default_home') ?>">Home</a></li>
							<li <?php if($currentPage == 'console'): ?> class="active" <?php endif; ?>><a href="<?= $this->url('game_console') ?>">Console</a></li>
							<li <?php if($currentPage == 'addedit'): ?> class="active" <?php endif; ?>><a href="<?= $this->url('modify_addedit') ?>">Add/Edit a game</a></li>
							<li <?php if($currentPage == 'details'): ?> class="active" <?php endif; ?>><a href="<?= $this->url('game_details') ?>">Details</a></li>
							<li <?php if($currentPage == 'delete'): ?> class="active" <?php endif; ?>><a href="<?= $this->url('modify_delete') ?>">Delete a game</a></li>
							<li <?php if($currentPage == 'genre'): ?> class="active" <?php endif; ?>><a href="<?= $this->url('game_genre') ?>">Genre</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>


		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>
