<?php

namespace RiotAPI\LeagueAPI\Objects;

/**
 *   Class BanDto
 *
 * Used in:
 *   match (v5)
 *     - @see LeagueAPI::getAccountByPuuid()
 *     - @see LeagueAPI::getAccountByRiotId()
 *
 * @package RiotAPI\LeagueAPI\Objects
 */
class AccountDto extends ApiObject
{
    /**
     * Encrypted PUUID. Exact length of 78 characters.
     *
     * Available when received from:
     *   - @see LeagueAPI::getBySummonerId
     *   - @see LeagueAPI::getByPUUID
     *   - @see LeagueAPI::getByAccountId
     *   - @see LeagueAPI::getAccountByRiotId
     *   - @see LeagueAPI::getBySummonerName
     *   - @see LeagueAPI::getByAccessToken
     *
     * @var string $puuid
     */
    public string $puuid;

    /**
     * Available when received from:
     *
     * @var string $gameName
     */
    public string $gameName;

    /**
     * Available when received from:
     *
     * @var string $tagLine
     */
    public string $tagLine;
}