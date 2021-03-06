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

namespace App\Library\RiotAPI\Objects\StaticData;

use App\Library\RiotAPI\Objects\ApiObject;


/**
 *   Class StaticReforgedRuneDto
 * This object contains reforged rune data.
 *
 * Used in:
 *   lol-static-data (v3)
 *     @link https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getReforgedRunePaths
 *     @link https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getReforgedRunePathById
 *     @link https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getReforgedRunes
 *     @link https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getReforgedRuneById
 *
 * @package RiotAPI\Objects\StaticData
 */
class StaticReforgedRuneDto extends ApiObject
{
	/** @var string $runePathName */
	public $runePathName;

	/** @var int $runePathId */
	public $runePathId;

	/** @var string $name */
	public $name;

	/** @var int $id */
	public $id;

	/** @var string $key */
	public $key;

	/** @var string $shortDesc */
	public $shortDesc;

	/** @var string $longDesc */
	public $longDesc;

	/** @var string $icon */
	public $icon;
}
