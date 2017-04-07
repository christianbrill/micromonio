<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],

		// micromonio.dev/game/console
		['GET', '/game/console', 'Game#console', 'game_console'],

		// micromonio.dev/modify/addedit
		['GET', '/modify/addedit', 'Modify#addedit', 'modify_addedit'],

		// micromonio.dev/game/details
		['GET', '/game/details', 'Game#details', 'game_details'],

		// micromonio.dev/modify/delete
		['GET', '/modify/delete', 'Modify#delete', 'modify_delete'],

		// micromonio.dev/game/genre
		['GET', '/game/genre', 'Game#genre', 'game_genre'],
	);
