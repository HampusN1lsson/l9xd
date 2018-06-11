<?php

/**
 * Copyright (C) 2016-2018  Daniel Dolejška
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace App\Library\RiotAPI\Objects;


/**
 *   Class ProviderRegistrationParameters
 *
 * Used in:
 *   tournament-stub (v3)
 *     @link https://developer.riotgames.com/api-methods/#tournament-stub-v3/POST_registerProviderData
 *   tournament (v3)
 *     @link https://developer.riotgames.com/api-methods/#tournament-v3/POST_registerProviderData
 *
 * @package RiotAPI\Objects
 */
class ProviderRegistrationParameters extends ApiObject
{
	/**
	 *   The provider's callback URL to which tournament game results in this 
	 * region should be posted. The URL must be well-formed, use the http or https 
	 * protocol, and use the default port for the protocol (http URLs must use port 80, 
	 * https URLs must use port 443).
	 *
	 * @var string $url
	 */
	public $url;

	/**
	 *   The region in which the provider will be running tournaments. (Legal 
	 * values: BR, EUNE, EUW, JP, LAN, LAS, NA, OCE, PBE, RU, TR).
	 *
	 * @var string $region
	 */
	public $region;
}
