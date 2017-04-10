<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],

		// micromonio.dev/game/console/1/PS
		['GET', '/game/console/[:conId]/[:conName]', 'Game#console', 'game_console'],

		// micromonio.dev/modify/addedit
		['GET', '/modify/addedit', 'Modify#addedit', 'modify_addedit'],

		// micromonio.dev/game/console/1/PS/21/day-of-the-tentacle
		['GET', '/game/details/[:detailId]/[:detailName]', 'Game#details', 'game_details'],

		// micromonio.dev/modify/delete
		['GET', '/modify/delete', 'Modify#delete', 'modify_delete'],

		// micromonio.dev/game/genre
		['GET', '/game/genre', 'Game#genre', 'game_genre'],

		// micromonio.dev/user/forgot
		//['GET', '/forgot_password', 'User#forgot', 'user_forgot'],

		// micromonio.dev/user/reset
		//['GET', '/reset_password/[a:token]', 'User#reset', 'user_reset'],

		//micromonio.dev/signin
		//['GET', '/signin', 'User#signin', 'user_signin'],
		//['POST', '/signin', 'User#signinPost', 'user_signinpost'],

		// micromonio.dev/signup
		//['GET|POST', '/signup', 'User#signup', 'user_signup'],

		// micromonio.dev/logout
		//['GET', '/logout', 'User#logout', 'user_logout'],
	);
