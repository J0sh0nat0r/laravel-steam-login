<?php

return [

	/**
	 * Return route
	 *
	 */
	'return_route' => env('STEAM_RETURN', '/auth/steam'),

	/**
	 * Timeout
	 */
	'timeout' => env('STEAM_TIMEOUT', 15),

	/**
	 * Method of retrieving user's info
	 */
	'method' => env('STEAM_PROFILE_METHOD', 'xml'),

	/**
	 * API key (http://steamcommunity.com/dev/apikey)
	 */
	'api_key' => env('STEAM_API_KEY', ''),

];