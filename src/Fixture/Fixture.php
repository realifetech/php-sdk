<?php


namespace LiveStyled\Fixture;


use LiveStyled\Competition\Competition;
use LiveStyled\Item;
use LiveStyled\Season\Season;
use LiveStyled\SportVenue\SportVenue;
use LiveStyled\Team\Team;

/**
 * Class Fixture
 * @package LiveStyled\Fixture
 * @property $iri
 * @property $_type
 * @property $id
 * @property $allowOverwrite
 * @property $status
 * @property $startAt
 * @property $isFullTime
 * @property $isTerminated
 * @property $url
 * @property $ticketUrl
 * @property $createdAt
 * @property $updatedAt
 * @property Team $home
 * @property Team $away
 * @property $homeScore
 * @property $awayScore
 * @property Season $season
 * @property Competition $competition
 * @property SportVenue $sportVenue
 */
class Fixture extends Item
{

}
