<?php

namespace RiotAPI\LeagueAPI\Objects;

class AccountDto
{
    /**
     * Encrypted PUUID. Exact length of 78 characters.
     *
     * Available when received from:
     *   - @see LeagueAPI::getBySummonerId
     *   - @see LeagueAPI::getByPUUID
     *   - @see LeagueAPI::getByAccountId
     *   - @see LeagueAPI::getBySummonerName
     *   - @see LeagueAPI::getByAccessToken
     *
     * @var string $puuid
     */
    public string $puuid;

    public string $gameName;

    public string $tagLine;
}