<?php

/**
 * Copyright (C) 2016-2023  Edwin Flataunet
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

namespace RiotAPI\LeagueAPI\Objects;


/**
 *   Class MatchTeamDto
 *
 * Used in:
 *   match (v5)
 *     - @see LeagueAPI::getMatch
 *       @link https://developer.riotgames.com/apis#match-v5/GET_getMatch
 *
 * @package RiotAPI\LeagueAPI\Objects
 */
class MissionDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see LeagueAPI::getMatch
     *
     * @var int|float|null $PlayerScore0
     */
    public int|float|null $PlayerScore0;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getMatch
     *
     * @var int|float|null $PlayerScore1
     */
    public int|float|null $PlayerScore1;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getMatch
     *
     * @var int|float|null $PlayerScore2
     */
    public int|float|null $PlayerScore2;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getMatch
     *
     * @var int|float|null $PlayerScore3
     */
    public int|float|null $PlayerScore3;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getMatch
     *
     * @var int|float|null $PlayerScore4
     */
    public int|float|null $PlayerScore4;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getMatch
     *
     * @var int|float|null $PlayerScore5
     */
    public int|float|null $PlayerScore5;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getMatch
     *
     * @var int|float|null $PlayerScore6
     */
    public int|float|null $PlayerScore6;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getMatch
     *
     * @var int|float|null $PlayerScore7
     */
    public int|float|null $PlayerScore7;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getMatch
     *
     * @var int|float|null $PlayerScore8
     */
    public int|float|null $PlayerScore8;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getMatch
     *
     * @var int|float|null $PlayerScore9
     */
    public int|float|null $PlayerScore9;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getMatch
     *
     * @var int|float|null $PlayerScore10
     */
    public int|float|null $PlayerScore10;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getMatch
     *
     * @var int|float|null $PlayerScore11
     */
    public int|float|null $PlayerScore11;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getMatch
     *
     * @var int|float|null $PlayerScore12
     */
    public int|float|null $PlayerScore12;
}