<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],

		// micromonio.dev/game/console
		['GET', '/game/console', 'Game#console', 'game_console'],

		// micromonio.dev/modify/addedit
		['GET', '/modify/addedit', 'Modify#addedit', 'modify_addedit'],

		// micromonio.dev/game/details/1
		['GET', '/game/details', 'Game#details', 'game_details'],

		// micromonio.dev/modify/delete
		['GET', '/modify/delete', 'Modify#delete', 'modify_delete'],

		// micromonio.dev/game/genre
		['GET', '/game/genre', 'Game#genre', 'game_genre'],

		//micromonio.dev/signin
		//['GET', '/signin', 'User#signin', 'user_signin'],
		//['POST', '/signin', 'User#signinPost', 'user_signinpost'],

		// micromonio.dev/signup
		//['GET|POST', '/signup', 'User#signup', 'user_signup'],

		// micromonio.dev/logout
		//['GET', '/logout', 'User#logout', 'user_logout'],
	);
