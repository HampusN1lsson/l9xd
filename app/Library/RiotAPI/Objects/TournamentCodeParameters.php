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
 *   Class TournamentCodeParameters
 *
 * Used in:
 *   tournament-stub (v3)
 *     @link https://developer.riotgames.com/api-methods/#tournament-stub-v3/POST_createTournamentCode
 *   tournament (v3)
 *     @link https://developer.riotgames.com/api-methods/#tournament-v3/POST_createTournamentCode
 *
 * @package RiotAPI\Objects
 */
class TournamentCodeParameters extends ApiObject
{
	/**
	 *   The spectator type of the game. (Legal values: NONE, LOBBYONLY, ALL).
	 *
	 * @var string $spectatorType
	 */
	public $spectatorType;

	/**
	 *   The team size of the game. Valid values are 1-5.
	 *
	 * @var int $teamSize
	 */
	public $teamSize;

	/**
	 *   The pick type of the game. (Legal values: BLIND_PICK, DRAFT_MODE, 
	 * ALL_RANDOM, TOURNAMENT_DRAFT).
	 *
	 * @var string $pickType
	 */
	public $pickType;

	/**
	 *   Optional list of participants in order to validate the players eligible to 
	 * join the lobby. NOTE: We currently do not enforce participants at the team 
	 * level, but rather the aggregate of teamOne and teamTwo. We may add the ability to 
	 * enforce at the team level in the future.
	 *
	 * @var int[] $allowedSummonerIds
	 */
	public $allowedSummonerIds;

	/**
	 *   The map type of the game. (Legal values: SUMMONERS_RIFT, TWISTED_TREELINE, 
	 * HOWLING_ABYSS).
	 *
	 * @var string $mapType
	 */
	public $mapType;

	/**
	 *   Optional string that may contain any data in any format, if specified at 
	 * all. Used to denote any custom information about the game.
	 *
	 * @var string $metadata
	 */
	public $metadata;
}
